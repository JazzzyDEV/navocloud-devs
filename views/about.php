<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<!DOCTYPE html>
<html lang="en">
<?php 

$title = "About Us";
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
    
        <!-- ========== END HEADER ========== -->
    <!-- Hero -->
    <div style="margin-top: 5vh" class="transition-all max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[3rem]">
      <!-- Grid -->
      <div class="transition-all grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center">
        <div class="transition-all lg:col-span-3">
          <h1
            class="transition-all block text-3xl font-bold sm:text-4xl font-calsans md:text-5xl lg:text-6xl text-white"
          >
            About NavoCloud
          </h1>
          <p class="transition-all mt-3 text-lg text-white">
            We know what you need, and thats free hosting.
          </p>
          <p class="transition-all mt-2 text-l text-neutral-400">
            We help over 4.9k+ (more counting!) users gain access to there own
            free, personal server, without stupid limits.
          </p>
        </div>
        <!-- End Col -->

        <div class="transition-all lg:col-span-4 mt-10 lg:mt-0">
         
             <div class="diff aspect-[16/9]">
  <div class="diff-item-1">
    <img alt="daisy" src="/assets/imgs/front-page/server_uk_1.webp
" />
  </div>
  <div class="diff-item-2">
    <img
      alt="daisy"
      src="/assets/imgs/front-page/IMG_3713.jpg" />
  </div>
  <div class="diff-resizer"></div>

         
         
</div><link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
         
        </div>
        <!-- End Col -->
      </div>
  <!-- End Grid -->
<div style="margin-top: 5vh" class="transition-all grid grid-cols-1 sm:grid-cols-2 gap-2 mt-[5rem]">
  <div class="transition-all p-4 bg-neutral-800 rounded-lg">
    <h1 class="transition-all text-center text-3xl font-calsans text-white">Why us?</h1>
    <p class="transition-all text-neutral-300 text-center">
      Navocloud.com provides comprehensive hosting services with round-the-clock support, guaranteed uptime, and robust DDoS protection to keep your website running smoothly, while offering full access to all features and tools for complete control over your hosting environment, all backed by secure servers designed to protect your data from unauthorized access.
    </p>
  </div>

  <div class="transition-all p-4 bg-neutral-800 rounded-lg">
    <h1 class="transition-all text-center text-3xl font-calsans text-white">
      Network Owners that care.
    </h1>
    <p class="transition-all text-neutral-300 text-center">
      Jazzzy and Godly, with years of experience in gaming and service management, saw a gap in the hosting market and founded Navocloud to provide free, high-spec hosting without unnecessary requirements. They invested in top-tier DDoS protection for security while keeping connectivity open. Although they aim to offer everything for free, Jazzzy, as a college student, plans to introduce ads to cover costs and continue enhancing their services.
    </p>
  </div>
</div>
<div style="border: 2px solid #2563EB;" class="transition-all w-full bg-neutral-700 p-6 rounded-lg mt-6">
  <h2 class="transition-all text-center text-4xl font-calsans text-white">Our Mission</h2>
  <p class="transition-all text-neutral-300 text-center mt-4">
    At Navocloud, our mission is to provide reliable, scalable, and free hosting services tailored to meet the needs of gamers, developers, and content creators alike. We are committed to delivering the highest quality service with zero compromises on security and performance, ensuring that every user can build and grow their digital presence effortlessly.
  </p>
</div>


    
    <section style="margin-top: 4vh" id="our-team" class=" py-32">
        <div class="container mx-auto px-4">
            <h2 style="color: white" class="text-3xl font-bold text-center mb-8 team-title">
                Meet <span>NavoCloud</span>'s Team
            </h2>
            <!--Ima just slot this here rq -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">        
            <!--and this -->
                    <style>
            .fab, .fas {
                color: white;
            }

            .fab:hover, .fas:hover {
                color: blue;
            }
.avatar-border {
    border: 1px solid #2563EB;
    border-radius: 50%;
    padding: 5px;
    transition: transform 0.3s ease, padding 0.3s ease;
}

