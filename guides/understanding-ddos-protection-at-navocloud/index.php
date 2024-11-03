<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - DDoS Protection Overview";
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
<body class="bg-gray-900 text-white">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  
  <!-- Overview -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Overview</h2>
    <p class="leading-relaxed">
      In the world of online hosting, DDoS (Distributed Denial of Service) attacks are a common threat. These attacks aim to overload a server with traffic, causing disruptions or complete downtime. At Navocloud, we take server protection seriously by implementing state-of-the-art DDoS protection from industry-leading providers, <span class="text-blue-400">Path.net</span> and <span class="text-blue-400">CosmicGuard</span>.
    </p>
  </section>

  <!-- What is DDoS Protection? -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">What is DDoS Protection?</h2>
    <p class="leading-relaxed">
      DDoS protection is a system that monitors traffic coming to your servers and filters out malicious or excessive requests designed to overwhelm the network. Without this protection, even small DDoS attacks could bring down a server, leading to downtime and loss of service.
    </p>
  </section>

  <!-- How Navocloud Protects Your Servers -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">How Navocloud Protects Your Servers</h2>

    <!-- Path.net Protection -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold text-blue-300 mb-2">Path.net Protection</h3>
      <p class="leading-relaxed mb-4">
        Path.net provides Navocloud with high-capacity DDoS mitigation, capable of handling large-scale attacks with ease. Their infrastructure detects unusual traffic spikes and neutralizes threats without affecting legitimate traffic, ensuring your server remains stable and operational.
      </p>
      <ul class="list-disc ml-5 space-y-2">
        <li><span class="text-blue-300 font-medium">Global Network:</span> Path.net operates a globally distributed network, allowing for fast response to attacks wherever they occur.</li>
        <li><span class="text-blue-300 font-medium">Large-Scale Defense:</span> With the ability to handle over <span class="text-blue-300">10+ Tbps</span> of attack traffic, Path.net is built to withstand some of the largest DDoS attacks in history.</li>
        <li><span class="text-blue-300 font-medium">Real-Time Protection:</span> Their system identifies and mitigates attacks in real-time, keeping your services running without noticeable interruption.</li>
      </ul>
    </div>

    <!-- CosmicGuard Protection -->
    <div>
      <h3 class="text-xl font-semibold text-blue-300 mb-2">CosmicGuard Protection</h3>
      <p class="leading-relaxed mb-4">
        CosmicGuard provides additional DDoS mitigation with intelligent protection strategies. They help us protect against layer 3/4 attacks, such as SYN floods or volumetric attacks, and also offer protection against more sophisticated layer 7 (application-level) attacks.
      </p>
      <ul class="list-disc ml-5 space-y-2">
        <li><span class="text-blue-300 font-medium">Proactive Monitoring:</span> CosmicGuard’s network continuously monitors traffic for patterns that may indicate a DDoS attack.</li>
        <li><span class="text-blue-300 font-medium">Customizable Defense:</span> Their protection is highly customizable, allowing us to adjust defense settings to fit the needs of your specific service.</li>
      </ul>
    </div>
  </section>

  <!-- Benefits of Our DDoS Protection -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Benefits of Our DDoS Protection</h2>
    <ul class="list-disc ml-5 space-y-2">
      <li><span class="text-blue-300 font-medium">99.9% Uptime Guarantee:</span> With both Path.net and CosmicGuard safeguarding your servers, we offer a high uptime guarantee, even during large-scale DDoS attacks.</li>
      <li><span class="text-blue-300 font-medium">Seamless Integration:</span> Our DDoS protection is built directly into our infrastructure. Once your server is set up, it’s automatically protected.</li>
      <li><span class="text-blue-300 font-medium">Reduced Latency:</span> Thanks to the global distribution of protection nodes, your server’s latency remains minimal, even when under attack.</li>
    </ul>
  </section>

  <!-- How to Enable DDoS Protection -->
  <section class="mb-12">
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">How to Enable DDoS Protection</h2>
    <p class="leading-relaxed">
      All Navocloud-hosted servers automatically come with <span class="text-blue-400">Path.net</span> and <span class="text-blue-400">CosmicGuard</span> DDoS protection enabled. There’s nothing additional you need to do to activate this feature. If you experience any issues or need custom configuration, feel free to open a support ticket through our <a href="https://navocloud.com/discord" class="text-blue-500 underline">Discord</a>.
    </p>
  </section>

  <!-- Conclusion -->
  <section>
    <h2 class="text-2xl font-semibold text-blue-400 mb-4">Conclusion</h2>
    <p class="leading-relaxed">
      At Navocloud, your server’s uptime and reliability are our top priority. Our partnership with <span class="text-blue-400">Path.net</span> and <span class="text-blue-400">CosmicGuard</span> allows us to offer some of the best DDoS protection available, ensuring your servers stay online and perform optimally, even during large-scale attacks. If you have any questions or need assistance, our support team is here to help.
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
