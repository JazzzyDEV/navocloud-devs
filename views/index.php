<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<link href="./components/app.css" rel="stylesheet">
<script defer src="./components/app.js" type="text/javascript"></script>
<!DOCTYPE html>
<html lang="en">


<?php 

$title = "Home";
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
<head>
<style>
body {
  background-image: url('../assets/imgs/front-page/bg.png');
}


.review-box {
  backdrop-filter: blur(10px);
  position: relative;
  z-index: 1;
}
</style>
</head>

 <!-- ========== END HEADER ========== -->
    <!-- Hero -->
    <div class="transition-all max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[2.5rem]">
      <!-- Grid -->
      <div class="transition-all grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center backgro">
        <div class="transition-all lg:col-span-3">
          <h1 class="transition-all text-3xl font-bold tracking-wide text-white font-calsans lg:text-5xl">
          <span class="text-zinc-300"><span id="idk">NavoCloud Empowering Your</span> <span class="text-sky-500" id="WhoAmI"></span>.</span>
            <span class="transition-all relative whitespace-nowrap text-blue-400">
              <svg aria-hidden="true" viewBox="0 0 418 42"
                class="transition-all absolute top-2/3 left-0 h-[0.58em] w-full fill-blue-300/70"
                preserveAspectRatio="none">
                <path
                  d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                </path>
              </svg>
              
            </span>
          </h1>

          <div class="transition-all mt-5 lg:mt-8 flex flex-col items-center gap-2 sm:flex-row sm:gap-3">
            <div class="transition-all w-full sm:w-auto flex items-center">
              <a class="transition-all inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:from-violet-600 focus:to-blue-600 py-3 px-4"
                href="https://dash.navocloud.com">
                Get started
                <svg class="transition-all shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </a>
              <a class="transition-all inline-flex justify-center items-center ml-2 gap-x-3 text-center text-white text-sm font-medium rounded-md bg-neutral-800 hover:bg-neutral-800/25 border-neutral-800/45 py-3 px-4"
                href="https://www.paypal.com/paypalme/godly109?country.x=GB&locale.x=en_GB">
                Donate To Us
                <svg class="transition-all shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </a>

            </div>
          </div>
        </div>
        <!-- End Col -->

        <div class="transition-all lg:col-span-4 mt-10 lg:mt-0">
          <div
            class="transition-all font-srcode w-full rounded-lg bg-neutral-800/35 border border-neutral-700 p-2 h-full grid grid-cols-1 text-sm truncate text-white">
            <p class="transition-all ">
              <span class="transition-all text-[#f1c166]">container@nookure~</span> Server
              marked as starting...
            </p>
            <p class="transition-all ">
              <span class="transition-all text-[#f1c166]">[Pterodactyl Daemon]:</span> Finished
              pulling Docker container image
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span> _______
              ______
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span> | ___\ \/ /
              ___| ___ _ ____ _____ _ __
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span> | |_ \
              /\___ \ / _ \ '__\ \ / / _ \ '__|
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span> | _| / \
              ___) | __/ | \ V / __/ |
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span> |_|
              /_/\_\____/ \___|_| \_/ \___|_|
            </p>
            <p class="transition-all text-lime-600">
              <span class="transition-all text-pink-300">[ c-server-monitor]</span>
              <span class="transition-all text-lime-600">--------------------------------
                <span class="transition-all text-[#f1c166]">monitor</span> ---</span>
            </p>
            <p><span class="transition-all text-pink-300">[ c-server-monitor]</span></p>
            <p>
              <span class="transition-all text-red-500">[ c-scripting-core]</span> Creating
              script environments for monitor
            </p>
            <p>
              <span class="transition-all bg-blue-300">[20:25:10][tx:v6.0.2]</span> Profile
              'default' starting...
            </p>
            <p>
              <span class="transition-all bg-green-300">[20:25:10][tx:WebServer]</span>
              Listening on 0.0.0.0.
            </p>
            <p><span class="transition-all bg-green-300">[20:25:10][tx]</span></p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span>
              ┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
            </p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span> ┃ ┃
            </p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span> ┃
              <span class="transition-all text-white"> ready! Please access:</span> ┃
            </p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span> ┃
              <span class="transition-all text-white"><a href="http://23.27.211.158:6969">http://23.27.211.158:6969</a>  /</span> ┃
            </p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span> ┃ ┃
            </p>
            <p class="transition-all text-cyan-400">
              <span class="transition-all bg-green-300">[20:25:10][tx]</span>
              ┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛
            </p>
            <p><span class="transition-all bg-green-300">[20:25:10][tx]</span></p>
            <p class="transition-all ">
              <span class="transition-all bg-green-300">[20:25:10][tx:FXRunner]</span>
            </p>
            <p><span class="transition-all bg-green-300">[137]</span> FXServer Started!</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
      <section class="transition-all py-10 mt-3">
  <div class="transition-all max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="transition-all text-3xl font-bold text-center text-blue-500 mb-8 font-calsans">
      Servers That Use NavoCloud
    </h1>

    <div class="transition-all flex flex-col space-y-6">
  <div class="transition-all flex justify-center flex-wrap gap-6">
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/flex_development.png" width="48" height="48"
        alt="Flex Development" loading="lazy" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">Flex Development</p>
        <p class="transition-all text-gray-400">1,465 members</p>
      </div>
    </div>
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/mystic_shores_rp.png" width="48" height="48" loading="lazy"
        alt="Mystic Shores RP" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">Mystic Shores RP</p>
        <p class="transition-all text-gray-400">32 Members</p>
      </div>
    </div>
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/peanut_network.gif" width="48" height="48"
        alt="Peanut Network" class="transition-all rounded-full" loading="lazy" />
      <div>
        <p class="transition-all font-semibold text-white">Peanut Network</p>
        <p class="transition-all text-gray-400">50 Members</p>
      </div>
    </div>
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/galactic_mc.png" width="48" height="48"
        alt="Galactic MC™ Official" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">Galactic MC™ Official</p>
        <p class="transition-all text-gray-400">62 Members</p>
      </div>
    </div>
  </div>

  <div class="transition-all flex justify-center flex-wrap gap-6">
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/buddies_empire.png" width="48" height="48"
        alt="BUDDIES EMPIRE SMP" loading="lazy" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">BUDDIES EMPIRE SMP</p>
        <p class="transition-all text-gray-400">144 Members</p>
      </div>
    </div>
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/the_atlas_project.png" width="48" height="48"
        alt="Atlas Project" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">Atlas Project</p>
        <p class="transition-all text-gray-400">67 Members</p>
      </div>
    </div>
    <div class="transition-all flex items-center space-x-4 bg-neutral-800/35 border border-neutral-700 hover:border-[#2563EB] p-4 rounded-lg">
      <img src="./assets/imgs/front-page/the-dm-place.png" width="48" height="48"
        alt="The DM Place" class="transition-all rounded-full" />
      <div>
        <p class="transition-all font-semibold text-white">The DM Place</p>
        <p class="transition-all text-gray-400">1,358 Members</p>
      </div>
    </div>
  </div>
