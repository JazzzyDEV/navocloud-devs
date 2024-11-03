
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="transition-all bg-neutral-900">

  <!-- ========== HEADER ========== -->
  <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
    <nav
      class="mt-4 relative max-w-2xl w-full border border-gray-200 z-10 filter backdrop-blur rounded-[2rem] mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto bg-neutral-800/35 border-neutral-700/35">
      
      <!-- Logo -->
      <div class="px-4 md:px-0 flex justify-between items-center">
        <a class="flex-none rounded-md text-xl inline-block font-semibold focus:opacity-80" href="/" aria-label="NavoCloud">
          <img src="/assets/imgs/just_clouds.png" loading="lazy" class="mt-1" width="50rem" />
        </a>

        <!-- Mobile Toggle Button -->
        <button type="button"
          class="hs-collapse-toggle flex justify-center items-center size-6 border rounded-full border-neutral-700 text-neutral-400 hover:bg-neutral-700 focus:bg-neutral-700 md:hidden"
          id="hs-navbar-header-floating-collapse" aria-expanded="false" aria-controls="hs-navbar-header-floating"
          aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="M6 6l12 12"></path>
          </svg>
        </button>
        <!-- End Toggle Button -->

      </div>
      
      <!-- Menu Links -->
      <div id="hs-navbar-header-floating"
        class="hidden hs-collapse overflow-hidden duration-300 basis-full mx-2 grow md:block"
        aria-labelledby="hs-navbar-header-floating-collapse">
        <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
          <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 hover:-translate-y-2 transition-all" href="/">Home</a>
          <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 hover:-translate-y-2 transition-all" href="/faq">FAQ</a>
          <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 hover:-translate-y-2 transition-all" href="/aboutus">About Us</a>
          <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 hover:-translate-y-2 transition-all" href="/guides">Guides</a>
          <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 font-medium border-neutral-200 text-neutral-400 hover:text-neutral-300 hover:-translate-y-2 transition-all" href="https://dash.navocloud.com/register?ref=site/">Panel</a>
        </div>
      </div>
      <!-- End Menu Links -->
    </nav>
  </header>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggleButton = document.getElementById("hs-navbar-header-floating-collapse");
      const menu = document.getElementById("hs-navbar-header-floating");

      toggleButton.addEventListener("click", function () {
        menu.classList.toggle("hidden");
      });
    });
  </script>
  
<aside id="discord-popup" style="background-color: #2563EB; color: white; border-radius: 10px; padding: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); display: flex; align-items: center; justify-content: space-between; position: fixed; bottom: 20px; right: 20px; z-index: 50;">
    <a href="/discord" style="font-size: 1rem; font-weight: 500; display: flex; align-items: center;">
        👋 Hey! Come check out our Discord!
    </a>
    <button onClick="hidePopup()" style="background: none; border: none; margin-left: 12px; cursor: pointer; padding: 0;">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
</aside>

<script>
    function hidePopup() {
        document.getElementById('discord-popup').style.display = 'none';
        localStorage.setItem('discordPopupDismissed', 'true');
    }

    window.onload = function() {
        if (localStorage.getItem('discordPopupDismissed') === 'true') {
            document.getElementById('discord-popup').style.display = 'none';
        }
    };
</script>


</aside>

</body>
</html>
