<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Gambling";
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

    <!-- Gambling Notice -->
    <div style="margin-top: 5vh" class="container mx-auto py-4 px-4 text-center bg-red-500 text-white rounded-lg">
        <p class="text-lg font-bold">⚠️ Gambling Disclaimer: Please gamble responsibly. Gambling involves risk, and you may lose your credits. All games are for virtual credits only. No real money is involved. Ensure you understand the risks before playing. 💡</p>
    </div>

    <!-- Header Section -->
    <div class="container mx-auto py-8 px-4 sm:px-6 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">🎮 Explore Our Exciting Discord Gambling Games 🎲</h1>
        <h2 class="text-2xl font-bold text-green-500">GAMBLING - NEW!</h2>
    </div>

    <div class="container mx-auto py-12 px-4 sm:px-6">
        <!-- Coin Flip Section -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:pr-6">
                <h3 class="text-2xl font-bold mb-2 text-white">🪙 Coin Flip</h3>
                <p class="mb-4 text-white">Flip the coin and test your luck! Bet on either heads or tails and double your credits with a 50/50 chance. This fast-paced game is perfect for risk-takers. 🎲</p>
            </div>
            <div class="md:w-1/2">
                <img src="/assets/imgs/coin_flip.png" alt="Coin Flip Image" class="rounded-lg shadow-xl hover:scale-105 transform transition">
            </div>
        </div>

        <!-- Blackjack Section -->
        <div class="flex flex-col md:flex-row-reverse items-center mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:pl-6">
                <h3 class="text-2xl font-bold mb-2 text-white">🃏 Blackjack</h3>
                <p class="mb-4 text-white">Take on the dealer in a classic game of Blackjack! Aim to get as close to 21 without going over. Bet wisely and win big in this thrilling card game. 💰</p>
            </div>
            <div class="md:w-1/2">
                <img src="/assets/imgs/blackjack.png" alt="Blackjack Image" class="rounded-lg shadow-xl hover:scale-105 transform transition">
            </div>
        </div>

        <!-- Baccarat Section -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:pr-6">
                <h3 class="text-2xl font-bold mb-2 text-white">🎴 Baccarat</h3>
                <p class="mb-4 text-white">Bet on either Player, Banker, or a Tie in Baccarat! A game of luck and strategy where every decision counts. Are you ready to test your skills? 🎯</p>
            </div>
            <div class="md:w-1/2">
                <img src="/assets/imgs/baccarat.png" alt="Baccarat Image" class="rounded-lg shadow-xl hover:scale-105 transform transition">
            </div>
        </div>

        <!-- Dice Roll Section -->
        <div class="flex flex-col md:flex-row-reverse items-center mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:pl-6">
                <h3 class="text-2xl font-bold mb-2 text-white">🎲 Dice Roll</h3>
                <p class="mb-4 text-white">Roll the dice and let fate decide! Bet on the outcome and multiply your credits if you're lucky. Simple, quick, and exciting! 🎲</p>
            </div>
            <div class="md:w-1/2">
                <img src="/assets/imgs/dice_roll.png" alt="Dice Roll Image" class="rounded-lg shadow-xl hover:scale-105 transform transition">
            </div>
        </div>

        <!-- Slot Machine Section -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 mb-4 md:mb-0 md:pr-6">
                <h3 class="text-2xl font-bold mb-2 text-white">🎰 Slot Machine</h3>
                <p class="mb-4 text-white">Spin the reels and win big! Slot Machines give you the chance to hit the jackpot and multiply your credits with one lucky spin. 🍀</p>
            </div>
            <div class="md:w-1/2">
                <img src="/assets/imgs/slot_machine.png" alt="Slot Machine Image" class="rounded-lg shadow-xl hover:scale-105 transform transition">
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="container mx-auto py-12 px-4 sm:px-6">
            <h2 class="text-3xl font-bold text-center mb-8 text-white">FAQs 💡</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">🎲 Can I win real money?</h3>
                    <p class="text-white">No, but credits can be used to exchange for better servers or better in-game perks.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">💳 How do I get more credits?</h3>
                    <p class="text-white">You can earn more credits by talking in our Discord, boosting or bumping the server, and participating in events.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">🔄 Can I transfer my credits between servers?</h3>
                    <p class="text-white">No, but you can transfer credits between users via our Discord using the <code>/transfer</code> command.</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">🎮 What types of games are available?</h3>
                    <p class="text-white">Our platform offers various games like Coin Flip, Blackjack, Baccarat, Dice Roll, and Slot Machine, each providing different ways to gamble your credits.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">🏆 Are there rewards for top players?</h3>
                    <p class="text-white">Yes! Top players on the leaderboard can earn special in-game rewards and bragging rights. Keep gambling and rise to the top to win exclusive perks!</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4 text-white">🔄 Can I transfer my credits between servers?</h3>
                    <p class="text-white">No, but you can transfer credits between users using the <code>/transfer</code> command via our Discord server.</p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        if (file_exists('./components/footer.php')) {
            include './components/footer.php';
        } else {
            echo "footer.php not found!";
        }
    ?>
</body>
</html>
