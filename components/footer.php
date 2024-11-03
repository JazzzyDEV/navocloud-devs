<!--Credits to https://codepen.io/Theo_Helias/pen/ExbExJM-->
<style>
    .cursor {
        width: 7.5px;
        height: 7.5px;
        border-radius: 50%;
        position: absolute;
        transform: scale(1);
        background-color: blue;
        mix-blend-mode: difference;
        transition-timing-function: ease-out;
        transition-duration: 50ms;
        pointer-events: none;
        z-index: 9999;
    }

    .cursor2 {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        position: absolute;
        transform: scale(3);
        background-color: gray;
        opacity: 0.5;
        transition-timing-function: ease-out;
        transition-duration: 200ms;
        pointer-events: none;
        z-index: 9998;
    }
</style>

<body>
    <!-- What the utter hell. I dont hate it, but it is HELLA annoying. -->
    <!--
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <script>const cursor = document.querySelector('.cursor'); const cursor2 = document.querySelector('.cursor2'); document.addEventListener('mousemove', e => { cursor.style.top = (e.pageY - 3.75) + "px"; cursor.style.left = (e.pageX - 3.75) + "px"; cursor2.style.top = (e.pageY - 5) + "px"; cursor2.style.left = (e.pageX - 5) + "px"; });</script>
     W Coder - W Cursor (some tweeks made) 
    -->



    <!-- ========== FOOTER ========== -->
    <footer class="transition-all mt-auto w-full bg-neutral-950">
        <div class="transition-all mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
            <!-- Grid -->
            <div class="transition-all grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <div class="transition-all col-span-full lg:col-span-1 flex flex-col gap-x-2">
                 <a class="transition-all flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80"
                        href="/" aria-label="NavoCloud">
                        <img width="50px" src="../assets/imgs/just_clouds.png">
                        </a>
                    <a class="transition-all flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80"
                        href="/" aria-label="NavoCloud">NavoCloud</a>
                    <p class="transition-all text-gray-400 mt-2">Professional-grade free hosting service designed for
                        gamers.</p>
                    <a href="/contact"
                        class="transition-all mt-2 inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded">
                        Contact
                    </a>
<div class="flex items-center justify-center p-2 bg-card border border-border rounded-lg mt-4">
  <span class="text-white">Made with love in the US <3</span>
</div></div>



                <!-- End Col -->

                <div class="transition-all col-span-1 ml-4"> <!-- Added ml-4 -->
                    <h4 class="transition-all font-semibold text-gray-100">Company</h4>

                    <div class="transition-all mt-3 grid space-y-3">
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="./aboutus">About us</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="./pricing">Pricing*</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/guides">Guides</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="./donate">Donate</a>
                        </p>
                                    <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/mental-health">Mental Health
                <span style="background-color: #ff8c00; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">Updated!</span>
            </a>
             <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/gambling">Gambling
                <span style="background-color: green; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">New!</span>
            </a>
        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="transition-all col-span-1">
                    <h4 class="transition-all font-semibold text-gray-100">Resources</h4>

                    <div class="transition-all mt-3 grid space-y-3">
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/hardware">Hardware</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/status">Status
                <span style="background-color: #ff8c00; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">Updated</span>
            </a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/discord">Discord</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/partners">
                Partners <span style="background-color: red; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">Coming Soon</span>
            </a>
                        </p>
                    </div>
                </div>
                <!-- End Col -->

               <div class="transition-all col-span-1">
    <h4 class="transition-all font-semibold text-gray-100">Miscellaneous</h4>

    <div class="transition-all mt-3 grid space-y-3">
        <p>
            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/careers/">
                Careers </a> / <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="https://careers.navocloud.com"> Apply</a> <span style="background-color: #2563EB; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">Hiring</span>
            </a>
        </p>
        <p>
            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="https://bans.navocloud.com">Bans & Kicks</a>
        </p>
        <p>
          <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="https://appeals.navocloud.com">
                Appeals <span style="background-color: red; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">Coming Soon</span>
            </a></P>
             <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                href="/affiliate">
                Affiliate <span style="background-color: green; padding: 2px 6px; border-radius: 3px; font-size: 0.75rem; color: white; display: inline-flex; align-items: center;">New</span>
            </a>
        <p>
    </div>
</div>

                <!-- End Col -->

                <div class="transition-all col-span-1">
                    <h4 class="transition-all font-semibold text-gray-100">Legal</h4>

                    <div class="transition-all mt-3 grid space-y-3">
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/tos">Terms of Service</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/privacy">Privacy Policy</a>
                        </p>
                        <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/rules">Discord Rules</a>
                        </p>
                         <p>
                            <a class="transition-all inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                                href="/contact">Contact</a>
                        </p>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div
                class="transition-all mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                <div class="transition-all flex justify-between items-center">
                    <p class="transition-all text-sm text-gray-400 dark:text-neutral-400">
                        © 2024 NavoHost. All rights reserved. Trading under HelHosting LLC
                    </p>
                </div>
                <!-- End Col -->

                <!-- Social Brands -->
                <div class="transition-all flex items-center space-x-4">
                    <!-- Status Text -->
                    <a href="/status" class="text-gray-400">
                        Status: <span class="text-green-500">Online</span>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
        </div>
    </footer>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!--I need this for webkit-->
    <div class="scrollbar">
    </div>
