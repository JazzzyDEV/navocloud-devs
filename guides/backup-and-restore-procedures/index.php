<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Backup and Restore Procedures";
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
  <h1 class="text-3xl font-bold text-white mb-4">Backup and Restore Procedures</h1>
  <p class="text-green-400 font-medium mb-2">Estimated Time: 12 minutes</p>
  <p class="text-gray-300 mb-6">How to back up and restore your files, databases, and configurations.</p>

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold text-white mb-3">Step 1: Back Up Your Server Files</h2>
  <p class="text-gray-300 mb-2">To back up your server files, follow these steps:</p>
  <ol class="list-decimal list-inside text-gray-300 space-y-1 mb-6">
    <li>Log in to your server panel at <a href="https://panel.helhosting.com" class="text-green-400 underline">panel.helhosting.com</a>.</li>
    <li>Navigate to the <strong>Files</strong> section.</li>
    <li>Locate the directory <code class="bg-gray-800 px-1 py-0.5 rounded">/home/container/</code> and check the box next to it.</li>
    <li>Click on the <strong>Archive</strong> button to create a .tar file of the selected directory.</li>
    <li>Download the .tar file to your local device for safekeeping.</li>
  </ol>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold text-white mb-3">Step 2: Create a Server Backup</h2>
  <p class="text-gray-300 mb-2">You can create and manage server backups using the following steps:</p>
  <ol class="list-decimal list-inside text-gray-300 space-y-1 mb-6">
    <li>Log in to your server panel at <a href="https://panel.helhosting.com" class="text-green-400 underline">panel.helhosting.com</a>.</li>
    <li>Click on the <strong>Backups</strong> tab.</li>
    <li>Select <strong>Create Backup</strong> to initiate the backup process.</li>
  </ol>

  <!-- Backup Form -->
  <h3 class="text-xl font-semibold text-white mb-3">Backup Form</h3>
  <p class="text-gray-300 mb-2">Fill out the backup form with the following details:</p>
  <ul class="text-gray-300 space-y-1 mb-6">
    <li><strong>Backup Name:</strong> Enter a name for the backup that will help you reference it later.</li>
    <li><strong>Ignored Files & Directories:</strong> Specify any files or directories to exclude from the backup. Leave this blank to use the contents of the .pteroignore file in the root of the server directory. Wildcard matching is supported, and you can negate a rule by prefixing the path with an exclamation point.</li>
    <li><strong>Locked:</strong> Check this option to prevent the backup from being deleted until it is explicitly unlocked.</li>
  </ul>

  <!-- Step 3 -->
  <h2 class="text-2xl font-semibold text-white mb-3">Step 3: Restore from Backup</h2>
  <p class="text-gray-300 mb-2">To restore your server, follow these methods:</p>
  <ol class="list-decimal list-inside text-gray-300 space-y-2 mb-6">
    <li>
      To restore from a downloaded .tar file:
      <ul class="list-disc list-inside ml-5 space-y-1">
        <li>Upload the .tar file back to the server using FTP or the file upload option in the server panel.</li>
        <li>Unzip the .tar file in the desired directory.</li>
      </ul>
    </li>
    <li>
      To restore from a backup created within the panel:
      <ul class="list-disc list-inside ml-5 space-y-1">
        <li>Log in to your server panel at <a href="https://panel.helhosting.com" class="text-green-400 underline">panel.helhosting.com</a>.</li>
        <li>Navigate to the <strong>Backups</strong> tab.</li>
        <li>Select the backup you wish to restore and click <strong>Restore</strong>.</li>
      </ul>
    </li>
  </ol>

  <p class="text-gray-300 mt-8">By following these steps, you can efficiently back up and restore your server files and configurations. For further assistance, visit our support page or contact us on <a href="https://navocloud.com/discord" class="text-green-400 underline">navocloud.com/discord</a>.</p>
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
