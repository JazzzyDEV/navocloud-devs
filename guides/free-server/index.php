<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - How to make a server";
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

<div class=" text-white p-8">
    <h1 class="text-4xl font-bold mb-4">NavoCloud Hosting: How to Create a Server</h1>
    <p class="text-lg mb-6">Welcome to NavoCloud! Follow this step-by-step guide to create your server.</p>

    <!-- Step 1 -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Step 1: Head to the NavoCloud Dashboard</h2>
        <p class="mb-4">Start by visiting the NavoCloud dashboard:</p>
        <a href="/dashboard" class="text-blue-500 underline">👉 Go to NavoCloud Dashboard</a>
    </div>

    <!-- Step 2 -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Step 2: Create an Account</h2>
        <p class="mb-4">If you don’t have an account yet, you’ll need to create one:</p>
        <ul class="list-disc list-inside space-y-2 pl-4">
            <li>Click on "Sign Up" to create a new account.</li>
            <li>Fill in your email, set a password, and complete any additional information required.</li>
        </ul>
    </div>

    <!-- Step 3 -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Step 3: Verify Your Email (email is not required) and Discord</h2>
        <p class="mb-4">Once your account is created:</p>
        <ul class="list-disc list-inside space-y-2 pl-4">
            <li>Check your email inbox for an email from no-reply@navocloudhosting.com.</li>
            <li>Verify your email address by clicking the link in the email.</li>
            <li>After verifying your email, you’ll be asked to link and verify your Discord account.</li>
        </ul>
    </div>

    <!-- Step 4 -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Step 4: Create Your Server</h2>
        <p class="mb-4">Now that your account is created:</p>
        <a href="/dashboard"  class="text-blue-500 underline">👉 Go to NavoCloud Servers</a>
        <ul class="list-disc list-inside space-y-2 pl-4 mt-4">
            <li>Click on "Create Server".</li>
            <li>Select the type of server you want to create:
                <ul class="list-inside ml-4 mt-2">
                    <li>Game Servers</li>
                    <li>Discord Bots</li>
                    <li>Voice Servers</li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Help Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-2">Need Help?</h2>
        <p>If you run into any issues, feel free to submit a ticket.</p>
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