<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - How to Enter Minecraft Safe Mode";
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
  <h1 class="text-3xl font-bold text-white mb-4">How to Enter Minecraft Safe Mode</h1>
  <ol class="list-decimal list-inside text-neutral-300 space-y-3 mb-6">
    <li>Close Minecraft if it's currently running.</li>
    <li>Open the Minecraft launcher.</li>
    <li>Click the <strong>Installations</strong> tab at the top.</li>
    <li>Select the version you want to modify, and click <strong>Edit</strong>.</li>
    <li>In the <strong>JVM Arguments</strong> field, add <code class="bg-gray-800 px-1 py-0.5 rounded">--safeMode</code> at the end.</li>
    <li>Click <strong>Save</strong> and launch Minecraft by clicking <strong>Play</strong>.</li>
    <li>Minecraft will now launch in Safe Mode, disabling mods and custom configurations.</li>
  </ol>
  <p class="text-neutral-300 mt-6"><strong>Note:</strong> Safe Mode helps you troubleshoot issues caused by mods or game settings.</p>
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
