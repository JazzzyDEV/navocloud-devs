<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Guide - Why You Should Boost the Discord";
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
  <h2 class="text-2xl font-bold text-white mb-4">Why You Should Boost the Discord</h2>
  <ul class="list-disc list-inside space-y-6 text-neutral-300">
    <!-- Earn Credits -->
    <li>
      <span class="font-semibold text-white">Earn Credits:</span> 
      <p class="mt-2">Boosting the server allows you to earn valuable credits. Each boost gives you <strong>40 credits</strong>, plus an additional <strong>5 credits per month</strong> recurring for the duration of your boost.</p>
      <p class="mt-2 italic">For example, if you boost for 3 months, you will accumulate credits as follows: 40 + 45 + 50 = <strong>135 credits</strong> for 3 boosts.</p>
      <p class="mt-2 italic">If you maintain <strong>6 boosts</strong> (2 a month), you would earn a total of <strong>170 credits</strong> for 3 months!</p>
    </li>

    <!-- Special Discord Role -->
    <li>
      <span class="font-semibold text-white">Special Discord Role:</span>
      <p class="mt-2">As a booster, you will receive a unique role that distinguishes you in the community. This role comes with a special icon next to your name, showcasing your support for the server.</p>
    </li>

    <!-- Faster Customer Support -->
    <li>
      <span class="font-semibold text-white">Faster Customer Support:</span>
      <p class="mt-2">Boosters receive prioritized assistance, ensuring your questions and concerns are addressed more quickly. Enjoy a smoother experience with faster responses to your support requests!</p>
    </li>

    <!-- Booster Giveaway -->
    <li>
      <span class="font-semibold text-white">Booster Giveaway:</span>
      <p class="mt-2">Join exciting giveaways exclusive to boosters! Participate in special events where you can win unique prizes, enhancing your experience in our Discord community.</p>
    </li>
  </ul>
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
