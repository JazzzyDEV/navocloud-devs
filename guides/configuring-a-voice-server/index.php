<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Configuring a Voice Server";
if (file_exists('../../components/navbar.php')) {
    include '../../components/navbar.php';
} else {
    echo "navbar.php not found!";
}

if (file_exists('../../components/header.php')) {
    include '../../components/header.php';
} else {
    echo "header.php not found!";
}

?>

<body class="bg-gray-900 text-white">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  <h1 class="text-3xl font-bold text-white mb-4">Configuring a Voice Server</h1>
  <p class="text-neutral-400">Estimated Time: 15 minutes</p>
  <p class="text-neutral-300 mb-6">How to set up and manage a voice server for seamless communication.</p>

  <!-- Step 1 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 1: Sign Up for a Navocloud Account</h2>
  <p class="text-neutral-400 mb-2">Visit <a href="https://dash.navocloud.com" class="text-green-400 underline">dash.navocloud.com</a> and create a free account. Make sure to verify your Discord and email via <a href="https://dash.navocloud.com/profile" class="text-green-400 underline">dash.navocloud.com/profile</a>.</p>
  
  <!-- Step 2 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 2: Claim Your Free Server</h2>
  <p class="text-neutral-400 mb-2">Once verified, head over to the "Servers" tab or visit <a href="https://dash.navocloud.com/servers" class="text-green-400 underline">dash.navocloud.com/servers</a> to claim your free server.</p>

  <!-- Step 3 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 3: Set Up Your Voice Server</h2>
  <p class="text-neutral-400 mb-2">For this guide, we are setting up a voice server. Start by naming your project and selecting <strong>Voice Servers</strong> as the software type.</p>

  <!-- Step 4 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 4: Choose Your Server Type</h2>
  <p class="text-neutral-400 mb-2">Next, choose between a <strong>Mumble</strong> or <strong>Teamspeak</strong> server, depending on your preference. This selection will be under the specification section.</p>

  <!-- Step 5 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 5: Deploy on Node TX01</h2>
  <p class="text-neutral-400 mb-2">Finally, select the deployment node <strong>TX01</strong>. After setting everything up, your voice server will be hosted and ready for communication!</p>
  
  <p class="text-neutral-300 mt-6">Manage and monitor your voice server via the dashboard at <a href="https://dash.navocloud.com/servers" class="text-green-400 underline">dash.navocloud.com/servers</a>.</p>

  <!-- Extra Steps for Mumble -->
  <h2 class="text-xl text-white font-semibold mt-6 mb-2">Extra Steps: Setting Up Mumble</h2>
  <p class="text-neutral-400 mb-2">To further configure your Mumble server, follow these steps:</p>

  <ol class="list-decimal list-inside text-neutral-400 mb-4 space-y-1">
    <li>Open your Mumble client and go to <strong>Server</strong> &gt; <strong>Connect</strong>.</li>
    <li>Click <strong>Add New</strong> and enter the IP and port provided by Navocloud.</li>
    <li>In the <strong>Label</strong> field, name your server (e.g., "My Voice Server").</li>
    <li>Click <strong>OK</strong> to save the settings, and then <strong>Connect</strong> to start using your Mumble server.</li>
    <li>You can manage users and server settings via the <strong>Mumble Server Control Panel</strong> in your dashboard.</li>
  </ol>

  <!-- Extra Steps for Teamspeak -->
  <h2 class="text-xl text-white font-semibold mt-6 mb-2">Extra Steps: Setting Up Teamspeak</h2>
  <p class="text-neutral-400 mb-2">For configuring Teamspeak, follow these additional steps:</p>

  <ol class="list-decimal list-inside text-neutral-400 mb-4 space-y-1">
    <li>Download and install the <a href="https://www.teamspeak.com/en/downloads" class="text-green-400 underline">Teamspeak client</a>.</li>
    <li>In the Teamspeak client, go to <strong>Connections</strong> &gt; <strong>Connect</strong>.</li>
    <li>Enter the IP address and port provided by Navocloud for your server.</li>
    <li>Click <strong>Connect</strong> to join your Teamspeak server.</li>
    <li>Use the Teamspeak <strong>Server Query</strong> feature in the control panel to manage settings, add channels, and configure permissions for users.</li>
  </ol>

  <p class="text-neutral-300 mt-6">Once your voice server is configured, it's ready for seamless communication. For any further management, use the Navocloud control panel at <a href="https://dash.navocloud.com/servers" class="text-green-400 underline">dash.navocloud.com/servers</a>.</p>
</div>

    <?php 
        if (file_exists('../../components/footer.php')) {
            include '../../components/footer.php';
        } else {
            echo "footer.php not found!";
        }
    ?>
</body>
</html>
