<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Game Servers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
    <!-- Navbar -->
    <nav class="flex justify-between items-center py-6 px-8">
        <div class="text-3xl font-bold">Logo</div>
        <ul class="flex space-x-6 text-lg">
            <li><a href="#" class="hover:underline">Mix</a></li>
            <li><a href="#" class="hover:underline">Create Free Server</a></li>
            <li><a href="#" class="hover:underline">Products</a></li>
            <li><a href="#" class="hover:underline">Help</a></li>
        </ul>
        <div>
            <button class="px-4 py-2 border rounded border-white hover:bg-white hover:text-black">Sign in</button>
            <button class="ml-2 px-4 py-2 border rounded border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white">Sign up</button>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="text-center mt-10 mb-8">
        <h1 class="text-5xl font-bold">Free Game Servers</h1>
    </header>

    <!-- Game Server Grid -->
    <div id="gameGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-8 pb-12"></div>

    <!-- JavaScript to Dynamically Add Games -->
    <script>
        // Array of games with names and image URLs
        const games = [
            { name: "Minecraft", image: "https://wallpaperaccess.com/full/1762655.jpg" },
            { name: "Counter-Strike: Global Offensive", image: "https://oyster.ignimgs.com/mediawiki/apis.ign.com/counter-strike-2/d/da/CSGO2_Limited_Test_Banner.JPG" },
            { name: "Insurgency: Sandstorm", image: "https://example.com/insurgency.jpg" },
            { name: "Rust", image: "https://example.com/rust.jpg" },
            { name: "Garry's Mod", image: "https://example.com/garrys-mod.jpg" },
            { name: "ARK: Survival Evolved", image: "https://example.com/ark.jpg" },
            { name: "Factorio", image: "https://example.com/factorio.jpg" },
            { name: "Terraria", image: "https://example.com/terraria.jpg" },
            // ... add more games here with images
        ];

        // Get the game grid container
        const gameGrid = document.getElementById('gameGrid');

        // Function to add each game to the game grid
        games.forEach(game => {
            // Create the game card container
            const gameCard = document.createElement('div');
            gameCard.className = 'relative bg-gray-800 rounded-lg overflow-hidden shadow-lg group border-2 border-blue-500';

            // Add the game image
            const gameImage = document.createElement('img');
            gameImage.src = game.image;
            gameImage.alt = game.name;
            gameImage.className = 'w-full h-48 object-cover';
            gameCard.appendChild(gameImage);

            // Overlay
            const overlay = document.createElement('div');
            overlay.className = 'absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity';
            gameCard.appendChild(overlay);

            // Text container for game name and button
            const textContainer = document.createElement('div');
            textContainer.className = 'absolute inset-0 flex flex-col justify-end p-4 text-center';
            
            // Game title
            const gameTitle = document.createElement('h2');
            gameTitle.className = 'text-xl font-semibold mb-4';
            gameTitle.textContent = game.name;
            textContainer.appendChild(gameTitle);

            // Button
            const startButton = document.createElement('button');
            startButton.className = 'w-full py-2 text-lg font-semibold bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition';
            startButton.textContent = 'Start Free Server';
            textContainer.appendChild(startButton);

            gameCard.appendChild(textContainer);
            gameGrid.appendChild(gameCard);
        });
    </script>
</body>
</html>
