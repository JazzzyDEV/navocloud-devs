<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - How to Create a Suggestion for Navocloud";
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
  <h2 class="text-3xl font-bold text-white mb-4">How to Create a Suggestion for Navocloud</h2>
  
  <ol class="list-decimal list-inside space-y-8 text-neutral-300">
    <!-- Step 1 -->
    <li>
      <span class="text-xl font-semibold text-white">Step 1: Create Your Suggestion</span>
      <p class="mt-2">Navigate to the <strong>Suggestions</strong> channel in our Discord server. Think of a catchy title that will grab attention and clearly reflect your idea to make it stand out!</p>
      <img src="https://cdn.discordapp.com/attachments/1287033844196704368/1287033844989562942/Screenshot_20240921_205053.jpg" alt="Step 1 Screenshot" class="mt-4 rounded shadow-md">
    </li>
    
    <!-- Step 2 -->
    <li>
      <span class="text-xl font-semibold text-white">Step 2: Create a Tutorial</span>
      <p class="mt-2">Develop a tutorial related to Navocloud, such as:</p>
      <ul class="list-disc list-inside mt-2 pl-5">
        <li>Setting up a Minecraft server using Navocloud</li>
        <li>Creating Discord bots with Navocloud</li>
        <li>Importing Minecraft worlds into servers hosted on Navocloud</li>
      </ul>
      <p class="mt-2">Make sure your tutorial is clear and informative to help users understand how to effectively utilize Navocloud.</p>
      <img src="https://cdn.discordapp.com/attachments/1287033844196704368/1287033845308199026/Screenshot_20240921_205116.jpg" alt="Step 2 Screenshot" class="mt-4 rounded shadow-md">
    </li>

    <!-- Step 3 -->
    <li>
      <span class="text-xl font-semibold text-white">Step 3: Profit!</span>
      <p class="mt-2">After posting your suggestion and tutorial, expect engagement from the community! Share your knowledge, receive feedback, and enjoy contributing to the Navocloud ecosystem.</p>
      <img src="https://cdn.discordapp.com/attachments/1287033844196704368/1287033845614514207/Screenshot_2024_0921_205203.jpg" alt="Step 3 Screenshot" class="mt-4 rounded shadow-md">
    </li>
  </ol>

  <!-- Author Note -->
  <div class="bg-gray-800 p-4 mt-8 rounded-lg shadow-lg">
    <p class="text-neutral-300">Guide by Insomniac – if you found it helpful, use his referral link <a href="https://dash.navocloud.com?ref=insomniac" class="text-coral underline">here</a>.</p>
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
