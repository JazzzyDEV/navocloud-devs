<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Deploying a Discord Bot";
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
  <h1 class="text-3xl font-bold text-white mb-4">Deploying a Discord Bot</h1>
  <p class="text-neutral-400">Estimated Time: 10 minutes</p>
  <p class="text-neutral-300 mb-6">Step-by-step guide for setting up a Discord bot on our hosting platform.</p>

  <!-- Step 1 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 1: Sign Up for a Navocloud Account</h2>
  <p class="text-neutral-400 mb-2">Visit <a href="https://dash.navocloud.com" class="text-green-400 underline">dash.navocloud.com</a> and create a free account. You'll need to verify your Discord and email through your profile settings at <a href="https://dash.navocloud.com/profile" class="text-green-400 underline">dash.navocloud.com/profile</a>.</p>
  
  <!-- Step 2 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 2: Claim Your Free Server</h2>
  <p class="text-neutral-400 mb-2">Once verified, navigate to the "Servers" tab or go to <a href="https://dash.navocloud.com/servers" class="text-green-400 underline">dash.navocloud.com/servers</a> to claim your free server.</p>

  <!-- Step 3 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 3: Set Up Your Discord Bot</h2>
  <p class="text-neutral-400 mb-2">For this guide, we will focus on setting up a Discord bot. Begin by naming your project and selecting <strong>Generic Languages or Discord Bots</strong> as the software type.</p>
  
  <!-- Step 4 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 4: Choose Your Bot's Language</h2>
  <p class="text-neutral-400 mb-2">Next, select the language your bot is written in. For example, if it's a Python bot, choose <strong>py</strong>. You can select from various options available in the specification dropdown.</p>

  <!-- Step 5 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 5: Deploy on Node TX01</h2>
  <p class="text-neutral-400 mb-2">Finally, select the node <strong>TX01</strong> as the deployment node for your bot. Once everything is set up, your Discord bot will be hosted and ready to go!</p>
  
  <p class="text-neutral-300 mt-6">You can now manage your server and monitor your bot's activity via the dashboard at <a href="https://dash.navocloud.com/servers" class="text-green-400 underline">dash.navocloud.com/servers</a>.</p>
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
