<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Affiliates";
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
    <style>


    body {
        color: white;
    }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-2px);
            }
        }
        .bounce {
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body class="bg-[#0F0D2D] text-white">

    <!-- Hero Section -->
    <section class="relative0 bg-cover bg-center" style="height: 102.5vh; background-image: url('https://wallpaperaccess.com/full/4172522.jpg'); margin-top: -10vh">
        <div class="absolute inset-0 bg-black bg-opacity-0 flex items-center justify-center">
            <div class="text-center space-y-4">
                <span class="bg-indigo-700 text-white py-1 px-3 rounded-full text-sm uppercase">Affiliate Program</span>
                <h1 class="text-4xl md:text-6xl font-bold">Join our affiliate team<br> and Earn up to 90%* Payout</h1>
                <p class="text-lg mt-4">Start earning high commissions with exclusive benefits tailored for our partners!</p>
            </div>
        </div>
        
        <!-- Arrow Icon -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <svg class="w-8 h-8 text-white bounce cursor-pointer" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="scrollArrow">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </section>
<section class="py-20 bg-[#13112E] text-white">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold mb-6">Copyable Assets</h2>
        <p class="text-lg text-gray-400">Here are widgets and assets that you can copy for your own use.</p>
    </div>

    <style>
        .custom-box {
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
            background-color: transparent;
            border: 2px solid blue;
        }
        .grid-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .grid-custom > div {
            margin-bottom: 20px;
        }
        @media (max-width: 640px) {
            .custom-box {
                max-width: 90%; /* Restrict width to 90% of the mobile screen */
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>

    <div class="grid-custom">
        <div class="p-4 md:p-8 rounded-lg custom-box">
            <h3 class="text-lg font-bold mb-4">Discord Widget (No Background, White Text)</h3>
            <div class="rounded-lg shadow-md p-4 flex items-center space-x-4">
                <div>
                    <img src="/assets/imgs/just_clouds.png" alt="NavoCloud" class="w-10 h-10">
                </div>
                <div class="flex-1">
                    <div class="text-white-400 text-xs">YOU'VE BEEN INVITED TO JOIN A SERVER</div>
                    <div class="text-white-600 font-semibold text-sm">FREE HOST | NavoCloud</div>
                    <div class="text-xs text-gray-500 flex items-center">
                        <span class="text-green-500 mr-1">●</span> 560 Online
                        <span class="ml-3 text-gray-400">●</span> 2,423 Members
                    </div>
                </div>
                <div>
                    <a href="https://navocloud.com/discord">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700 text-sm">Join</button>
                    </a>
                </div>
            </div>
            <button onclick="copyToClipboard('widget1Code')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-4">Copy Code</button>
            <pre id="widget1Code" class="bg-gray-900 p-4 rounded mt-2 hidden">
&lt;div style="border: 2px solid blue" class="rounded-lg shadow-md p-4 flex items-center space-x-4"&gt;
    &lt;div&gt;
        &lt;img src="/assets/imgs/just_clouds.png" alt="NavoCloud" class="w-10 h-10"&gt;
    &lt;/div&gt;
    &lt;div class="flex-1"&gt;
        &lt;div class="text-white-400 text-xs"&gt;YOU'VE BEEN INVITED TO JOIN A SERVER&lt;/div&gt;
        &lt;div class="text-white-600 font-semibold text-sm"&gt;FREE HOST | NavoCloud&lt;/div&gt;
        &lt;div class="text-xs text-gray-500 flex items-center"&gt;
            &lt;span class="text-green-500 mr-1"&gt;●&lt;/span&gt; 560 Online
            &lt;span class="ml-3 text-gray-400"&gt;●&lt;/span&gt; 2,423 Members
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;a href="https://navocloud.com/discord"&gt;
            &lt;button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700 text-sm"&gt;Join&lt;/button&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <div class="p-4 md:p-8 rounded-lg custom-box">
            <h3 class="text-lg font-bold mb-4">Discord Widget (White Background)</h3>
            <div class="bg-white rounded-lg shadow-md p-4 flex items-center space-x-4">
                <div>
                    <img src="/assets/imgs/just_clouds.png" alt="NavoCloud" class="w-10 h-10">
                </div>
                <div class="flex-1">
                    <div class="text-gray-400 text-xs">YOU'VE BEEN INVITED TO JOIN A SERVER</div>
                    <div class="text-gray-600 font-semibold text-sm">FREE HOST | NavoCloud</div>
                    <div class="text-xs text-gray-500 flex items-center">
                        <span class="text-green-500 mr-1">●</span> 560 Online
                        <span class="ml-3 text-gray-400">●</span> 2,423 Members
                    </div>
                </div>
                <div>
                    <a href="https://navocloud.com/discord">
                        <button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700 text-sm">Join</button>
                    </a>
                </div>
            </div>
            <button onclick="copyToClipboard('widget2Code')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-4">Copy Code</button>
            <pre id="widget2Code" class="bg-gray-900 p-4 rounded mt-2 hidden">
&lt;div style="border: 2px solid blue" class="bg-white rounded-lg shadow-md p-4 flex items-center space-x-4"&gt;
    &lt;div&gt;
        &lt;img src="/assets/imgs/just_clouds.png" alt="NavoCloud" class="w-10 h-10"&gt;
    &lt;/div&gt;
    &lt;div class="flex-1"&gt;
        &lt;div class="text-gray-400 text-xs"&gt;YOU'VE BEEN INVITED TO JOIN A SERVER&lt;/div&gt;
        &lt;div class="text-gray-600 font-semibold text-sm"&gt;FREE HOST | NavoCloud&lt;/div&gt;
        &lt;div class="text-xs text-gray-500 flex items-center"&gt;
            &lt;span class="text-green-500 mr-1"&gt;●&lt;/span&gt; 560 Online
            &lt;span class="ml-3 text-gray-400"&gt;●&lt;/span&gt; 2,423 Members
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;a href="https://navocloud.com/discord"&gt;
            &lt;button class="bg-blue-600 text-white px-3 py-1 rounded-lg hover:bg-blue-700 text-sm"&gt;Join&lt;/button&gt;
        &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <div class="p-4 md:p-8 rounded-lg custom-box">
            <h3 class="text-xl font-bold mb-4">Text Assets</h3>
            <ul class="text-sm text-gray-300 mb-4">
                <li><strong>Link 1:</strong> <span id="link1Text">https://navocloud.com</span></li>
                <li><strong>Link 2:</strong> <span id="link2Text">https://navocloud.com/discord</span></li>
                <li><strong>Link 3:</strong> <span id="link3Text">discord.gg/navocloud</span></li>
                <li><strong>Tagline:</strong> <span id="taglineText">Navocloud.com FREE DDoS Protected Hosting!</span></li>
            </ul>
            <button onclick="copyToClipboard('link1Text')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-2">Copy Link 1</button>
            <button onclick="copyToClipboard('link2Text')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-2">Copy Link 2</button>
            <button onclick="copyToClipboard('link3Text')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-2">Copy Link 3</button>
            <button onclick="copyToClipboard('taglineText')" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded mt-2">Copy Tagline</button>
        </div>
    </div>

    <div class="bg-blue-500 text-white text-center py-4 rounded-lg mt-10 max-w-6xl mx-auto">
        cdn.tailwindcss.com
    </div>
</section>

<script>
    function copyToClipboard(elementId) {
        var copyText = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(copyText).then(function() {
            showAlert('Copied to clipboard');
        }).catch(function(error) {
            console.error('Failed to copy text: ', error);
        });
    }

    function showAlert(message) {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('fixed', 'top-4', 'right-4', 'bg-green-500', 'text-white', 'py-2', 'px-4', 'rounded', 'shadow-lg', 'animate-bounce');
        alertDiv.innerText = message;
        document.body.appendChild(alertDiv);

        setTimeout(function() {
            alertDiv.remove();
        }, 3000);
    }
</script>

    <!-- Step-by-step Section -->
    <section id="stepsSection" class="py-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

            <!-- Step 1 -->
            <div class="bg-indigo-900 py-10 px-6 rounded-lg">
                <h2 class="text-xl font-bold mb-4">Join the Affiliate Program</h2>
                <p class="text-sm text-gray-300">Sign up quickly and easily to start earning as an affiliate. No hidden fees or complicated requirements. We welcome everyone who wants to share and grow with us.</p>
                <span class="text-6xl font-bold text-indigo-500 block mt-8">1</span>
            </div>

            <!-- Step 2 -->
            <div class="bg-indigo-900 py-10 px-6 rounded-lg">
                <h2 class="text-xl font-bold mb-4">Promote Our Platform</h2>
                <p class="text-sm text-gray-300">Share your unique affiliate link across social media, blogs, or to your community, and start earning every time someone joins using your referral.</p>
                <span class="text-6xl font-bold text-indigo-500 block mt-8">2</span>
            </div>

            <!-- Step 3 -->
            <div class="bg-indigo-900 py-10 px-6 rounded-lg">
                <h2 class="text-xl font-bold mb-4">Receive Your Commissions</h2>
                <p class="text-sm text-gray-300">Get paid regularly with up to 90%* payouts, one of the highest rates in the industry. Monitor your earnings in real-time and withdraw whenever you meet the threshold.</p>
                <span class="text-6xl font-bold text-indigo-500 block mt-8">3</span>
            </div>

        </div>
    </section>

    <!-- Benefits for Affiliates -->
    <section class="py-20 bg-[#16152d] text-white">
        <div class="max-w-6xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Exclusive Affiliate Benefits</h2>
            <p class="text-lg text-gray-400">By becoming an affiliate, you’ll unlock a range of exclusive perks tailored to help you grow and succeed. Here’s what you get:</p>
        </div>
        
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-left">

            <!-- Benefit 1 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Up to 90%* Payout</h3>
                <p class="text-sm text-gray-300">Earn one of the highest payout percentages in the industry. Depending on your performance, payouts can go up to 90%, providing lucrative opportunities for growth.</p>
            </div>

            <!-- Benefit 2 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Better Server Specs</h3>
                <p class="text-sm text-gray-300">As an affiliate, you get access to enhanced server specifications, ensuring faster and more efficient server performance for you and your referred clients.</p>
            </div>

            <!-- Benefit 3 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">EU/US/IN Node Availability</h3>
                <p class="text-sm text-gray-300">We provide a wide range of server nodes across Europe, the US, and India, ensuring your clients get the best connectivity based on their location.</p>
            </div>

            <!-- Benefit 4 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Faster Support</h3>
                <p class="text-sm text-gray-300">Affiliates are given priority access to faster support response times. Whether it's technical assistance or account-related inquiries, you’ll get the help you need, fast.</p>
            </div>

            <!-- Benefit 5 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">On-Demand Help</h3>
                <p class="text-sm text-gray-300">Need help setting up a campaign or promotional material? Our dedicated affiliate support team is on standby to provide guidance and resources whenever you need them.</p>
            </div>

            <!-- Benefit 6 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Special Discord Role</h3>
                <p class="text-sm text-gray-300">As an affiliate, you’ll receive a special role in our Discord community, giving you access to exclusive channels and priority support.</p>
            </div>

        </div>
    </section>

    <!-- How to Get Started Section -->
    <section class="py-20 bg-[#1D1B3A] text-white">
        <div class="max-w-6xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">How to Get Started</h2>
            <p class="text-lg text-gray-400">Ready to join? Here's how you can get started with our affiliate program in just a few steps:</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Step 1 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Step 1: Join Our Discord</h3>
                <p class="text-sm text-gray-300">Head over to our Discord server and join our community. You’ll be able to interact with staff and other members to get started on your journey.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Step 2: Create a Ticket</h3>
                <p class="text-sm text-gray-300">Once you’re in Discord, create a ticket by going to the support channel and selecting "Create Ticket." Our support staff will assist you in setting up your affiliate account.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-2xl font-bold mb-4">Step 3: Start Promoting</h3>
                <p class="text-sm text-gray-300">After staff approval, you’ll get your unique referral link and access to promotional materials. Start sharing your link and earning commissions!</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-[#13112E] text-white">
        <div class="max-w-6xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold mb-6">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-400">Got questions? We’ve got answers! Here are some of the most common questions our affiliates ask:</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-left">

            <!-- FAQ 1 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-xl font-bold mb-4">How do I join the affiliate program?</h3>
                <p class="text-sm text-gray-300">To join, you need to first join our Discord server. Once there, navigate to the support channel and create a ticket. Our staff will then assist you in setting up your affiliate account. You will receive your unique referral link once your application is approved, and you can start promoting!</p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-xl font-bold mb-4">When will I receive my payouts?</h3>
                <p class="text-sm text-gray-300">Payouts can be requested anytime! You don’t have to wait for a specific payout date. Once you hit the payout threshold, simply request your payout, and you will receive it instantly or as soon as it is processed.</p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-xl font-bold mb-4">What promotional tools do I get?</h3>
                <p class="text-sm text-gray-300">We provide banners, ads, and other promotional materials for you to use on your social media, website, or blog to help you promote our services.</p>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-indigo-800 p-8 rounded-lg">
                <h3 class="text-xl font-bold mb-4">Do I need any prior experience to become an affiliate?</h3>
                <p class="text-sm text-gray-300">Not at all! Our program is open to everyone. Whether you’re an experienced marketer or just starting out, we provide all the resources and support you need to succeed.</p>
            </div>

        </div>
    </section>

    <!-- JavaScript for smooth scroll -->
    <script>
        document.getElementById("scrollArrow").addEventListener("click", function() {
            document.getElementById("stepsSection").scrollIntoView({ behavior: "smooth" });
        });
    </script>
    <?php 
        if (file_exists('./components/footer.php')) {
            include './components/footer.php';
        } else {
            echo "footer.php not found!";
        }
    ?>
</body>
</html>
