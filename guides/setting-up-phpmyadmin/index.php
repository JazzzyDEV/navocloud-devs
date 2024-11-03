<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Setting Up phpMyAdmin";
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

<body class="bg-gray-900 text-white font-poppins min-h-screen p-8">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  <h1 style="color: white" class="text-3xl  font-bold mb-4">Setting Up phpMyAdmin</h1>
  <p class="text-neutral-300 mb-8">
    This guide will help you set up phpMyAdmin on your server. phpMyAdmin provides a user-friendly interface to manage your databases efficiently. Let's get started!
  </p>

  <!-- Step 1 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 1: Open phpMyAdmin</h2>
    <p class="text-neutral-300 mb-4">
      To begin, access the phpMyAdmin setup by going to <a href="https://navocloud.com/pma" class="text-blue-400 underline">navocloud.com/pma</a>.
    </p>
  </div>

  <!-- Step 2 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 2: Log in to phpMyAdmin</h2>
    <p class="text-neutral-300 mb-4">
      Enter your MySQL database username and password. This is usually the same as your server's database credentials.
    </p>
  </div>

  <!-- Step 3 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 3: Explore the phpMyAdmin Interface</h2>
    <p class="text-neutral-300 mb-4">
      Once logged in, you’ll see a dashboard with a list of databases on the left. Familiarize yourself with the interface, as this is where you’ll manage your databases.
    </p>
  </div>

  <!-- Step 4 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 4: Create a Database (Optional)</h2>
    <p class="text-neutral-300 mb-4">
      To create a new database, go to the "Databases" tab at the top. Enter the database name and select the collation (e.g., <code class="bg-gray-800 px-1 py-0.5 rounded">utf8_general_ci</code> for general use) before clicking “Create.”
    </p>
  </div>

  <!-- Step 5 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 5: Manage Tables and Entries</h2>
    <p class="text-neutral-300 mb-4">
      To manage tables, select a database and navigate through the options (e.g., "Structure," "Insert," "Export") to manage your data. You can add, edit, or delete entries directly from the interface.
    </p>
  </div>

  <!-- Step 6 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 6: Secure phpMyAdmin</h2>
    <p class="text-neutral-300 mb-4">
      For security, make sure to keep your phpMyAdmin login credentials safe. Consider setting up IP restrictions or using SSL for added security on your server.
    </p>
  </div>

  <!-- Conclusion -->
  <div class="mb-8">
    <p class="text-neutral-300">
      You’ve successfully set up phpMyAdmin! Now you can manage your databases with ease. For more complex operations, refer to the phpMyAdmin documentation.
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