</div>


    
    <div class="transition-all flex flex-col space-y-6">
      <div class="transition-all flex justify-center flex-wrap gap-6">
        <div class="transition-all flex items-center space-x-4   p-4 rounded-lg">
                                <p class="transition-all font-semibold text-white">As Seen On</p>

          <img src="https://cdn.discordapp.com/icons/1221389187719102514/057c8f69c6c0af548625bb6c8c1163ce.png" width="48" height="48"
            alt="FREE MINECRAFT HOSTING" loading="lazy" class="transition-all rounded-full" />

          <div>
            <p class="transition-all font-semibold text-white">Free Minecraft Hostings</p>
            <p class="transition-all text-gray-400">152 Members</p>
          </div>
    
  </div> </div> </div>
</section>


    </div>
    <!-- End Hero -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="">
      <path fill="#262626" fill-opacity="1"
        d="M0,96L40,106.7C80,117,160,139,240,144C320,149,400,139,480,117.3C560,96,640,64,720,64C800,64,880,96,960,133.3C1040,171,1120,213,1200,218.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
  <div class="transition-all bg-neutral-800 w-full p-4 md:p-0"> <!-- Added padding here -->
    <!-- Icon Blocks -->
    <div class="transition-all max-w-[85rem] mx-auto">
        <div class="transition-all max-w-4xl mx-auto">
            <h1 class="transition-all font-calsans text-4xl text-white mb-4">Features</h1>

            <!-- Grid -->
            <div class="transition-all grid md:grid-cols-2 gap-3 md:gap-6 lg:gap-12">
                <div class="transition-all space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-shield-ban">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                            <path d="m4.243 5.21 14.39 12.472" />
                        </svg>
                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                DDoS Protection
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Ensure uptime and security with enterprise-grade DDoS protection.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-laptop">
                            <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16" />
                        </svg>
                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                Realtime Collaboration
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Work together seamlessly with real-time collaboration tools.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-bot">
                            <path d="M12 8V4H8" />
                            <rect width="16" height="12" x="4" y="8" rx="2" />
                            <path d="M2 14h2" />
                            <path d="M20 14h2" />
                            <path d="M15 13v2" />
                            <path d="M9 13v2" />
                        </svg>

                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                Automatic Backups
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Never lose data with automated daily backups.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->

                <div class="transition-all space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-palette">
                            <circle cx="13.5" cy="6.5" r=".5" fill="currentColor" />
                            <circle cx="17.5" cy="10.5" r=".5" fill="currentColor" />
                            <circle cx="8.5" cy="7.5" r=".5" fill="currentColor" />
                            <circle cx="6.5" cy="12.5" r=".5" fill="currentColor" />
                            <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z" />
                        </svg>
                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                Custom Domain Support
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Personalize your projects with custom domain support.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg>
                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                High Performance Servers
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Experience high-speed performance optimized for gaming and development.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="transition-all flex gap-x-5 sm:gap-x-8">
                        <svg class="transition-all shrink-0 mt-2 size-8 text-white" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 10v12" />
                            <path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.88-1.27L10.5 2l4.5 3.88" />
                        </svg>
                        <div class="transition-all grow">
                            <h3 class="transition-all text-base sm:text-lg font-semibold text-neutral-200">
                                24/7 Support
                            </h3>
                            <p class="transition-all mt-1 text-neutral-400">
                                Get help whenever you need it with round-the-clock support.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Icon Blocks -->
