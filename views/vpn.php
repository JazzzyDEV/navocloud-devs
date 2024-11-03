<?php
function isVPN($ip) {
    $apiUrl = "http://ip-api.com/json/{$ip}?fields=status,message,proxy,hosting";
    $json = @file_get_contents($apiUrl); 

    if ($json === false) {
        echo "Error 1: Could not retrieve data from API<br>";
        return false;
    }

    $details = json_decode($json);
    if ($details === null) {
        echo "Error 2: Failed to decode JSON response<br>";
        return false;
    }

    if ($details->status === "fail") {
        echo "Error 3: API request failed - {$details->message}<br>";
        return false;
    }

    if (isset($details->proxy) && $details->proxy === true || isset($details->hosting) && $details->hosting === true) {
        return true;
    }

    return false;
}

$ip = $_SERVER['REMOTE_ADDR'];
$result = isVPN($ip);

if ($result === false) {
    header("Location: /");
    exit();
} else {
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We do not allow VPN's on our network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/679740891a.js" crossorigin="anonymous"></script>
    <style>
        #page-border {
            border: 5px solid red;
        }
        .full-width-button {
            width: calc(2 * 9rem + 1rem);
        }
    </style>
</head>
<body id="page-border" class="bg-[#171717] text-white flex flex-col items-center justify-center h-screen">

    <div class="text-center">
        <img src="/assets/imgs/front-page/undraw_Surveillance_re_8tkl-1.png" alt="Under Construction Icon" class="mx-auto w-64 h-auto">
        <h1 class="text-6xl font-bold mt-6">We've Detected A VPN</h1>
        <p class="text-xl mt-4">Mistake? Make a ticket.</p>

        <!-- Buttons -->
        <div class="mt-8 space-x-4">
            <!-- Go Back Button -->
            <a href="javascript:history.back()" class="inline-block bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-md">
                <i class="fas fa-arrow-left mr-2"></i> Go Back
            </a>

            <!-- Discord Button -->
            <a href="/discord" target="_blank" class="inline-block bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-6 rounded-md">
                <i class="fab fa-discord mr-2"></i> Join Discord
            </a>
        </div>

        <!-- Full Width Button with Page Reload -->
        <div class="mt-4">
            <a href="javascript:location.reload();" class="inline-block bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded-md full-width-button">
                <i class="fas fa-sync-alt mr-2"></i> Reload Page
            </a>
        </div>
    </div>

</body>
</html>
