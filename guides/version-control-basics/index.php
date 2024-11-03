<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Version Control Basics in Pterodactyl";
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
  <h1 class="text-3xl font-bold mb-4">Version Control Basics in Pterodactyl</h1>
  <p class="text-neutral-300 mb-8">
    This guide introduces the basics of version control in Pterodactyl, allowing you to manage, track, and save changes to your files and code over time. Let's explore how to use version control for better project management!
  </p>

  <!-- Step 1 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 1: Access Pterodactyl Panel</h2>
    <p class="text-neutral-300 mb-4">
      Start by logging into your Pterodactyl panel at <a href="https://panel.helhosting.com" class="text-blue-400 underline">panel.helhosting.com</a>, where your server is hosted. Navigate to your server and ensure you have access to the files section.
    </p>
  </div>

  <!-- Step 2 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 2: Install Git</h2>
    <p class="text-neutral-300 mb-4">
      Version control often requires Git, a popular version control system. If Git is not installed, access your server terminal and install Git by running:
      <pre class="bg-gray-800 p-2 rounded mt-2">sudo apt install git</pre>
    </p>
  </div>

  <!-- Step 3 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 3: Initialize a Git Repository</h2>
    <p class="text-neutral-300 mb-4">
      To begin tracking changes, navigate to the directory you wish to track and initialize a Git repository:
      <pre class="bg-gray-800 p-2 rounded mt-2">git init</pre>
      This creates a new Git repository in the current directory.
    </p>
  </div>

  <!-- Step 4 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 4: Track and Commit Changes</h2>
    <p class="text-neutral-300 mb-4">
      After modifying files, add them to the staging area with:
      <pre class="bg-gray-800 p-2 rounded mt-2">git add .</pre>
      Then, commit your changes with a message:
      <pre class="bg-gray-800 p-2 rounded mt-2">git commit -m "Your commit message"</pre>
      This saves the current state of the files.
    </p>
  </div>

  <!-- Step 5 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 5: Push to a Remote Repository (Optional)</h2>
    <p class="text-neutral-300 mb-4">
      If you have a remote repository, link it by adding the remote URL:
      <pre class="bg-gray-800 p-2 rounded mt-2">git remote add origin https://your-repo-url.git</pre>
      Then, push your changes to the remote repository:
      <pre class="bg-gray-800 p-2 rounded mt-2">git push -u origin main</pre>
      This creates a backup of your code online.
    </p>
  </div>

  <!-- Step 6 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 6: Pull Changes from the Repository</h2>
    <p class="text-neutral-300 mb-4">
      To update your local files with any changes from the remote repository, use:
      <pre class="bg-gray-800 p-2 rounded mt-2">git pull origin main</pre>
      This keeps your files up to date with the latest modifications from collaborators.
    </p>
  </div>

  <!-- Conclusion -->
  <div class="mb-8">
    <p class="text-neutral-300">
      You have now learned the basics of version control in Pterodactyl using Git! Regularly commit your changes and push to a remote repository to keep your files safe and organized.
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
