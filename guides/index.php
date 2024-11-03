<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavoCloud | Guides</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color: #171717" class="text-white">

<!-- Navbar -->
<?php 
if (file_exists('../components/navbar.php')) {
    include '../components/navbar.php';
} else {
    echo "navbar.php not found!";
}

if (file_exists('../components/header.php')) {
    include '../components/header.php';
} else {
    echo "header.php not found!";
}
?>

<!-- Hero Section with Search Bar -->
<section class="py-12 px-6 md:px-24 lg:px-48 text-center">
    <h1 class="text-3xl font-bold mb-4">Discover Tips, Tricks, and Expert Guides</h1>
    <p class="mb-6">Everything you need to know to master our platform – from beginner hacks to pro-level tips, all in one place!</p>
    
    <div class="flex justify-center mb-4">
        <input type="text" id="searchInput" placeholder="What do you want to learn today?" class="p-2 w-3/4 md:w-1/2 lg:w-1/3 text-black rounded-l-lg border-2 border-blue-500 focus:outline-none">
        <button class="px-4 py-2 bg-black text-white rounded-r-lg border-2 border-blue-500">Search</button>
    </div>

    <!-- Statistics Section -->
    <div class="flex justify-center space-x-4 text-gray-300">
        <span>18 Guides</span>
        <span class="text-gray-500">•</span>
        <span>2k+ Views</span>
        <span class="text-gray-500">•</span>
        <span>Last Updated: 2024</span>
    </div>
</section>

<!-- Guides Container -->
<div id="guideContainer" class="p-6 md:p-12 lg:p-24 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
</div>

<?php 
if (file_exists('../components/footer.php')) {
    include '../components/footer.php';
} else {
    echo "footer.php not found!";
}
?>

<script>
// JavaScript for adding guides
function addGuide(title, description, link, date = 'N/A', author = 'Unknown') {
    const guideContainer = document.getElementById('guideContainer');

    const guideBox = document.createElement('a');
    guideBox.href = link;
    guideBox.className = 'guide border-2 border-blue-500 rounded-lg p-6 md:p-8 lg:p-10 text-white hover:bg-blue-800 transition';
    guideBox.target = '_blank';

    const guideTitle = document.createElement('h2');
    guideTitle.className = 'text-lg font-semibold';
    guideTitle.innerText = title;

    const guideDescription = document.createElement('p');
    guideDescription.className = 'mt-2 text-sm';
    guideDescription.innerText = description;

    const guideFooter = document.createElement('div');
    guideFooter.className = 'mt-4 text-xs text-gray-400';
    guideFooter.innerText = `Date posted: ${date} | Posted by ${author}`;

    guideBox.appendChild(guideTitle);
    guideBox.appendChild(guideDescription);
    guideBox.appendChild(guideFooter);
    guideContainer.appendChild(guideBox);
}

// Filter function for search input
document.getElementById('searchInput').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const guides = document.querySelectorAll('.guide');

    guides.forEach(guide => {
        const title = guide.querySelector('h2').innerText.toLowerCase();
        guide.style.display = title.includes(searchTerm) ? 'block' : 'none';
    });
});