</div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#262626" fill-opacity="1"
        d="M0,160L60,165.3C120,171,240,181,360,186.7C480,192,600,192,720,181.3C840,171,960,149,1080,160C1200,171,1320,213,1380,234.7L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
      </path>
    </svg>
    <div>
    <!-- Card Section -->
<div class="transition-all max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <h1 class="transition-all font-calsans text-4xl text-white mb-2">Our Plans</h1>

  <!-- Grid -->
  <div class="transition-all grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
    <!-- Free Plan Card -->
    <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-800"
      href="/pricing">
      <div class="transition-all p-4 md:p-5">
        <div class="transition-all flex gap-x-5">
          <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-container">
            <path
              d="M22 7.7c0-.6-.4-1.2-.8-1.5l-6.3-3.9a1.72 1.72 0 0 0-1.7 0l-10.3 6c-.5.2-.9.8-.9 1.4v6.6c0 .5.4 1.2.8 1.5l6.3 3.9a1.72 1.72 0 0 0 1.7 0l10.3-6c.5-.3.9-1 .9-1.5Z" />
            <path d="M10 21.9V14L2.1 9.1" />
            <path d="m10 14 11.9-6.9" />
            <path d="M14 19.8v-8.1" />
            <path d="M18 17.5V9.4" />
          </svg>
          <div class="transition-all grow">
            <div class="transition-all flex justify-between">
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                Free Plan
              </h3>
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                £0.00<span class="transition-all text-neutral-400/65 text-sm">/mo</span>
              </h3>
            </div>

            <p class="transition-all text-sm text-neutral-500">
              1 vCore CPU, 3500MB Memory, 4120MB Disk, 2 MySQL Databases - Ideal for personal projects.
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Free Plan Card -->

    <!-- Premium Plan Card -->
    <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-800"
      href="/pricing">
      <div class="transition-all p-4 md:p-5">
        <div class="transition-all flex gap-x-5">
          <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-server">
            <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
            <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
            <line x1="6" x2="6.01" y1="6" y2="6" />
            <line x1="6" x2="6.01" y1="18" y2="18" />
          </svg>
          <div class="transition-all grow">
            <div class="transition-all flex justify-between">
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                Premium Plan
              </h3>
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                £0.00<span class="transition-all text-neutral-400/65 text-sm">/mo</span>
              </h3>
            </div>

            <p class="transition-all text-sm text-neutral-500">
              2.5 vCores CPU, 6144MB Memory, 9000MB Disk, 4 MySQL Databases - Ideal for growing projects.
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Premium Plan Card -->

    <!-- Fastest Plan Card -->
    <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-800"
      href="/pricing">
      <div class="transition-all p-4 md:p-5">
        <div class="transition-all flex gap-x-5">
          <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-zap">
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
          </svg>
          <div class="transition-all grow">
            <div class="transition-all flex justify-between">
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                Fastest Plan
              </h3>
              <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                £0.00<span class="transition-all text-neutral-400/65 text-sm">/mo</span>
              </h3>
            </div>

            <p class="transition-all text-sm text-neutral-500">
              6 vCores CPU, 16240MB Memory, 25000MB Disk, 5 MySQL Databases - Ultimate for large projects.
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Fastest Plan Card -->
  </div>

  <!-- Announcement as Tailwind Alert -->
  <div class="transition-all mt-6 p-4 bg-blue-600 text-white text-sm text-center rounded-lg shadow-md">
    <p class="transition-all font-semibold">
      You can earn credits very easily, check <a href="./guides/how-to-earn-more-credits/" class="underline">here</a> on how to.
    </p>
  </div>
