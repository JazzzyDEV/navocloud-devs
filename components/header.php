<?php
function isVPN($ip) {
    $allowedIps = [
        '', 
        'another.allowed.ip',
    ];

    if (in_array($ip, $allowedIps)) {
        return false; // Treat this IP as non-VPN
    }

    $apiUrl = "http://ip-api.com/json/{$ip}?fields=status,message,proxy,hosting";
    $json = @file_get_contents($apiUrl); 

    if ($json === false) {
        return false;
    }

    $details = json_decode($json);
    if ($details === null) {
        return false;
    }

    if ($details->status === "fail") {
        return false;
    }

    if ((isset($details->proxy) && $details->proxy === true) || 
        (isset($details->hosting) && $details->hosting === true)) {
        return true;
    }

    return false;
}

$ip = $_SERVER['REMOTE_ADDR'];
$result = isVPN($ip);

if ($result === true) {
    echo "<script>window.location.href = '/vpn';</script>";
} elseif (is_string($result)) {
    echo $result;
} else {
    echo "";
}
?>




   
  <style>
    #main-content {
        display: none;
    }
</style>
</head>
<body class="bg-[#171717]">
    <div id="loading-screen" class="fixed inset-0 bg-[#171717] flex justify-center items-center z-50">
        <div role="status" class="flex flex-col items-center space-y-4">
            <!-- Tailwind spinner -->
            <svg aria-hidden="true" class="w-12 h-12 text-gray-200 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08157 50.5908C9.08157 73.0587 27.5321 91.5092 50 91.5092C72.4679 91.5092 90.9184 73.0587 90.9184 50.5908C90.9184 28.123 72.4679 9.67249 50 9.67249C27.5321 9.67249 9.08157 28.123 9.08157 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7231 75.2124 7.41289C69.5422 4.10269 63.2754 1.94025 56.6917 1.05163C51.7661 0.367573 46.7918 0.446843 41.9022 1.27873C39.4773 1.69443 38.0079 4.18666 38.8624 6.54434C39.717 8.90202 42.1877 10.2464 44.6648 9.87547C48.7762 9.25624 52.9403 9.23155 57.0313 9.80764C62.5356 10.5547 67.8009 12.5235 72.3961 15.5855C76.9912 18.6475 80.8265 22.7351 83.6341 27.5755C85.8828 31.146 87.5306 35.0637 88.5169 39.1484C89.0455 41.3043 91.5422 42.2316 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <p id="loading-text" class="text-gray-200">Loading, please wait...</p>
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('loading-text').innerText = 'Still loading...';
        }, 5000);

        window.addEventListener('load', function() {
            document.getElementById('loading-screen').style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
        });
    </script>



<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NavoCloud | <?php echo $title;          ?> </title>
  
  
  
  <script src="https://cdn.tailwindcss.com"></script>


  <!-- Required Meta Tags Always Come First -->
      <link rel="icon" type="image/png" href="/assets/imgs/just_clouds.png">
  <meta charset="utf-8" />
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="https://navocloud.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="Enjoy our professional-grade free hosting service designed for gamers. We support all games and provide robust DDoS protection with 99.99% uptime guarantee." />

  <meta name="twitter:site" content="@navocloud" />
  <meta name="twitter:creator" content="@navocloud" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="NavoCloud Empowering your online presence" />
  <meta name="twitter:description"
    content="Enjoy our professional-grade free hosting service designed for gamers. We support all games and provide robust DDoS protection with 99.99% uptime guarantee.      " />
  <meta name="twitter:image" content="/assets/imgs/banner.png" />

  <meta property="og:url" content="https://navocloud.com" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="NavoCloud" />
  <meta property="og:title" content="NavoCloud Empowering your online presence" />
  <meta property="og:description"
    content="Enjoy our professional-grade free hosting service designed for gamers. We support all games and provide robust DDoS protection with 99.99% uptime guarantee.      " />
  <meta property="og:image" content="/assets/imgs/banner.png" />

  <link rel="shortcut icon" href="/assets/imgs/just_clouds.png" />
  <link rel="stylesheet" href="/assets/css/tailwind.css" />
  <script src="/assets/js/NavoCloud.js" defer></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <style>
        body {
            font-family: poppins;
        }
        </style>

</head>

