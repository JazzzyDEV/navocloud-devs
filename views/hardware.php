<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Hardware";
if (file_exists('./components/navbar.php')) {
    include './components/navbar.php';
} else {
    echo "navbar.php not found!";
}

if (file_exists('./components/header.php')) {
    include './components/header.php';
} else {
    echo "header.php not found!";
}

?>

<body class="bg-gray-900 text-white">

    <!-- Header -->
    <header style="margin-top: 5vh" class="bg-blue-900 p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">Navocloud Hardware Showcase</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <!-- Hardware Categories -->
            <section id="categories" class="mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-white">Hardware Categories</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- US Free Game Hosting -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="US Free Game Hosting" class="w-full h-48 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mt-4 text-white">US Free Game Hosting</h3>
                        <p class="mt-2 text-white">High-performance servers dedicated to hosting your favorite games in the US. Reliable and completely free of charge.</p>
                    </div>
                    <!-- US Webhosting Free -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="US Webhosting Free" class="w-full h-48 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mt-4 text-white">US Webhosting Free</h3>
                        <p class="mt-2 text-white">Free web hosting services in the US, offering robust performance for all your website needs.</p>
                    </div>
                    <!-- EU Free Game Hosting -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/255px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="EU Free Game Hosting" class="w-full h-48 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mt-4 text-white">EU Free Game Hosting</h3>
                        <p class="mt-2 text-white">Optimized servers for gaming in Europe. Enjoy seamless gameplay with our free hosting services.</p>
                    </div>
                    <!-- EU Staff Node -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/255px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt="EU Staff Node" class="w-full h-48 object-cover rounded-t-lg">
                        <h3 class="text-xl font-semibold mt-4 text-white">EU Staff Node</h3>
                        <p class="mt-2 text-white">Dedicated nodes in Europe for staff operations and management, ensuring efficient and secure handling of tasks.</p>
                    </div>
                </div></main>
            </section>
            
<div class="py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-white text-center mb-8">Our DDoS Protection Providers</h2>
    
    <!-- First Row with Cloudflare, Path.net, and Cosmic Guard -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      <!-- Cloudflare Box -->
      <div class="bg-transparent border border-blue-500 shadow-lg rounded-lg p-6 text-center transform transition-transform duration-300 hover:scale-105 hover:border-blue-300">
        <img src="/assets/imgs/front-page/hardware/cloudflare.png" alt="Cloudflare Logo" class="mx-auto h-24 w-24 mb-4">
        <h3 class="text-xl font-bold text-white">Cloudflare</h3>
        <p class="mt-2 text-white">Industry-leading protection to keep your servers secure and fast.</p>
      </div>

      <!-- Path.net Box -->
      <div class="bg-transparent border border-blue-500 shadow-lg rounded-lg p-6 text-center transform transition-transform duration-300 hover:scale-105 hover:border-blue-300">
        <img src="/assets/imgs/front-page/hardware/path.ico" alt="Path.net Logo" class="mx-auto h-24 w-24 mb-4">
        <h3 class="text-xl font-bold text-white">Path.net</h3>
        <p class="mt-2 text-white">High-capacity global network built for performance and protection.</p>
      </div>

      <!-- Cosmic Guard Box -->
      <div class="bg-transparent border border-blue-500 shadow-lg rounded-lg p-6 text-center transform transition-transform duration-300 hover:scale-105 hover:border-blue-300">
        <img src="/assets/imgs/front-page/hardware/cosmic.png" alt="Cosmic Guard Logo" class="mx-auto h-24 w-24 mb-4">
        <h3 class="text-xl font-bold text-white">Cosmic Guard</h3>
        <p class="mt-2 text-white">Next-gen security ensuring uptime and preventing attacks.</p>
      </div>
    </div>

    <!-- NeoProtect Coming Soon Full Width Box -->
    <div class="bg-transparent border border-gray-500 shadow-lg rounded-lg p-6 text-center md:col-span-3 transform transition-transform duration-300 hover:scale-105 hover:border-gray-300">
      <img src="/assets/imgs/front-page/hardware/neoprotect.png" alt="NeoProtect Logo" class="mx-auto h-24 w-24 mb-4 opacity-50">
      <h3 class="text-xl font-bold text-gray-400">NeoProtect</h3>
      <p class="mt-2 text-gray-400">Coming Soon</p>
    </div>
  </div>
</div>


  
  </div>
</div>

