<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Installing a CMS";
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
  <h1 class="text-3xl font-bold text-white mb-4">Installing a CMS</h1>
  <p class="text-neutral-400">Estimated Time: 10 minutes</p>
  <p class="text-neutral-300 mb-6">Guide for installing and configuring popular CMS platforms like WordPress.</p>

  <p class="text-neutral-300 mb-4">To request web hosting for your CMS, follow these steps:</p>

  <!-- Step 1 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 1: Request Hosting</h2>
  <p class="text-neutral-300 mb-2">Head to <a href="https://navocloud.com/discord" class="text-green-400 underline">navocloud.com/discord</a> or <a href="https://discord.gg/navocloud" class="text-green-400 underline">discord.gg/navocloud</a> to create a ticket for your web hosting request. In your ticket, provide the following details:</p>
  <ul class="list-disc list-inside text-neutral-300 mb-4">
    <li><strong>Hosting Type:</strong> Specify the type of hosting you need (e.g., WordPress, pure HTML, PHP, Node.js, reverse proxy, etc.).</li>
    <li><strong>Subdomain:</strong> If you don't have a subdomain, you can use a format like <em>something.navocloudhosting.com</em>.</li>
    <li><strong>Email:</strong> Provide an email address so we can assign you the server.</li>
  </ul>

  <!-- Step 2 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 2: Set Up Your CMS</h2>
  <p class="text-neutral-300 mb-2">Once your hosting is assigned, follow the CMS-specific installation guide to get your platform up and running. For example, if you're installing WordPress:</p>

  <ol class="list-decimal list-inside text-neutral-300 mb-4">
    <li>Access your server through the provided credentials.</li>
    <li>Download the latest version of WordPress from <a href="https://wordpress.org/download" class="text-green-400 underline">wordpress.org/download</a>.</li>
    <li>Upload the WordPress files to your server's root directory.</li>
    <li>Navigate to your domain in a web browser to complete the WordPress installation through the setup wizard.</li>
    <li>Follow the prompts to configure your database and administrative settings.</li>
  </ol>

  <p class="text-neutral-300 mb-4">If you're installing a different CMS, refer to their respective installation guides for detailed instructions.</p>

  <p class="text-neutral-300 mt-6">For additional help or troubleshooting, visit our support channel on Discord at <a href="https://navocloud.com/discord" class="text-green-400 underline">navocloud.com/discord</a>.</p>
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
