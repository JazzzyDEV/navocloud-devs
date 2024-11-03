
<!DOCTYPE html>
<html lang="en">
 <?php 

$title = "US Mental Health";
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
 

  <div style="margin-top: 5vh" class="flex-grow flex items-center justify-center"></div>
<div class="bg-blue-600 text-white text-sm py-2 px-4 text-center">
  <p>Need help but prefer texting? Text <span class="font-semibold">SHOUT</span> to <span class="font-semibold">85258</span> for 24/7 confidential help.</p>
</div>
<div class="bg-red-600 text-white text-sm py-2 px-4 text-center">
  <p>If you need someone, we are here! Please make a <span class="font-semibold">ticket</span> or <span class="font-semibold">DM</span> us!</p>
</div>

<div id="alert" class="hidden fixed top-4 right-4 bg-red-500 text-white py-2 px-4 rounded shadow-lg">
  We have detected your location as US. You will now see UK support.
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const url = window.location.href;
    if (url.endsWith("?us")) {
      const alertBox = document.getElementById("alert");
      alertBox.classList.remove("hidden");
      setTimeout(() => {
        alertBox.classList.add("hidden");
      }, 5000);
    }
  });
</script>

<div class="container mx-auto p-6">
  <nav class="mb-4">
    <a href="https://navocloud.com" class="text-white hover:underline">> Home </a>
  </nav>
  <h1 class="text-3xl font-bold mb-2 text-white">Navocloud: Mental Health and Wellbeing</h1>
  <p class="text-lg mb-2 text-white">Find information, support, and resources for mental health and social issues.</p>
  <p class="text-lg mb-2 text-white">Please note, this is more of a redirect, none of this content is ours, it is redirected to the correct MH sites.</p>
  <p class="text-lg mb-6 text-white">We can help, and redirect you in the correct place, please contact us!</p>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <a href="https://www.aa.org" class="block p-4 border-2 border-blue-500 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Alcoholics Anonymous</h2>
      <p class="text-white">An international self-help organization that uses the 12 Step philosophy of recovery to help people with alcohol use problems stay sober and to help others become sober. Find more information and local meetings on their website.</p>
    </a>

    <a href="https://www.draonline.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Dual Recovery Anonymous</h2>
      <p class="text-white">Supports self-help for individuals with substance use and mental illness (co-occurring disorders), encouraging a 12 Step recovery and healthy support networks.</p>
    </a>

    <a href="https://www.dbsalliance.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Depression and Bipolar Support Alliance (DBSA)</h2>
      <p class="text-white">Provides hope, help, and support to improve the lives of people living with depression and/or bipolar disorder through peer-based, recovery-oriented services and resources.</p>
    </a>

    <a href="http://www.mentalhealth-media.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Mental Health Media</h2>
      <p class="text-white">Improves understanding of mental illness through video-based programs for people with psychiatric conditions, their families, and mental health professionals.</p>
    </a>

    <a href="https://mentalhealthrecover.com" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Mental Health Recovery</h2>
      <p class="text-white">Offers resources like the Wellness Recovery Action Plan (WRAP) for people in the recovery process, including articles, publications, and workshops.</p>
    </a>

    <a href="https://www.ptsd.va.gov/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Center for PTSD</h2>
      <p class="text-white">Dedicated to research and education on trauma and PTSD, providing a variety of resources and information about how to find help.</p>
    </a>

    <a href="https://www.power2u.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Empowerment Center</h2>
      <p class="text-white">A provider of mental health information, programs, and materials with a focus on recovery. Offers referrals, newsletters, and audiovisual materials.</p>
    </a>

    <a href="https://niaaa.nih.gov/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Institute on Alcohol Abuse and Alcoholism</h2>
      <p class="text-white">Leads efforts on alcohol use disorder, providing research findings, information, and educational materials to improve public health.</p>
    </a>

    <a href="https://www.drugabuse.gov/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Institute on Drug Abuse</h2>
      <p class="text-white">Advances the science of drug use and addiction, offering helpful information and educational materials for public health improvement.</p>
    </a>

    <a href="https://www.nimh.nih.gov" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Institute of Mental Health</h2>
      <p class="text-white">Engaged in research for better understanding, treatment, and prevention of mental disorders, offering educational materials and free publications on psychiatric disorders.</p>
    </a>

    <a href="https://www.mhselfhelp.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">National Mental Health Consumers’ Self-Help Clearinghouse</h2>
      <p class="text-white">Provides information about psychiatric disorders, technical support for self-help groups, and a quarterly newsletter for consumers. Offers Spanish language services.</p>
    </a>

    <a href="https://www.psychrehabassociation.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-white font-semibold">Psychiatric Rehabilitation Association and Foundation</h2>
      <p class="text-white">Advances the availability and practice of psychiatric rehabilitation, providing supports for individuals with serious mental illness to recover.</p>
    </a>
  </div>

  <div style="background-color: blue; margin-top: 2vh" class="text-white p-4 rounded-lg">
    <h2 class="font-bold text-xl">If you're feeling overwhelmed or in crisis, it's important to reach out for help:</h2>
    <ul class="list-disc pl-5 mt-2">
      <li>If you need immediate support for your mental health or are having thoughts of suicide, please contact professionals right away.</li>
    </ul>
    <p class="mt-2">
      You can get urgent support by calling the National Suicide Prevention Lifeline at <span class="text-white">988</span>. This number will connect you with a trained counselor who can provide free, confidential support 24/7.
    </p>
    <p class="mt-2">
      You can also text <span class="text-white">HELLO</span> to <span class="text-white">741741</span> to connect with a trained crisis counselor via the Crisis Text Line.
    </p>
    <p class="mt-2">
      For additional support, you can reach the Substance Abuse and Mental Health Services Administration (SAMHSA) helpline at <span class="text-white">1-800-662-HELP (4357)</span> or visit their <a href="https://www.samhsa.gov/find-help/national-helpline" class="text-white underline">website</a> for more resources.
    </p>
  </div>
</div>

</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
  <div class="flex flex-col items-center bg-white p-6 border border-gray-200 rounded-lg shadow-lg">
    <p class="text-6xl mb-4">📊</p>
    <p class="text-4xl font-bold text-purple-600">1 in 4</p>
    <p class="text-gray-700 mt-2">people will experience a mental health problem each year</p>
  </div>
  <div class="flex flex-col items-center bg-white p-6 border border-gray-200 rounded-lg shadow-lg">
    <p class="text-6xl mb-4">❤️</p>
    <p class="text-4xl font-bold text-purple-600">85%</p>
    <p class="text-gray-700 mt-2">of people believe mental health is as important as physical health</p>
  </div>
  <div class="flex flex-col items-center bg-white p-6 border border-gray-200 rounded-lg shadow-lg">
    <p class="text-6xl mb-4">🤐</p>
    <p class="text-4xl font-bold text-purple-600">60%</p>
    <p class="text-gray-700 mt-2">of people with mental health issues don’t talk about their feelings</p>
  </div>
</div>

<div class="flex justify-center items-center mt-10">
  <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 text-center">
    <p class="text-lg font-semibold text-gray-700">
      Made with <span class="text-red-500">❤️</span> by Paech, HH & Jazzzy
    </p>
  </div>
</div>



  <div style="margin-top: 5vh" class="mt-20">
<footer>
      <?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>
  </footer>  </footer>
    
    

<script>
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                document.title = 'You matter and WE CARE! ❤️';
            } else {
                document.title = 'NavoCloud - Mental Health';
            }
        });
    </script>

  </body>
</html>