.avatar-border:hover {
    transform: scale(1.1) rotate(3deg);
    padding: 3px;
}

        </style>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div style="border: 1px solid blue " class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/jazzzy.png" 
                         alt="Jazzzy" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Jazzzy</h3>
                    <p class="text-gray-200"> Network Owner</p>
                    <p class="text-gray-300 mt-2">Hey! Im him (the network owner) for NavoCloud. Any questions? Dont hesitate to message me!</p>
                    <div class="social-links mt-4">
                        <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                        <a href="mailto:jazzzy@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid blue " class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/godly.png" 
                         alt="Godly" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Godly</h3>
                    <p class="text-gray-200"> Network Owner</p>
                    <p class="text-gray-300 mt-2">Owner of NavoCloud here. If you have any questions or need assistance, feel free to reach out to me directly.</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:godly@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                 <div style="border: 1px solid orange" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/awww.png" 
                         alt="Awww" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Awww</h3>
                    <p class="text-gray-200">Chief Operations Officer</p>
                    <p class="text-gray-300 mt-2">N/A</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:awww@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                                <div style="border: 1px solid orange" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/jar.png" 
                         alt="Helbulus" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Helbulus</h3>
                    <p class="text-gray-200">Chief Operations Officer</p>
                    <p class="text-gray-300 mt-2">If you need any assistance or have questions about your server, just let me know. 🛠️</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:jar@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                                <div style="border: 1px solid orange" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/paech.png" 
                         alt="Peaches" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Paech</h3>
                    <p class="text-gray-200">Chief Operations Officer</p>
                    <p class="text-gray-300 mt-2">Still learning stuff! I made the mental health section <a style="color: blue" href="../mental-health/">Here</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:paech@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid red" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/cats.png" 
                         alt="Cats" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">AteMyCats</h3>
                    <p class="text-gray-200"> Network Administrator</p>
                    <p class="text-gray-300 mt-2">As a System Administrator at NavoCloud, I handle cloud infrastructure, deploy VMs, and ensure network reliability for 1.9K+ users.</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:sysadministration@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid purple" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/ducky.png" 
                         alt="Ducky" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Ducky</h3>
                    <p class="text-gray-200"> Website Developer</p>
                    <p class="text-gray-300 mt-2"> If you encounter any issues or have suggestions for improvements, feel free to reach out. </p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:ducky@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                <div style="border: 1px solid gold" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/jaeden.png" 
                         alt="Jaeden" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Jaeden</h3>
                    <p class="text-gray-200"> Network Security / Anti DDoS</p>
                    <p class="text-gray-300 mt-2">Disruptions? Or just have general feedback? Email me @ network@navocloudhosting.com</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto: network@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid purple" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                       class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
src="../team/xcoffeeman.png" 
                         alt="xCoffeeman" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">xCoffeeMan</h3>
                    <p class="text-gray-200">Website Developer</p>
                    <p class="text-gray-300 mt-2">  I’m the developer behind the scenes. If you spot any bugs or have ideas for new features, don’t hesitate to share.</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:ducky@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid orange" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/cyteon.png" 
                         alt="Cyteon" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Cyteon</h3>
                    <p class="text-gray-200">Administrator & Team Lead</p>
                    <p class="text-gray-300 mt-2">Hi! I’m one of the Administrators Enjoy your server, and we hope to see you around!</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:cyteon@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid orange" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/ciercy.png" 
                         alt="Ciercy" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Ciercy</h3>
                    <p class="text-gray-200">Administrator</p>
                    <p class="text-gray-300 mt-2">N/A<p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:Ciercy@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div style="border: 1px solid pink" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/sam.png" 
                         alt="sam" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Sam</h3>
                    <p class="text-gray-200"> Support Team Lead</p>
                    <p class="text-gray-300 mt-2">Hey! I'm Sam, and Welcome to Navocloud!. As Head of Support, I try to make sure everything runs smoothly, solving problems to provide the best support for NavoCloud users.. like you! 😀</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:sam@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                                <div style="border: 1px solid #0c6810" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../team/syke.gif" 
                         alt="Skye" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Skye</h3>
                    <p class="text-gray-200">Support Team</p>
                    <p class="text-gray-300 mt-2">Hey there! I'm here to give you a warm welcome and offer support. Just send me a DM or ping me within the discord!
