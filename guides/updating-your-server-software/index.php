<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Updating Server Software in Pterodactyl";
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
<style>
    body {
        color: white;
    }
</style>
<body class="bg-gray-900 text-white font-poppins min-h-screen p-8">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  <h1 class="text-3xl font-bold mb-4">Updating Server Software in Pterodactyl</h1>
  <p class="text-neutral-300 mb-8">
    This guide explains how to keep your server software up-to-date in Pterodactyl. Regular updates ensure better performance, security, and compatibility with plugins or mods. Follow these steps to safely update your server software.
  </p>

  <!-- Step 1 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 1: Access Your Pterodactyl Panel</h2>
    <p class="text-neutral-300 mb-4">
      Log in to your Pterodactyl panel at <a href="https://panel.helhosting.com" class="text-blue-400 underline">panel.helhosting.com</a> and select the server you want to update from your dashboard.
    </p>
  </div>

  <!-- Step 2 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 2: Stop the Server</h2>
    <p class="text-neutral-300 mb-4">
      Before making any updates, stop the server to prevent data loss or conflicts. In the server console, click the "Stop" button and wait until the server has fully shut down.
    </p>
  </div>

  <!-- Step 3 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 3: Backup Your Files (Optional but Recommended)</h2>
    <p class="text-neutral-300 mb-4">
      It’s recommended to back up important files before updating. In the file manager, download essential files or use any backup options available. This helps you revert to the previous version if needed.
    </p>
  </div>

  <!-- Step 4 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 4: Update Software Version</h2>
    <p class="text-neutral-300 mb-4">
      Go to the "Settings" tab or the specific software configuration section, depending on your software type (e.g., Minecraft, CS:GO). Select the latest version available or specify a version number if you need a particular update.
    </p>
  </div>

  <!-- Step 5 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 5: Restart the Server</h2>
    <p class="text-neutral-300 mb-4">
      Once the update is complete, return to the console and click "Start" to launch the server with the updated software. Monitor the console for any errors during startup, and verify that the update was successful.
    </p>
  </div>

  <!-- Step 6 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 6: Verify the Update</h2>
    <p class="text-neutral-300 mb-4">
      Check your server's status and version to ensure the update is fully functional. Test any plugins, mods, or configurations to confirm compatibility with the new software version.
    </p>
  </div>

  <!-- Conclusion -->
  <div class="mb-8">
    <p class="text-neutral-300">
      Congratulations! Your server software is now up-to-date. Regular updates ensure better security and performance, so repeat this process periodically or whenever new versions are released.
    </p>
  </div>
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
