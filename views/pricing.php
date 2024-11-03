<!DOCTYPE html>
<html lang="en">
<?php 

$title = "Pricing";


if (file_exists('./components/header.php')) {
    include './components/header.php';
} else {
    echo "header.php not found!";
}

?>
  <!-- 
   IM JUST A fish (real im just a cat)
  -->
<style>
/* Hide the default checkbox */
input[type="checkbox"] {
  -webkit-appearance: none;
  appearance: none;
  position: relative;
  width: 50px;
  height: 25px;
  background-color: #ccc;
  outline: none;
  border-radius: 50px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/* Checked state (annually) */
input[type="checkbox"]:checked {
  background-color: #6b5bce;
}

/* Toggle knob */
input[type="checkbox"]::before {
  content: '';
  position: absolute;
  width: 21px; /* Adjust width for knob */
  height: 21px;
  border-radius: 50%;
  top: 2px; /* Ensure it stays vertically centered */
  left: 2px; /* Initial position inside the switch */
  background-color: white;
  transition: left 0.3s ease;
}

/* Move the knob to the right when checked */
input[type="checkbox"]:checked::before {
  left: 7px; /* Adjust this so it stays inside the background */
}

  .banner {
    background-color: #6b5bce; /* Purple color */
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 14px;
  }
  
  .banner a {
    color: white;
    text-decoration: underline;
  }
  
  .banner a:hover {
    color: #9b7cd2; /* Lighter purple on hover */
  }
</style>

<div class="banner">
  <p>
    Users can use <span style="font-weight: bold;">navocloud2024</span> for 50% off their first purchase at 
    <a href="https://helhosting.com">HelHosting.com</a>
  </p>
</div>

  <body class="transition-all bg-neutral-800">
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
      <div class="overflow-hidden">


        <header
          class="transition-all sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
          <nav
            class="transition-all mt-4 relative max-w-2xl w-full border border-gray-200 z-10 filter backdrop-blur rounded-[2rem] mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto bg-neutral-800/35 border-neutral-700/35">
            <div class="transition-all px-4 md:px-0 flex justify-between items-center">
              <!-- Logo -->
              <div>
                <a class="transition-all flex-none rounded-md text-xl inline-block font-semibold focus:opacity-80"
                  href="/" aria-label="NavoCloud">
                  <img src="/assets/imgs/just_clouds.png" loading="lazy" class="transition-all mt-1" width="50rem" />
                </a>
              </div>
              <!-- End Logo -->

              <div class="transition-all md:hidden">
                <!-- Toggle Button -->
                <button type="button"
                  class="transition-all hs-collapse-toggle flex justify-center items-center size-6 border rounded-full border-neutral-700 text-neutral-400 hover:bg-neutral-700 focus:bg-neutral-700"
                  id="hs-navbar-header-floating-collapse" aria-expanded="false"
                  aria-controls="hs-navbar-header-floating" aria-label="Toggle navigation"
                  data-hs-collapse="#hs-navbar-header-floating">
                  <svg class="transition-all hs-collapse-open:hidden shrink-0 size-3.5"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" x2="21" y1="6" y2="6" />
                    <line x1="3" x2="21" y1="12" y2="12" />
                    <line x1="3" x2="21" y1="18" y2="18" />
                  </svg>
                  <svg class="transition-all hs-collapse-open:block hidden shrink-0 size-4"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                  </svg>
                </button>
                <!-- End Toggle Button -->
              </div>
            </div>

            <div id="hs-navbar-header-floating"
              class="transition-all hidden hs-collapse overflow-hidden transition-all duration-300 basis-full mx-2 grow md:block"
              aria-labelledby="hs-navbar-header-floating-collapse">
              <div
                class="transition-all flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                <a class="transition-all py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 transition-all hover:-translate-y-2"
                  href="/" aria-current="page">Home</a>
                <a class="transition-all py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 transition-all hover:-translate-y-2"
                  href="/faq">FAQ</a>
                <a class="transition-all py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 transition-all hover:-translate-y-2"
                  href="/aboutus">About US</a>
                <a class="transition-all py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 transition-all hover:-translate-y-2"
                  href="/guides">Guides</a>
                <a class="transition-all py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 transition-all hover:-translate-y-2"
                  href="https://dash.navocloud.com/register?ref=ducky/">Panel</a>
              </div>
            </div>
          </nav>
        </header>


        <!-- Hero -->
        <div class="relative">
          <!-- Gradients -->
          <div aria-hidden="true" class="flex -z-[1] absolute -top-48 start-0">
            <div class="opacity-30 blur-3xl w-[1036px] h-[600px] bg-purple-900 ">
            </div>
            <div class="opacity-90 blur-3xl w-[577px] h-[300px] transform translate-y-32 bg-neutral-800/60">
            </div>
          </div>
          <!-- End Gradients -->

          <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl mx-auto text-center mb-10">
              <h2
                class="text-3xl leading-tight font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text bg-gradient-to-r from-violet-600 to-fuchsia-700 text-transparent">
                Simple, Free & Secure</h2>
              <p class="mt-2 lg:text-lg text-neutral-200">Whatever your status, our offers evolve according to your
                needs.</p>
                  <p class="mt-2 lg:text-lg text-white">Paid plans are sponsored by HelHosting. </p>
            </div>
            <!-- End Title -->

            <!-- Switch -->
            <div class="flex justify-center items-center">
              <label for="pricing-switch" class="min-w-14 text-sm me-3 text-neutral-400">
                Monthly
              </label>

              <input type="checkbox" id="pricing-switch"
                class="relative w-[3.25rem] h-7 p-px border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200  disabled:opacity-50 disabled:pointer-events-none checked:bg-none bg-neutral-800 border-neutral-800 checked:bg-purple-500 checked:border-purple-500 focus:ring-offset-gray-600 before:inline-block before:size-6 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 before:bg-neutral-400 checked:before:bg-white"
                >

              <label for="pricing-switch" class="min-w-14 text-sm ms-3 text-neutral-400">
                Annually
              </label>
            </div>
            <!-- End Switch -->

            <!-- Grid -->
            <div
              class="mt-6 md:mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-6 lg:gap-3 xl:gap-6 lg:items-center">
              <!-- Card -->
              <div class="flex flex-col  border text-center rounded-2xl p-4 md:p-8 bg-neutral-900 border-neutral-800">
                <h4 class="font-medium text-lg text-neutral-200">Free</h4>
                <span class="mt-7 font-bold text-3xl md:text-4xl xl:text-5xl text-neutral-200">Free</span>
                <p class="mt-2 text-sm text-neutral-500">Ideal for personal projects and testing. Includes 150% CPU -
                  4gb RAM 5GB storage (Up to 62gb with rewards!)</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      DDoS Protection
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Unlimited Bandwidth
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Easy Upgrade - Credit System
                    </span>
                  </li>
                </ul>

                <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border focus:outline-none disabled:opacity-50 disabled:pointer-events-none border-violet-500 text-violet-500 hover:text-violet-400 hover:border-violet-400 focus:text-violet-400 focus:border-violet-400"
                  href="https://dash.navocloud.com/register?ref=ducky/">
                  Get started
                </a>
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div
                class="flex flex-col border-2 btext-center shadow-xl rounded-2xl p-4 md:p-8 bg-neutral-900 border-violet-700">
                <p class="mb-3"><span
                    class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-violet-900/45 text-purple-700">Most
                    popular</span></p>
                <h4 class="font-medium text-lg text-neutral-200">Premium Plan</h4>
                <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-neutral-200 items-center" id="prem">
                  $11.92 <span class="text-neutral-500 md:text-2xl xl:text-3xl" id="premslash">/ Month</span>

                </span>
                <p class="mt-2 text-sm text-neutral-500">Perfect for or game servers. Includes 300% CPU
                  - 8gb RAM 30GB storage - Unlimited Bandwidth</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Perfect for Moderate Servers
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      DDoS protection
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Unlimited Bandwidth
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Dedicated IP: $2+ Per Month
                    </span>
                  </li>

                </ul>

                <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 focus:outline-none focus:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none"
                  href="https://billing.helhosting.com">
    <script src="https://kit.fontawesome.com/679740891a.js" crossorigin="anonymous"></script>

   
 <i class="fa-solid fa-arrow-up-right-from-square"></i> Get started
                </a>
                <!--Ima put this here -->

              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="flex flex-col  border text-center rounded-2xl p-4 md:p-8 bg-neutral-900 border-neutral-800">
                <h4 class="font-medium text-lg text-neutral-200"><span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-purple-600 hover:animate-gradient">Unlimited</span>
                  Plan</h4>
                <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-neutral-200" id="ulti">
                  $23.84<span class="text-neutral-500 md:text-2xl xl:text-3xl" id="ultislash">/ Month</span>
                </span>
                <p class="mt-2 text-sm text-neutral-500">Best for Large Servers and Modded Game Play. Includes 300% CPU -
                  16gb RAM 80GB storage - Unlimited Bandwidth</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Maximum performance
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      DDoS Protection
                    </span>
                  </li>

                  <li class="flex gap-x-2">
                    <svg class="shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    <span class="text-neutral-400">
                      Unlimited Bandwidth
                    </span>
                  </li>
                </ul>

                <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border focus:outline-none disabled:opacity-50 disabled:pointer-events-none border-violet-500 text-violet-500 hover:text-violet-400 hover:border-violet-400 focus:text-violet-400 focus:border-violet-400"
                  href="https://billing.helhosting.com">
 <i class="fa-solid fa-arrow-up-right-from-square"></i> Get started
                </a>
              </div>
              <!-- End Card -->

            </div>
            <!-- End Grid -->

            </div>
            <!-- End Grid -->


          </div>

        
        <!-- End Hero -->
      </div>

  </body>
  <script>
    const checkbox = document.getElementById("pricing-switch")
    const prem = document.getElementById("prem")
    const premslash = document.getElementById("premslash")
    const ulti = document.getElementById("ulti")
    const ultislash = document.getElementById("ultislash")
checkbox.addEventListener('change', function() {
  if (checkbox.checked == true) {
   prem.innerHTML = `$143.04 <span class="text-neutral-500 md:text-2xl xl:text-3xl" >/ Year</span>`
   ulti.innerHTML = `$286.08 <span class="text-neutral-500 md:text-2xl xl:text-3xl" >/ Year</span>`
  } else {
    prem.innerHTML = `$11.92 <span class="text-neutral-500 md:text-2xl xl:text-3xl" >/ Month</span>`
   ulti.innerHTML = `$23.84 <span class="text-neutral-500 md:text-2xl xl:text-3xl" >/ Month</span>`
  }
});

  </script>
  
   <footer style="margin-top: 5vh">
       <?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>
   </footer>
   
</html>