</div>



       
        </div>
        <!-- End Grid -->
      </div>
      <!-- End Card Section -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#262626" fill-opacity="1"
        d="M0,96L40,106.7C80,117,160,139,240,144C320,149,400,139,480,117.3C560,96,640,64,720,64C800,64,880,96,960,133.3C1040,171,1120,213,1200,218.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
 <div class="transition-all bg-neutral-800">
  <!-- Card Section -->
  <div class="transition-all max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <h1 class="transition-all font-calsans text-4xl text-white mb-2">Quick Guides</h1>

    <!-- Grid -->
    <div class="transition-all grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
      <!-- Card 1 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/setting-up-phpmyadmin">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-container">
              <path d="M22 7.7c0-.6-.4-1.2-.8-1.5l-6.3-3.9a1.72 1.72 0 0 0-1.7 0l-10.3 6c-.5.2-.9.8-.9 1.4v6.6c0 .5.4 1.2.8 1.5l6.3 3.9a1.72 1.72 0 0 0 1.7 0l10.3-6c.5-.3.9-1 .9-1.5Z" />
              <path d="M10 21.9V14L2.1 9.1" />
              <path d="m10 14 11.9-6.9" />
              <path d="M14 19.8v-8.1" />
              <path d="M18 17.5V9.4" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Setting Up phpMyAdmin
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  5min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Learn how to install and configure phpMyAdmin for MySQL management.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 1 -->

      <!-- Card 2 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/deploying-a-discord-bot">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-server">
              <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
              <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
              <line x1="6" x2="6.01" y1="6" y2="6" />
              <line x1="6" x2="6.01" y1="18" y2="18" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Deploying a Discord Bot
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  10min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Step-by-step guide for setting up a Discord bot on our hosting platform.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 2 -->

      <!-- Card 3 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/configuring-a-voice-server">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-zap">
              <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Configuring a Voice Server
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  15min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                How to set up and manage a voice server for seamless communication.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 3 -->

      <!-- Card 4 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/installing-a-cms">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-server">
              <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
              <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
              <line x1="6" x2="6.01" y1="6" y2="6" />
              <line x1="6" x2="6.01" y1="18" y2="18" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Installing a CMS
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  10min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Guide for installing and configuring popular CMS platforms like WordPress.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 4 -->

      <!-- Card 5 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/setting-up-ssl-certificates">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-lock">
              <rect x="5" y="11" width="14" height="11" rx="2" ry="2" />
              <path d="M8 11V7a4 4 0 0 1 8 0v4" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Setting Up SSL Certificates
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  8min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Learn how to install and manage SSL certificates to secure your site.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 5 -->

      <!-- Card 6 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/backup-and-restore-procedures">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-database">
              <ellipse cx="12" cy="6" rx="9" ry="3" />
              <path d="3 6v12a9 3 0 0 0 18 0V6" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Backup and Restore Procedures
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  12min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                How to back up and restore your files, databases, and configurations.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 6 -->

      <!-- Card 7 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/version-control-basics">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-git-branch">
              <path d="M6 3a3 3 0 0 1 3 3v4.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L9 10.586V6a3 3 0 0 1 3-3z" />
              <path d="M3 12a3 3 0 1 1 3 3" />
              <path d="M12 15a3 3 0 1 1 3-3" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Version Control Basics
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  9min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Introduction to using version control systems like Git for your projects.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 7 -->

      <!-- Card 8 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/user-management-in-discord">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-users">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
              <path d="M5 17h4" />
              <path d="M15 17h4" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  User Management in Discord
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  11min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Manage roles and permissions effectively in your Discord server.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 8 -->

      <!-- Card 9 -->
      <a class="transition-all group flex flex-col border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition bg-neutral-900 border-neutral-700"
        href="./guides/updating-your-server-software">
        <div class="transition-all p-4 md:p-5">
          <div class="transition-all flex gap-x-5">
            <svg class="transition-all mt-1 shrink-0 size-5 text-neutral-200" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="transition-all lucide lucide-refresh-cw">
              <path d="M4 11V6a9 9 0 0 1 9-9v4" />
              <path d="M14 3h7v7" />
              <path d="M16 21a9 9 0 0 1-9-9v-4" />
              <path d="M7 21H2v-7" />
            </svg>
            <div class="transition-all grow">
              <div class="transition-all flex justify-between">
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  Updating Your Server Software
                </h3>
                <h3 class="transition-all font-semibold group-hover:text-neutral-400 text-neutral-200">
                  7min<span class="transition-all text-neutral-400/65 text-sm">~</span>
                </h3>
              </div>
              <p class="transition-all text-sm text-neutral-500">
                Instructions for keeping your server software up to date and secure.
              </p>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card 9 -->
    </div>
  </div>