<div class="">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Large item -->
            <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                <img src="/assets/imgs/front-page/hardware/eu-server.png" alt="Server Stuff" class="w-full h-full object-cover border border-blue-500">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h3 class="text-2xl font-bold text-white">EU Server</h3>
                        <p class="text-white">Discover our new EU node (coming soon)</p>
                    </div>
                </div>
            </div>

            <!-- Two small items -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg group h-48">
                <img src="/assets/imgs/front-page/hardware/ryzen9950x.png" alt="Server Stuff" class="w-full h-full object-cover border border-blue-500">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">Cheeky Ryzen 9950X Server</h4>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl shadow-lg group h-48">
                <img src="/assets/imgs/front-page/hardware/e5-2690.png" alt="Server Stuff" class="w-full h-full object-cover border border-blue-500">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">Small But Powerful!</h4>
                    </div>
                </div>
            </div>

            <!-- Three medium items -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg group h-48">
                <img src="/assets/imgs/front-page/hardware/512gb.png" alt="Server Stuff" class="w-full h-full object-cover border border-blue-500">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">512GB Server!</h4>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-2xl shadow-lg group h-48">
                <img src="/assets/imgs/front-page/hardware/i7-13700k.png" alt="Server Stuff" class="w-full h-full object-cover border border-blue-500">
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">Fast i7-13700k</h4>
                    </div>
                </div>
    </div>
</div>

  <div style="margin-top: 2vh" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-extrabold text-white text-center mb-8">Top Tier Hardware From Global Brands</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Cisco Box -->
      <div class="bg-transparent border border-blue-500 shadow-lg rounded-lg p-6 text-center">
        <img src="/assets/imgs/front-page/cisco-removebg.png" alt="Cisco Logo" class="mx-auto h-24 w-25 mb-4">
        <h3 class="text-xl font-bold text-white">Cisco</h3>
        <p class="mt-2 text-white">Reliable networking solutions and robust DDoS mitigation.</p>
      </div>

      <!-- Dell Box -->
      <div class="bg-transparent border border-blue-500 shadow-lg rounded-lg p-6 text-center">
        <img src="/assets/imgs/front-page/dell-removebg.png" alt="Dell Logo" class="mx-auto h-24 w-25 mb-4">
        <h3 class="text-xl font-bold text-white">Dell</h3>
        <p class="mt-2 text-white">Scalable and secure hardware solutions to support our services.</p>
      </div>
    </div>


<div class="py-8">
    <div class="relative overflow-hidden rounded-2xl shadow-lg group h-96 w-full max-w-5xl mx-auto">
        <img src="/assets/imgs/front-page/hardware/ddos-attacks-cf-stats.png
" alt="Massive Server" class="w-full h-full object-cover border border-blue-500">
        <div
            class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <div class="absolute bottom-0 left-0 right-0 p-6">
                <h3 class="text-3xl font-bold text-white">Battling Daily Attacks...</h3>
                <p class="text-lg text-white">Our industry-leading DDoS protection keeps your services online 24/7, ensuring unmatched security and performance.</p>
            </div>
        </div>
</div></div></div>

            

            <!-- Guides on Why Our Hardware is the Best -->
            <section style="margin-top: 3vh" id="guides" class="mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-white">Why Our Hardware is the Best</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Guide 1: DDoS Protection -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-white">DDoS Protection</h3>
                        <p class="mt-2 text-white">Our hardware includes advanced DDoS protection to ensure your servers stay online and operational even during large-scale attacks.</p>
                        <a href="./guides/understanding-ddos-protection-at-navocloud" class="text-blue-400 hover:underline mt-4 inline-block">Learn More</a>
                    </div>
                    <!-- Guide 2: Scalability -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-white">Scalability</h3>
                        <p class="mt-2 text-white">Easily scale your resources with our flexible hardware solutions, ensuring that you can handle increased demand without issues.</p>
                        <a href="./guides/navoclouds-flexible-scalability-solutions" class="text-blue-400 hover:underline mt-4 inline-block">Learn More</a>
                    </div>
                    <!-- Guide 3: Security Features -->
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-white">Enhanced Security</h3>
                        <p class="mt-2 text-white">Benefit from robust security features designed to keep your data safe and secure from various cyber threats.</p>
                        <a href="./guides/navocloud-security-features" class="text-blue-400 hover:underline mt-4 inline-block">Learn More</a>
                    </div>
                </div>
               </div>
            </section>




    
    
  
    <?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>
  </body>
</html>
