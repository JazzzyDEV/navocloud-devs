<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Navocloud Security Features";
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

  <!-- Overview Section -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Overview</h2>
    <p class="text-neutral-300 leading-relaxed">
      At Navocloud, we take security seriously. Our hosting services are designed with robust security measures to protect your servers and data from various cyber threats. Whether you're hosting a website, a game server, or other applications, you can rest assured that your environment is safe and secure with us.
    </p>
  </section>

  <!-- Importance of Security -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Why Security is Important</h2>
    <p class="text-neutral-300 leading-relaxed">
      In today’s digital landscape, cyber threats are increasingly sophisticated. Protecting your data, servers, and user information is critical to maintaining trust and operational stability. Navocloud’s advanced security features safeguard your servers from malicious attacks, data breaches, and unauthorized access.
    </p>
  </section>

  <!-- Security Features Section -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Navocloud's Security Features</h2>

    <!-- DDoS Protection -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold text-blue-300 mb-2">DDoS Protection</h3>
      <p class="text-neutral-300 leading-relaxed mb-4">
        We partner with industry-leading providers <span class="text-blue-300 font-medium">Path.net</span> and <span class="text-blue-300 font-medium">CosmicGuard</span> to offer advanced DDoS protection. This ensures that your servers remain operational, even in the face of large-scale DDoS attacks.
      </p>
      <ul class="list-disc ml-5 space-y-2 text-neutral-300">
        <li><span class="text-blue-300 font-medium">Mitigation:</span> Real-time protection from DDoS attacks, keeping your server online during high-volume threats.</li>
        <li><span class="text-blue-300 font-medium">Automatic Response:</span> Our system automatically detects and mitigates malicious traffic to prevent service interruptions.</li>
      </ul>
    </div>

    <!-- Secure Data Encryption -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold text-blue-300 mb-2">Secure Data Encryption</h3>
      <p class="text-neutral-300 leading-relaxed mb-4">
        Navocloud implements data encryption to secure your sensitive information. This includes encrypting data both in transit and at rest, ensuring that unauthorized users cannot access or intercept it.
      </p>
      <ul class="list-disc ml-5 space-y-2 text-neutral-300">
        <li><span class="text-blue-300 font-medium">SSL/TLS Encryption:</span> Ensures secure data transmission between servers and clients.</li>
        <li><span class="text-blue-300 font-medium">Encrypted Storage:</span> Data at rest is encrypted, adding a layer of security for stored information.</li>
      </ul>
    </div>

    <!-- Account Security -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold text-blue-300 mb-2">Account Security</h3>
      <p class="text-neutral-300 leading-relaxed mb-4">
        We prioritize your account security with multi-factor authentication (MFA) and secure access controls. You can enable additional layers of protection to ensure only authorized users access your servers.
      </p>
      <ul class="list-disc ml-5 space-y-2 text-neutral-300">
        <li><span class="text-blue-300 font-medium">2FA (Two-Factor Authentication):</span> Add an extra layer of security to your account with 2FA.</li>
        <li><span class="text-blue-300 font-medium">Secure Password Policies:</span> Encourage users to create strong, secure passwords with our enforced password policies.</li>
      </ul>
    </div>

  </section>
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