// Adding all guides
addGuide('Essential Backup and Restore Procedures for Your Server', 'Learn how to efficiently back up and restore your servers files, databases, and configurations. This guide covers step-by-step methods for securing your data, creating and managing backups, and restoring your server with ease.', './backup-and-restore-procedures', 'October 27, 2024', 'Jazzzy');
addGuide('Configuring a Voice Server', 'Step-by-step instructions to set up and manage a Mumble or Teamspeak voice server for seamless communication. This guide covers account creation, server claiming, and configuration for both server types.', './configuring-a-voice-server', 'October 27, 2024', 'Jazzzy');
addGuide('How to Earn More Credits', 'Discover various ways to earn credits on the platform, including chatting, participating in reviews and surveys, donating, and referring friends. Maximize your credits through engagement and community involvement.', './how-to-earn-more-credits', 'October 27, 2024', 'Jazzzy');
addGuide('How to Create a Suggestion for Navocloud', 'Learn how to submit a suggestion to Navocloud, including tips on crafting a catchy title, creating a detailed tutorial, and engaging with the community. Follow these steps to make impactful contributions and share your ideas effectively.', './how-to-create-a-suggestion-for-navocloud', 'October 27, 2024', 'Jazzzy');
addGuide('Understanding DDoS Protection at Navocloud', 'Explore how Navocloud safeguards your servers with industry-leading DDoS protection from Path.net and CosmicGuard. Learn about DDoS threats, the layers of protection Navocloud provides, and how these services ensure high uptime and minimal latency.', './understanding-ddos-protection-at-navocloud', 'October 27, 2024', 'Jazzzy');
addGuide('Deploying a Discord Bot', 'Follow this guide to set up and deploy your Discord bot on Navocloud’s hosting platform. From signing up to selecting the appropriate bot language and deployment node, this guide has you covered.', './deploying-a-discord-bot', 'October 27, 2024', 'Jazzzy');
addGuide('Free vs. Paid Hosting – What’s the Difference?', 'An exploration of the advantages and disadvantages of free versus paid hosting services. Learn how each type fits different needs, from accessibility and affordability to security and reliability, helping you make an informed choice for your hosting needs.', './free-vs-paid-hosting-whats-the-difference', 'October 27, 2024', 'Jazzzy');
addGuide('Installing a CMS', 'A comprehensive guide to installing and configuring popular CMS platforms like WordPress. This guide includes steps for requesting hosting, setting up your CMS, and completing configuration for a seamless setup experience.', './installing-a-cms', 'October 27, 2024', 'Jazzzy');
addGuide('How to Enter Minecraft Safe Mode', 'Learn how to start Minecraft in Safe Mode to troubleshoot issues caused by mods or custom configurations. This guide provides a step-by-step process to enter Safe Mode through the Minecraft launcher.', './how-to-enter-minecraft-safe-mode', 'October 27, 2024', 'Jazzzy');
addGuide('How to Fix "/the-requested-resource-does-not-exist-on-this-server" Error', 'A troubleshooting guide for resolving the "/the-requested-resource-does-not-exist-on-this-server" error in Pterodactyl. This guide includes steps for reloading, clearing cache, verifying server existence, and contacting support.', './how-to-fix-the-requested-resource-does-not-exist-on-this-server-error', 'October 27, 2024', 'Jazzzy');
addGuide('Navocloud Security Features', 'Learn about Navocloud’s advanced security measures that protect your servers from cyber threats. This guide covers DDoS protection, data encryption, and account security features designed to safeguard your environment.', './navocloud-security-features', 'October 27, 2024', 'Jazzzy');
addGuide('Why You Should Boost the Discord', 'Discover the benefits of boosting the Discord server, from earning credits and gaining a unique role to receiving faster support and accessing exclusive giveaways. Learn how boosting enhances your community experience and rewards your support.', './why-you-should-boost-the-discord', 'October 27, 2024', 'Jazzzy');
addGuide('Setting Up SSL Certificates', 'A quick guide to setting up SSL certificates for secure web hosting on Navocloud. Follow these steps to generate and install a Let’s Encrypt SSL certificate, ensuring a secure connection for your site.', './setting-up-ssl-certificates', 'October 27, 2024', 'Jazzzy');
addGuide('Navocloud’s Flexible Scalability Solutions', 'Discover how Navocloud offers free, scalable resources to accommodate your project’s growth. Learn about community-driven upgrade options and how our infrastructure supports your evolving needs, from traffic spikes to long-term scalability.', './navoclouds-flexible-scalability-solutions', 'October 27, 2024', 'Jazzzy');
addGuide('Setting Up phpMyAdmin', 'Learn how to install and configure phpMyAdmin on your server to manage MySQL databases efficiently. This guide provides steps for accessing, setting up, and securing phpMyAdmin for streamlined database management.', './setting-up-phpmyadmin', 'October 27, 2024', 'Jazzzy');
addGuide('Version Control Basics in Pterodactyl', 'An introduction to using version control in Pterodactyl. Learn how to install Git, initialize repositories, and manage file changes effectively for your projects.', './version-control-basics', 'October 27, 2024', 'Jazzzy');
addGuide('User Management in Discord', 'A comprehensive guide to managing users on a Discord server, including setting up roles, assigning permissions, using moderation tools, and incorporating bots for advanced management. Keep your community organized and user-friendly with these tips.', './user-management-in-discord', 'October 27, 2024', 'Jazzzy');
addGuide('Updating Your Server Software', 'Learn how to safely update your server software in Pterodactyl. This guide covers essential steps like stopping the server, backing up files, selecting the latest version, and verifying compatibility for smooth updates.', './updating-your-server-software', 'October 27, 2024', 'Jazzzy');
addGuide('How to create your own server FREE', 'Learn how to create a free 24/7 ddos protected server on navocloud.com', './free-server', 'November 1st, 2024', 'Jazzzy');
</script>

</body>
</html>