</div>

 
 
<!-- Wave SVG (Upside Down) -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#262626" fill-opacity="1" transform="scale(1, -1) translate(0, -320)"
    d="M0,96L40,106.7C80,117,160,139,240,144C320,149,400,139,480,117.3C560,96,640,64,720,64C800,64,880,96,960,133.3C1040,171,1120,213,1200,218.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
  </path>
</svg>



<body class="bg-gray-100">
  <section class="py-10">
    <div class="max-w-6xl mx-auto text-center px-4">
      <p class="transition-all font-calsans text-lg text-gray-300 mb-4">Read what our users are saying about our hosting service, their genuine experiences, and the quality of our support.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10 max-w-6xl mx-auto px-4">
      <!-- Review 1 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Rain Solanio</h4>
        <p class="text-sm text-gray-500">PH | Rated 4 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">Good Staffs are good. Hosting are a little bit laggy but hey for a free hosting this is so worth it (I'm in Asia).</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Meraki</h4>
        <p class="text-sm text-gray-500">GB | Rated 5 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">Amazing staff team, fun environment. Would 10000/10 recommend people to join this community.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Spooky</h4>
        <p class="text-sm text-gray-500">GB | Rated 4 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">It's a great hosting site for your servers. The owner and admins are great and always try to help you.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

      <!-- Review 4 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Yusf F Qadr</h4>
        <p class="text-sm text-gray-500">JP | Rated 4 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">I just started using this web for hosting my project. 9/10 so far, thanks for the guide and help!</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

      <!-- Review 5 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">John Remon</h4>
        <p class="text-sm text-gray-500">EG | Rated 4 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">The service is amazing, but the downtimes should be less frequent.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

      <!-- Review 6 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Jonathan Phillips</h4>
        <p class="text-sm text-gray-500">US | Rated 5 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">The support team helped me set up a Java/Bedrock crossplay server. Great service and free hosting for Minecraft.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Review 7 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Narr</h4>
        <p class="text-sm text-gray-500">AM | Rated 5 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">Hello, this website is literally perfect, they give out free 24/7 hosting, their Discord server has the nicest staff team.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Review 8 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Mar XDPP</h4>
        <p class="text-sm text-gray-500">PH | Rated 5 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">The affordable and simple server hosting offers are enough alone. Interactive and very helpful staff. 5/5 would recommend.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Review 9 -->
      <div class="p-6 review-box rounded-lg border border-blue-500">
        <h4 class="text-lg font-bold text-white">Shlok Kapade</h4>
        <p class="text-sm text-gray-500">IN | Rated 5 out of 5 stars</p>
        <p class="text-sm text-gray-400 mt-4">This best hosting I have ever seen in my life, one of my friends suggested me this hosting, and it gives insane ping.</p>
        <div class="text-yellow-500 mt-4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
    </div>
    <style>
          .review-box:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4);
    }
    </style>
   <div class="py-12">
  <div class="flex justify-center space-x-8 mt-8">
    <!-- Hosted Servers -->
    <div class="text-center">
      <span class="block text-4xl font-bold text-blue-500" id="servers-hosted">0+</span>
      <span class="block text-lg font-medium text-gray-200">Servers Hosted</span>
    </div>
    
    <!-- Active Users -->
    <div class="text-center">
      <span class="block text-4xl font-bold text-green-500" id="active-users">0+</span>
      <span class="block text-lg font-medium text-gray-200">Active Users</span>
    </div>

    <!-- Countries Served -->
    <div class="text-center">
      <span class="block text-4xl font-bold text-yellow-500" id="countries-served">0+</span>
      <span class="block text-lg font-medium text-gray-200">Countries Served</span>
    </div>
  </div>
   <!-- Second Row -->
    <div class="text-center w-full mt-8">
