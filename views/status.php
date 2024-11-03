<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Status";
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

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white antialiased">

    <div class="container mx-auto p-6">
        <div class="shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-semibold text-center mb-6 text-white">Discord Bots Status</h3>

            <!-- DB-MAIN -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">DB-MAIN</p>
                    <p class="text-gray-400">db-main.navocloud.com</p>
                    <p class="text-sm text-gray-300">Main Discord Bot</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>

            <!-- DB-SECURITY -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">DB-SECURITY</p>
                    <p class="text-gray-400">db-security.navocloud.com</p>
                    <p class="text-sm text-gray-300">Security Discord Bot</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>

            <!-- DB-SHOP -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-yellow-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">DB-SHOP</p>
                    <p class="text-gray-400">db-shop.navocloud.com</p>
                    <p class="text-sm text-gray-300">Shop Discord Bot</p>
                </div>
                <span class="bg-yellow-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">MAINTENANCE</span>
            </div>

            <!-- DB-GAMBLING -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-yellow-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">DB-GAMBLING</p>
                    <p class="text-gray-400">db-gamble.navocloud.com</p>
                    <p class="text-sm text-gray-300">Gambling Discord Bot</p>
                </div>
                <span class="bg-yellow-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">MAINTENANCE</span>
            </div>
        </div>
        
        <!-- Websites Section -->
        <div class="shadow-md rounded-lg p-6 mt-6">
            <h3 class="text-2xl font-semibold text-center mb-6 text-white">Websites</h3>
            
            <!-- EU Host -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">EU Host</p>
                    <p class="text-gray-400">navocloud.com</p>
                    <p class="text-sm text-gray-300">Main Website</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>
            
            <!-- US Host -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">US Host</p>
                    <p class="text-gray-400">navocloud.host</p>
                    <p class="text-sm text-gray-300">Main Backup Website</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>
            
            <!-- US Host Customers -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">US Host</p>
                    <p class="text-gray-400">navocloudhosting.com</p>
                    <p class="text-sm text-gray-300">Customers SubDomain Website</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>
        </div>

        <!-- EU Hosting Section -->
        <div class="shadow-md rounded-lg p-6 mt-6">
            <h3 class="text-2xl font-semibold text-center mb-6 text-white">EU</h3>
            
            <!-- EU Webhosting -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-yellow-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">EU Webhosting</p>
                    <p class="text-gray-400">eu.navocloud.com</p>
                </div>
                <span class="bg-yellow-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">MAINTENANCE</span>
            </div>
            
            <!-- Free EU Hosting -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-red-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">Free EU Hosting</p>
                    <p class="text-gray-400">ldn-01.navocloud.com</p>
                </div>
                <span class="bg-red-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">OFFLINE</span>
            </div>
        </div>

        <!-- US Servers Section -->
        <div class="shadow-md rounded-lg p-6 mt-6">
            <h3 class="text-2xl font-semibold text-center mb-6 text-white">US Servers</h3>
            
            <!-- US Server TX1 -->
            <div class="bg-gray-700 rounded-lg shadow p-4 mb-4 flex flex-wrap justify-between items-center border-l-4 border-green-500">
                <div class="w-full sm:w-auto">
                    <p class="text-xl font-bold text-white">US Server TX1</p>
                    <p class="text-gray-400">tx1.navocloud.com</p>
                </div>
                <span class="bg-green-500 text-white px-3 py-1 rounded mt-4 sm:mt-0">ONLINE</span>
            </div>
        </div>

        <!-- HetrixTools Section -->
        <div class="shadow-md rounded-lg p-6 mt-6">
            <h3 class="text-2xl font-semibold text-center mb-6 text-white">🛠️ HetrixTools</h3>
            <div style="background-color: black; margin-top: 5vh">
                <script type="text/javascript" src="https://static.hetrix.io/iframeResizer/iframeResizer.min.js"></script>
                <iframe class="htframe" src="https://wl.hetrixtools.com/r/4053bd66d67323438bc027dfdc2aabf7/" width="100%" scrolling="no" style="border:none;" sandbox="allow-scripts allow-same-origin allow-popups" onload="iFrameResize([{log:false}],'.htframe')"></iframe>
            </div>
        </div>

<div class="shadow-md rounded-lg p-6 mt-6">
 <h3 class="text-2xl font-semibold text-center mb-6 text-white"> 📈 ️ Uptime Chart</h3>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class=" p-10">
    <div class="container mx-auto">
        <div class="p-5 rounded-lg shadow-lg">
            <canvas id="uptimeChart"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('uptimeChart').getContext('2d');
        const uptimeChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['October 1', 'October 2', 'October 3', 'October 4', 'October 5', 'October 6', 'October 7'],
                datasets: [{
                    label: 'Uptime (%)',
                    data: [99.9, 99.8, 99.7, 99.95, 100, 99.85, 99.9],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: false,
                        suggestedMin: 99.5,
                        suggestedMax: 100
                    }
                }
            }
        });
    </script>
</div></div>

    <?php 
    if (file_exists('./components/footer.php')) {
        include './components/footer.php';
    } else {
        echo "footer.php not found!";
    }
    ?>
</body>
</html>
