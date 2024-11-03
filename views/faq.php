<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<!DOCTYPE html>
<html lang="en">
<?php 

$title = "FAQ";
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
  <body class="transition-all bg-neutral-900 transition-all">
   
    <!-- ========== END HEADER ========== -->
    <!-- FAQ -->
    <div class="transition-all max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="transition-all max-w-2xl mx-auto mb-10 lg:mb-14">
        <h2 class="transition-all text-2xl font-bold md:text-4xl md:leading-tight text-white">
          You might be wondering...
        </h2>
      </div>
      <!-- End Title -->

      <div class="transition-all max-w-2xl mx-auto divide-y divide-neutral-700">
        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                What services do you offer for free hosting?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">We host everything you can imagine, from websites to game servers and even to discord bots and voice servers - if you cant find what you want to host, contact us, and we can find it for you!</p>
            </div>
          </div>
        </div>

        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                How can I sign up for free hosting?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">Signing up is so easy! Just create a account via <a href="https://dash.navocloud.com/register?ref=ducky"  >here</a> make a ticket via our discord <a href="https://discord.navocloud.com" >(here)</a> and ask for a free server - use /services to see all of the servers we have to offer. Provide us with your username or email and a admin will set your server up.</p>
            </div>
          </div>
        </div>

        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                What limitations are there on the free hosting plans?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">Really, there aren't any! The free hosting offers a very good performing server and can be increased (CPU, RAM, STORAGE ect) from just inviting your friends / family! If you dont want to invite people, you can pay and get access to up to 64GB for £5.</p>
            </div>
          </div>
        </div>

        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                Can I upgrade to a premium plan later?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">Yes! Dont want to invite people? You can pay a small fee and we will assign you more specs insantly, without having to restart your server.</p>
            </div>
          </div>
        </div>

        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                Is there a way to track how many invites my links receives?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">Yes! If your wanting to invite people, you need to make sure the invite is your own invite, and is set to unlimited time so it doesnt expire. You can use /check to see how many invites you have / have redeemed.</p>
            </div>
          </div>
        </div>

        <div class="transition-all py-8 first:pt-0 last:pb-0">
          <div class="transition-all flex gap-x-5">
            <svg
              class="transition-all shrink-0 mt-1 size-6 text-neutral-500"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <circle cx="12" cy="12" r="10" />
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
              <path d="M12 17h.01" />
            </svg>

            <div class="transition-all grow">
              <h3 class="transition-all md:text-lg font-semibold text-neutral-200">
                Is there a limit to the number of servers I can create on navocloud.com?
              </h3>
              <p class="transition-all mt-1 text-neutral-500">No! We dont limit amount of servers, we usually do ask for atleast 5 invites per new server. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End FAQ -->
     
<?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>

  </body>
</html>