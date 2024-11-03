<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Setting Up SSL Certificates";
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
  <h1 class="text-3xl font-bold text-white mb-4">Setting Up SSL Certificates</h1>
  <p class="text-neutral-400">Estimated Time: 5 minutes</p>
  <p class="text-neutral-300 mb-6">Learn how to set up SSL certificates for secure web hosting.</p>

  <!-- Step 1 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 1: Log In to the Web Panel</h2>
  <p class="text-neutral-300 mb-2">Visit <a href="https://web.navocloud.com" class="text-green-400 underline">web.navocloud.com</a> and log in to your account.</p>

  <!-- Step 2 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 2: Manage Your Domain</h2>
  <p class="text-neutral-300 mb-2">Navigate to the domain management section. Click on <strong>Manage</strong> next to the domain for which you want to set up the SSL certificate.</p>

  <!-- Step 3 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 3: Access SSL/TLS Settings</h2>
  <p class="text-neutral-300 mb-2">Click on the <strong>SSL/TLS</strong> tab to access the SSL certificate management options.</p>

  <!-- Step 4 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 4: Create a New Let's Encrypt Certificate</h2>
  <p class="text-neutral-300 mb-2">In the SSL/TLS section, find the <strong>Actions</strong> dropdown menu and select <strong>New Let's Encrypt Certificate</strong>.</p>

  <!-- Step 5 -->
  <h2 class="text-xl text-white font-semibold mb-2">Step 5: Create and Install the Certificate</h2>
  <p class="text-neutral-300 mb-2">Click on <strong>Create</strong> to generate the new SSL certificate. Once the certificate is created, it will automatically be installed on your domain.</p>

  <p class="text-neutral-300 mt-6">Your SSL certificate is now set up, ensuring a secure connection for your website. For additional support, visit our help section or contact support on <a href="https://navocloud.com/discord" class="text-green-400 underline">navocloud.com/discord</a>.</p>
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
