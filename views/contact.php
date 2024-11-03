<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #171717">

<?php 
$title = "Contact";
if (file_exists('./components/navbar.php')) {
    include './components/navbar.php';
} else {
    echo "navbar.php not found!";
}

if (file_exists('./components/header.php')) {
    include './components/header.php';
} else {
    echo "header.php not found!";
}
?>

<div style="margin-top: 5vh" class="flex items-center justify-center">
    <div class="form-container w-full max-w-lg">
        <h2 class="text-3xl font-semibold text-white mb-4 text-center">Contact Us</h2>
        
   <?php
session_start();

$rate_limit_time = 60;
$rate_limit_file = 'rate_limit.txt';

function read_rate_limit_file($file) {
    if (!file_exists($file)) return [];
    $entries = explode(PHP_EOL, trim(file_get_contents($file)));
    $session_times = [];
    foreach ($entries as $entry) {
        list($session_id, $timestamp) = explode('|', $entry);
        $session_times[$session_id] = $timestamp;
    }
    return $session_times;
}

function write_rate_limit_file($file, $session_times) {
    $content = '';
    foreach ($session_times as $session_id => $timestamp) {
        $content .= "$session_id|$timestamp" . PHP_EOL;
    }
    file_put_contents($file, $content);
}

$session_times = read_rate_limit_file($rate_limit_file);

$session_id = session_id();
if (isset($session_times[$session_id])) {
    $time_since_last_submission = time() - $session_times[$session_id];
    if ($time_since_last_submission < $rate_limit_time) {
        $time_remaining = $rate_limit_time - $time_since_last_submission;
        echo "<div class='fixed top-4 right-4 p-4 bg-red-500 text-white rounded-lg shadow-lg flex flex-col items-start justify-between'>
                <span>You are submitting too quickly.</span>
                <span>Please wait " . ceil($time_remaining) . " seconds before trying again.</span>
                <button onclick=\"this.parentElement.style.display='none'\" class='mt-2 text-white font-bold self-end'>✖</button>
              </div>";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ticket_number = htmlspecialchars($_POST['ticket_number']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $webhook_url = getenv('DISCORD_WEBHOOK_URL') ?: "https://discord.com/api/webhooks/1275940641435811850/wT8SIU5tBTiqrspqvFPIo9Mj-TC9CeYLRTN8C6gvAAv1Ul9qccYOOBuzVQqhZtxRsNLT";

    $data = json_encode([
        "content" => "**New Contact Form Submission**",
        "embeds" => [
            [
                "title" => $subject,
                "description" => $message,
                "color" => hexdec("FFFFFF"),
                "fields" => [
                    [
                        "name" => "Ticket Number",
                        "value" => $ticket_number ? $ticket_number : "N/A",
                        "inline" => true
                    ],
                    [
                        "name" => "Email",
                        "value" => $email,
                        "inline" => true
                    ]
                ]
            ]
        ]
    ]);

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($webhook_url, false, $context);

    if ($result !== FALSE) {
        $session_times[$session_id] = time();
        write_rate_limit_file($rate_limit_file, $session_times);
        echo "<div class='fixed top-4 right-4 p-4 bg-green-500 text-white rounded-lg shadow-lg flex items-center justify-between'>
                <span>Message sent successfully!</span>
                <button onclick=\"this.parentElement.style.display='none'\" class='ml-4 text-white font-bold'>✖</button>
              </div>";
    } else {
        echo "<div class='fixed top-4 right-4 p-4 bg-red-500 text-white rounded-lg shadow-lg flex flex-col items-start justify-between'>
                <span>Error sending message.</span>
                <span>Please try again later.</span>
                <button onclick=\"this.parentElement.style.display='none'\" class='mt-2 text-white font-bold self-end'>✖</button>
              </div>";
    }
}
?>



        <form action="" method="POST" class="space-y-6">
            <div>
                <label for="ticket_number" class="block text-sm text-white">Ticket Number (optional)</label>
                <input type="text" name="ticket_number" id="ticket_number" class="w-full px-4 py-2 mt-1 bg-[#1f1f1f] text-white border border-gray-600 rounded focus:outline-none focus:border-blue-500" placeholder="Your ticket number">
            </div>
            <div>
                <label for="email" class="block text-sm text-white">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 mt-1 bg-[#1f1f1f] text-white border border-gray-600 rounded focus:outline-none focus:border-blue-500" placeholder="Your email" required>
            </div>
            <div>
                <label for="subject" class="block text-sm text-white">Subject</label>
                <input type="text" name="subject" id="subject" class="w-full px-4 py-2 mt-1 bg-[#1f1f1f] text-white border border-gray-600 rounded focus:outline-none focus:border-blue-500" placeholder="Subject of your message" required>
            </div>
            <div>
                <label for="message" class="block text-sm text-white">Message</label>
                <textarea name="message" id="message" rows="4" class="w-full px-4 py-2 mt-1 bg-[#1f1f1f] text-white border border-gray-600 rounded focus:outline-none focus:border-blue-500" placeholder="Your message" required></textarea>
            </div>
            <button type="submit" class="w-full py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none">Send Message</button>
        </form>
    </div>
</div>

<div style="margin-top: 5vh">
<?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}
?>
</div>
</body>
</html>