</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:skye@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div  style="border: 1px solid green" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                       class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="../assets/imgs/just_clouds.png" 
                         alt="Beta" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Beta</h3>
                    <p class="text-gray-200"> Support Team & Graphic Designer</p>
                    <p class="text-gray-300 mt-2">I’m a staff team member here to ensure you have a great experience. If you have any questions or need assistance, just let me know.</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:beta@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>
                
                 <div  style="border: 1px solid green" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="https://cdn.discordapp.com/avatars/1134776400776274062/758dd2f5db660bba5d43da83fd51c323.png?size=1024" 
                         alt="Park" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Park</h3>
                    <p class="text-gray-200">Support Team</p>
                    <p class="text-gray-300 mt-2"> Hey there! I'm here to make things easy-breezy for you. Got questions or need a hand? Just give me a shout!</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:park@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div  style="border: 1px solid green" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="https://cdn.discordapp.com/avatars/1198511419713409124/f9c7b170d5ac9327b6f91843a282c002.png?size=1024" 
                         alt="Kreme" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Kreme</h3>
                    <p class="text-gray-200"> Support Team</p>
                    <p class="text-gray-300 mt-2">Feel free to reach out, and I’ll do my best to help you out! </p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:support@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div>

                <div  style="border: 1px solid green" class="border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
                    <img                      class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
 src="https://cdn.discordapp.com/avatars/1055654565514588230/7cf2758586c4d5ecd45a8769f1781adc.png?size=1024" 
                         alt="Kreme" 
                         class="w-32 h-32 rounded-full mb-4 mx-auto">
                    <h3 class="text-xl font-semibold mb-2 text-white">Zero</h3>
                    <p class="text-gray-200"> Support Team</p>
                    <p class="text-gray-300 mt-2"> I’m here to make your experience smoother. If you need assistance or have any concerns, just let me know.</p>
                    <div class="social-links mt-4">
                    <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
                    <a href="mailto:support@navocloudhosting.com" class="fas fa-envelope"></a>
                    </div>
                </div></div></div></div>

<h2 style="color: white" class="text-3xl font-bold text-center mb-8 team-title">
    Honorable <span>Mentions</span>
</h2>
<p class="text-center text-white mb-4">
    While not part of our official staff, these individuals are recognized for their invaluable contributions as community helpers.
</p>

<div class="flex flex-wrap justify-center gap-6 px-4 sm:px-0">
    <div style="border: 1px solid green" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
        <img class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
            src="../team/helpers/dawgtwist.png"
            alt="DawgTwist">
        <h3 class="text-xl font-semibold mb-2 text-white">DawgTwist</h3>
        <p class="text-gray-200">Helper</p>
        <p class="text-gray-300 mt-2">N/A</p>
        <div class="social-links mt-4">
            <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
        </div>
    </div>

    <div style="border: 1px solid green" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
        <img class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
            src="../team/helpers/vranik.png"
            alt="Vranik">
        <h3 class="text-xl font-semibold mb-2 text-white">Vranik</h3>
        <p class="text-gray-200">Helper</p>
        <p class="text-gray-300 mt-2">N/A</p>
        <div class="social-links mt-4">
            <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
        </div>
    </div>

    <div style="border: 1px solid green" class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 border border-blue-500 border-solid rounded-lg shadow-md p-6 my-6 text-center">
        <img class="w-32 h-32 rounded-full mb-4 mx-auto avatar-border"
            src="../team/helpers/deadpool.png"
            alt="DeadPool">
        <h3 class="text-xl font-semibold mb-2 text-white">DeadPool</h3>
        <p class="text-gray-200">Helper</p>
        <p class="text-gray-300 mt-2">N/A</p>
        <div class="social-links mt-4">
            <a href="https://navocloud.com/discord" class="fab fa-discord"></a>
        </div>
    </div>
</div>




                </div>
            </div>
        </div>
    </section>


    
    <div style="margin-top: 5vh">
<?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>	</div>
  </body>
</html>
