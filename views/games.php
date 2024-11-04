<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Game Servers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

<?php
if (file_exists('../components/navbar.php')) {
    include '../components/navbar.php';
} else {
    echo "navbar.php not found!";
}
?>

<header class="text-center mt-10 mb-8">
    <h1 class="text-5xl font-bold">Free Game Servers</h1>
</header>

<div id="gameGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-8 pb-12">
    <?php
    $games = [
        ['name' => 'Minecraft', 'image' => 'https://wallpaperaccess.com/full/1762655.jpg', 'url' => 'https://dash.navocloud.com/home'],
        ['name' => 'Counter-Strike: Global Offensive', 'image' => 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/counter-strike-2/d/da/CSGO2_Limited_Test_Banner.JPG', 'url' => 'https://dash.navocloud.com/home'],
        ['name' => "Insurgency: Sandstorm", 'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNYSYEBkUC5TRVgun2Ha9D91AEp8ff3bF8OQ&s", 'url' => 'https://dash.navocloud.com/home'],
        ['name' => "Rust", 'image' => "https://image.api.playstation.com/vulcan/ap/rnd/202103/1609/iXyUOZpAfq34g4CGsgUb9VEc.png", 'url' => 'https://dash.navocloud.com/homet'],
        ['name' => "Garry's Mod", 'image' => "https://gxmedope.com/wp-content/uploads/2021/05/Garrys-Mod-gxmedope.jpg", 'url' => 'https://dash.navocloud.com/home'],
        ['name' => "ARK: Survival Evolved", 'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkyYJKWStKp-UPApkZOm55XAsyQGejDJWkjw&s", 'url' => 'https://dash.navocloud.com/home'],
        ['name' => "Factorio", 'image' => "https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000056818/c700b4cc22a81c2099335d83fe379e9cdc6afd190a9985f74ba8f7e589f4ffd2", 'url' => 'https://dash.navocloud.com/home'],
        ['name' => "Terraria", 'image' => "https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/105600/header.jpg?t=1666290860", 'url' => 'https://dash.navocloud.com/home'],
    ];

    foreach ($games as $game) {
        echo '<div class="relative bg-gray-800 rounded-lg overflow-hidden shadow-lg group border-2 border-blue-500">';
        echo '<img src="' . $game['image'] . '" alt="' . $game['name'] . '" class="w-full h-48 object-cover">';
        echo '<div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-75 transition-opacity"></div>';
        echo '<div class="absolute inset-0 flex flex-col justify-end p-4 text-center">';
        echo '<h2 class="text-xl font-semibold mb-4">' . $game['name'] . '</h2>';
        echo '<a href="' . $game['url'] . '" class="w-full py-2 text-lg font-semibold bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Start Free Server</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

<?php
if (file_exists('../components/footer.php')) {
    include '../components/footer.php';
} else {
    echo "footer.php not found!";
}
?>

</body>
</html>