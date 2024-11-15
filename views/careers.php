
<!DOCTYPE html>
<html lang="en">
<style>
.slide-button {
  transition: transform 0.5s ease-in-out; /* Adjust the duration as needed */
}

.slide-button:hover {
  transform: translateX(10px); /* Adjust the distance as needed */
}
</style>
<?php 

$title = "Careers";
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

<!-- Careers Page - Navocloud -->

<div style="margin-top: -7vh" class="text-white min-h-screen">
    <!-- Hero Section -->
    <div class="relative min-h-screen flex items-center justify-center text-center">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-black opacity-50" style="background-image: linear-gradient(to right, #051937, #002265, #002894, #0027c1, #2812eb);"></div> 
        <div class="relative z-10">
            <h1 class="text-5xl font-bold text-gray">Careers at Navocloud</h1>
            <p class="text-xl text-orange-300 mt-4">We're always looking for talented people to join us here at Navocloud.</p>
            <div class="flex items-center justify-center space-x-4 mt-6">
                <a href="#open-positions" class="slide-button bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600">Open Positions</a>
                <a href="#benefits" class="border border-white px-6 py-3 rounded-lg font-semibold text-white hover:bg-gray-700 transition duration-500">Our Benefits</a>            </div>
        </div>
    </div>

<!-- Open Positions Section -->
<section id="open-positions" class="px-8 py-12">
    <h2 class="text-4xl font-bold mb-8 text-center">Open Positions</h2>
    <div class="space-y-6">
        <!-- Job Item -->
        <div style="border: 2px solid gray" class="flex items-center justify-between p-6 rounded-lg hover:bg-gray-10">
            <div>
                <h3 class="text-2xl font-semibold">Website Developer</h3>
                <span class="text-gray-400">Junior - Mid</span>
            </div>
            <a href="/careers/apply#webdev" class="bg-gray-500 px-4 py-2 rounded-lg text-white font-semibold hover:bg-blue-600">Learn more</a>
        </div>
        <div style="border: 2px solid gray" class="flex items-center justify-between p-6 rounded-lg hover:bg-gray-10">
            <div>
                <h3 class="text-2xl font-semibold">System Administrator</h3>
                <span class="text-gray-400">Mid - Senior</span>
            </div>
            <a href="/careers/apply#sysadmin" class="bg-gray-500 px-4 py-2 rounded-lg text-white font-semibold hover:bg-blue-600">Learn more</a>
        </div>
        <div style="border: 2px solid gray" class="flex items-center justify-between p-6 rounded-lg hover:bg-gray-10">
            <div>
                <h3 class="text-2xl font-semibold">Administrators</h3>
                <span class="text-gray-400">Junior - Mid</span>
            </div>
            <a href="/careers/apply#admin" class="bg-gray-500 px-4 py-2 rounded-lg text-white font-semibold hover:bg-blue-600">Learn more</a>
        </div>
        <div style="border: 2px solid gray" class="flex items-center justify-between p-6 rounded-lg hover:bg-gray-10">
            <div>
                <h3 class="text-2xl font-semibold">Moderators</h3>
                <span class="text-gray-400">Junior - Mid</span>
            </div>
            <a href="/careers/apply#mod" class="bg-gray-500 px-4 py-2 rounded-lg text-white font-semibold hover:bg-blue-600">Learn more</a>
        </div>
        <!-- Other -->
        <div class="text-center mt-8">
            <p class="text-lg">Have something to offer that we don’t have an open position for?</p>
            <a href="/careers/apply" class="bg-gray-500 px-4 py-2 mt-4 inline-block rounded-lg text-white font-semibold hover:bg-blue-600">Apply</a>
        </div>
    </div>
</section>

    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="px-8 py-12">
        <h2 class="text-4xl font-bold mb-8 text-center">Our Benefits</h2>
        <div class="flex flex-wrap justify-around">
            <div class="text-center p-6">
                <div class="text-blue-400 text-4xl mb-4">💻</div>
                <h3 class="text-xl font-semibold">Free Staff Node</h3>
                <p class="text-gray-400">Enjoy hosting without the cost.</p>
            </div>
            <div class="text-center p-6">
                <div class="text-blue-400 text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-semibold">No Credits Needed</h3>
                <p class="text-gray-400">All staff benefits without the hassle.</p>
            </div>
            <div class="text-center p-6">
                <div class="text-blue-400 text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-semibold">Friendly, Supportive Environment</h3>
                <p class="text-gray-400">Collaborate with a helpful team.</p>
            </div>
            <div class="text-center p-6">
                <div class="text-blue-400 text-4xl mb-4">⏰</div>
                <h3 class="text-xl font-semibold">Moderate When You Want</h3>
                <p class="text-gray-400">Flexible work hours for your convenience.</p>
            </div>
            <div class="text-center p-6">
                <div class="text-blue-400 text-4xl mb-4">🏢</div>
                <h3 class="text-xl font-semibold">Professional Atmosphere</h3>
                <p class="text-gray-400">A structured yet relaxed workplace.</p>
            </div>
        </div>
    </section>

 
</div>
<script>
    const slideButton = document.querySelector('.slide-button');

slideButton.addEventListener('mouseenter', () => {
  slideButton.style.transform = 'translateX(10px)';
});

slideButton.addEventListener('mouseleave', () => {
  slideButton.style.transform = 'translateX(0)';
});
</script>
    
    <?php 
        if (file_exists('../components/footer.php')) {
            include '../components/footer.php';
        } else {
            echo "footer.php not found!";
        }
    ?>
</body>
</html>