<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Fixing '/the-requested-resource-does-not-exist-on-this-server' Error";
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
  <h2 class="text-3xl font-bold text-blue-400 mb-4">How to Fix "/the-requested-resource-does-not-exist-on-this-server" Error</h2>
  <p class="text-neutral-300 leading-relaxed mb-6">
    If you're encountering this error while using Pterodactyl, follow these steps to resolve the issue:
  </p>

  <ol class="list-decimal ml-5 space-y-4 text-neutral-300 leading-relaxed">
    <li>
      <strong>Reload the Page:</strong>
      <p class="text-neutral-300">Sometimes, the error occurs due to a temporary issue. Simply try refreshing the page to see if the error resolves.</p>
    </li>
    <li>
      <strong>Clear Cache:</strong>
      <p class="text-neutral-300">Cached files in your browser may cause issues with loading the correct resources. Clear your browser’s cache and reload the page:</p>
      <ul class="list-disc ml-5 space-y-2 text-neutral-300">
        <li><strong>Google Chrome:</strong> Go to <em>Settings > Privacy and Security > Clear Browsing Data</em>, then select "Cached images and files."</li>
        <li><strong>Firefox:</strong> Go to <em>Settings > Privacy & Security > Clear Data</em>, then clear the cache.</li>
      </ul>
    </li>
    <li>
      <strong>Check Server Existence:</strong>
      <p class="text-neutral-300">Visit <a href="https://dash.navocloud.com" class="text-blue-500 underline">dash.navocloud.com</a> and verify if the server you're looking for still exists.</p>
      <p class="text-neutral-300">If the server is listed but you're still encountering the error, you may need further help.</p>
    </li>
    <li>
      <strong>Contact Support:</strong>
      <p class="text-neutral-300">If the issue persists or the server exists but isn't accessible, contact our support team via Discord: <a href="https://discord.gg/navocloud" class="text-blue-500 underline">discord.gg/navocloud</a>. We'll assist you in resolving the issue.</p>
    </li>
  </ol>
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
