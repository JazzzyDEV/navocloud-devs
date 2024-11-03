<?php
// Simple routing system with debug info

// Get the requested URL path, remove query string if any
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = trim($request_uri, '/');

// Define routes and corresponding view files
$routes = [
    ''                 => 'index.php',   // Homepage
    'faq'              => 'faq.php',     // FAQ page
    'aboutus'          => 'about.php',
    'discord'          => 'discord.php',
    'donate'           => 'donate.php',
    'hardware'         => 'hardware.php',
    'mental-health'    => 'mh.php',
    'mental-health/uk' => 'mh-uk.php',
    'mental-health/us' => 'mh-us.php',
    'partners'         => 'partners.php',
    'pricing'          => 'pricing.php',
    'tos'              => 'tos.php',
    'privacy'          => 'privacy.php',
    'review'           => 'review.php',
    'rules'           => 'rules.php',
    'status'           => 'status.php',
    'gambling'         => 'gambling.php',
    'contact'          => 'contact.php',
    'games'            => 'games.php',
    'affiliate'        => 'affiliate.php',
    'vpn'              => 'vpn.php',
    '404'              => '404.php',
    'dashboard'        => 'dash.php',
    'careers/apply'         => 'apply.php',
    'careers'        => 'careers.php',
    'guides'           => 'guides.php',   // Route for listing all guides
];

// Check if the requested path exists in the defined routes
if (array_key_exists($request_uri, $routes)) {
    $view = './views/' . $routes[$request_uri];

    // Include the view if it exists
    if (file_exists($view)) {
        include $view;
    } else {
        // Redirect to /404 if the file doesn't exist
        header("Location: /404");
        exit();
    }
} else {
    // Redirect to /404 if the route doesn't exist
    header("Location: /404");
    exit();
}
?>
