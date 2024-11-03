<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Navocloud's Scalability Solutions";
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
      At Navocloud, we believe in providing flexible and scalable hosting solutions for everyone. All of our services are offered for free, but as your projects grow, you may want to scale up your resources. Whether it's handling more traffic, increasing storage, or adding more features, we've got you covered without any upfront costs.
    </p>
  </section>

  <!-- Why Scalability Matters -->
  <section class="mb-12">
    <h3 class="text-xl font-semibold text-blue-300 mb-2">Why Scalability Matters</h3>
    <p class="text-neutral-300 leading-relaxed">
      Scalability ensures that your server resources can adapt to fluctuations in demand. Without scalable solutions, your services may suffer from downtime or slow performance during traffic spikes. At Navocloud, our infrastructure allows you to scale seamlessly, ensuring consistent performance even during high demand.
    </p>
  </section>

  <!-- Navocloud's Flexible Scalability Solutions -->
  <section class="mb-12">
    <h3 class="text-xl font-semibold text-blue-300 mb-2">Navocloud’s Flexible Scalability Solutions</h3>
    
    <!-- Scalable Resources at No Cost -->
    <h4 class="text-lg font-semibold text-blue-200 mb-2">Scalable Resources at No Cost</h4>
    <p class="text-neutral-300 leading-relaxed">
      We offer everyone the ability to scale their resources for free. You can upgrade your server performance and features by actively contributing to our community or through various engagement activities.
    </p>
    <ul class="list-disc ml-5 space-y-2 text-neutral-300">
      <li><strong>Donations:</strong> Support Navocloud through donations to unlock enhanced scalability options.</li>
      <li><strong>Community Engagement:</strong> Earn upgrades by inviting others to Navocloud, completing reviews and surveys, bumping our services, or being active in our Discord community.</li>
      <li><strong>Referral Program:</strong> Refer friends or new users to Navocloud to earn additional scalability features.</li>
    </ul>

    <!-- Future-Proof Infrastructure -->
    <h4 class="text-lg font-semibold text-blue-200 mb-2 mt-4">Future-Proof Infrastructure</h4>
    <p class="text-neutral-300 leading-relaxed">
      Our infrastructure is designed to scale with your needs, allowing you to easily handle any future growth. Whether you are running a small personal project or a large-scale application, Navocloud offers a solution that grows with you at no cost.
    </p>
    <ul class="list-disc ml-5 space-y-2 text-neutral-300">
      <li><strong>Auto-Scaling Options:</strong> Automatically scale your server resources based on traffic patterns.</li>
      <li><strong>Custom Solutions:</strong> We provide customizable scaling options for resource-intensive projects.</li>
    </ul>
  </section>

  <!-- How to Earn Upgrades -->
  <section class="mb-12">
    <h3 class="text-xl font-semibold text-blue-300 mb-2">How to Earn Upgrades</h3>
    <ul class="list-disc ml-5 space-y-2 text-neutral-300">
      <li><strong>Invite Friends:</strong> Earn credits by inviting friends to sign up for Navocloud.</li>
      <li><strong>Complete Surveys & Reviews:</strong> Help us improve by completing feedback surveys or leaving reviews and earn credits.</li>
      <li><strong>Stay Active in Discord:</strong> Participate in our Discord community by being active, and earn server upgrades.</li>
      <li><strong>Bumping & Promotion:</strong> Bump Navocloud on various platforms to earn additional scalability credits.</li>
    </ul>
  </section>

  <!-- Conclusion -->
  <section class="mb-12">
    <h3 class="text-xl font-semibold text-blue-300 mb-2">Conclusion</h3>
    <p class="text-neutral-300 leading-relaxed">
      At Navocloud, we make it easy to scale your resources without any costs. By engaging with our community and supporting us through various activities, you can enjoy enhanced server performance and features for free. Join our community today and take full advantage of our flexible and scalable infrastructure.
    </p>
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
