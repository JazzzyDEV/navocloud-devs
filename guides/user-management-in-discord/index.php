<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - User Management in Discord";
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

<body class="bg-gray-900 text-white font-poppins min-h-screen p-8">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  <h1 class="text-3xl font-bold mb-4">User Management in Discord</h1>
  <p class="text-neutral-300 mb-8">
    This guide covers the basics of managing users on a Discord server, including assigning roles, permissions, and handling moderation tasks. Effective user management keeps your community organized and friendly.
  </p>

  <!-- Step 1 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 1: Access the Server Settings</h2>
    <p class="text-neutral-300 mb-4">
      Start by accessing your Discord server. Click on the server name in the top-left corner, then select "Server Settings" from the dropdown menu to access the user management tools.
    </p>
  </div>

  <!-- Step 2 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 2: Create and Manage Roles</h2>
    <p class="text-neutral-300 mb-4">
      In "Server Settings," go to the "Roles" tab. Here, you can create new roles for different user groups (e.g., Admins, Moderators, Members). Assign specific permissions to each role, like managing messages, viewing channels, or kicking members.
    </p>
  </div>

  <!-- Step 3 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 3: Assign Roles to Users</h2>
    <p class="text-neutral-300 mb-4">
      To assign a role to a user, go to your server’s member list. Right-click on a user’s name, select "Roles," and assign the appropriate role. This grants users the permissions linked to that role.
    </p>
  </div>

  <!-- Step 4 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 4: Set Channel Permissions</h2>
    <p class="text-neutral-300 mb-4">
      For more control, set permissions per channel. Right-click on a channel, select "Edit Channel," and navigate to "Permissions." Here, you can adjust which roles or individual users can view, send messages, or manage the channel.
    </p>
  </div>

  <!-- Step 5 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 5: Moderation Tools</h2>
    <p class="text-neutral-300 mb-4">
      Discord offers tools for moderating your server. In "Server Settings," go to "Moderation" to set rules on new member verification, message content, and more. For individual issues, right-click a user to mute, kick, or ban them as needed.
    </p>
  </div>

  <!-- Step 6 -->
  <div class="mb-6">
    <h2 class="text-xl font-semibold text-white mb-2">Step 6: Use Bots for Advanced User Management</h2>
    <p class="text-neutral-300 mb-4">
      For more advanced user management, consider using bots like MEE6 or Dyno. Bots can automate roles, moderate messages, and even manage member applications. Add a bot by inviting it from the bot’s website and configuring its permissions.
    </p>
  </div>

  <!-- Conclusion -->
  <div class="mb-8">
    <p class="text-neutral-300">
      With these user management basics, you’re ready to create a well-organized, safe, and engaging Discord server community. Regularly review your roles and permissions to ensure a positive environment for all members!
    </p>
  </div>
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