<span class="text-2xl font-bold">
    <span class="text-purple-500">2345+</span> 
    <span class="text-gray-200">Discord Members</span>
</span>


      
    </div>
</div>
</div>

<script>
  function countUp(elementId, target, duration) {
    const element = document.getElementById(elementId);
    const increment = target / (duration / 16);
    let current = 0;

    function updateCounter() {
      current += increment;
      if (current < target) {
        element.innerText = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        element.innerText = target;
      }
    }
    updateCounter();
  }

  document.addEventListener("DOMContentLoaded", () => {
    countUp("servers-hosted", 500, 2000);
    countUp("active-users", 4852, 3000);
    countUp("countries-served", 50, 2000);
  });
</script>

  </div>
  </section>





    <!-- Announcement Banner -->
    <div class="transition-all ">
      <div
        class="transition-all bg-blue-600 bg-[url('https://preline.co/assets/svg/examples/abstract-1.svg')] bg-no-repeat bg-cover bg-center p-4 w-full text-center">
        <p class="transition-all me-2 font-calsans inline-block text-white">
          What are you waiting for?
        </p>
        <a class="transition-all py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border-2 border-white text-white hover:border-white/70 hover:text-white/70 focus:outline-none focus:border-white/70 focus:text-white/70 disabled:opacity-50 disabled:pointer-events-none"
          href="/discord">
          Get Started
          
        </a>
      </div>
    </div>
    <!-- End Announcement Banner -->
    
<?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>

  </body>

</html>