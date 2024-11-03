<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - How to Earn More Credits";
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

<body class="bg-gray-900 text-white">

<div class="bg-neutral-900 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
  <h1 class="text-3xl font-bold text-white mb-4">How to Earn More Credits</h1>
  <p class="text-neutral-300 mb-6">Explore various ways to earn credits to enhance your experience.</p>

  <!-- Methods to Earn Credits -->
  <ul class="list-disc list-inside text-neutral-400 space-y-4 mb-6">
    <li><strong>Chat Regularly:</strong> Engage in conversations in various channels to earn credits. Check for announcements in the <code class="bg-gray-800 px-1 py-0.5 rounded">#free-credits</code> channel (ID: 1281037257217937439) for extra credit opportunities.</li>
    
    <li><strong>Participate in Feedback Activities:</strong> Write reviews, answer surveys, or provide feedback via Discord. Moderators will assign credits based on your contributions.</li>
    
    <li><strong>Donate:</strong> Donate through Discord to receive extra credits along with 24/7 support access.</li>
    
    <li><strong>Gain XP:</strong> Earn XP by being active in chats. Each month, the user with the highest XP receives bonus credits or an XP boost.</li>
    
    <li><strong>Boost the Discord Server:</strong> Receive +20 credits per server boost and +40 credits for each Nitro boost.</li>
    
    <li><strong>Refer Friends:</strong> Use your referral link to invite friends to the panel or Discord. You’ll earn +1 credit for each successful referral.</li>
  </ul>

  <p class="text-neutral-300 mt-6">Maximize your credits by staying active, contributing to the community, and sharing the platform with friends. For more details, visit our support page or reach out on <a href="https://navocloud.com/discord" class="text-green-400 underline">Discord</a>.</p>
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
