<!DOCTYPE html>
<html lang="en">

<?php 

$title = "UK Mental Health";
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
   
 <div class="flex-grow flex items-center justify-center"></div>
<div class="bg-blue-600 text-white text-sm py-2 px-4 text-center">
  <p>Need help but prefer texting? Text <span class="font-semibold">SHOUT</span> to <span class="font-semibold">85258</span> for 24/7 confidential help.</p>
</div>
<div class="bg-red-600 text-white text-sm py-2 px-4 text-center">
  <p>If you need someone, we are here! Please make a <span class="font-semibold">ticket</span> or <span class="font-semibold">DM</span> us!</p>
</div>

<div id="alert" class="hidden fixed top-4 right-4 bg-red-500 text-white py-2 px-4 rounded shadow-lg">
  We have detected your location as UK. You will now see UK support
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const url = window.location.href;
    if (url.endsWith("?uk")) {
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
    <a href="https://navocloud.com" class="text-blue-600 hover:underline">> Home </a>
  </nav>
  <h1 class="text-3xl font-bold mb-2 text-white">Navocloud: Mental Health and Wellbeing</h1>
  <p class="text-lg mb-2 text-white">Find information, support, and resources for mental health and social issues.</p>
  <p class="text-lg mb-2 text-white">Please note, this is more of a redirect, none of this content is ours, it is redirected to the correct MH sites.</p>
  <p class="text-lg mb-6 text-white">We can help, and redirect you in the correct place, please contact us!</p>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <a href="https://www.alcoholics-anonymous.org.uk" class="block p-4 border-2 border-blue-500 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Alcoholics Anonymous (Great Britain)</h2>
      <p class="text-white">A fellowship of individuals who share their experiences, strength, and hope to solve their common problem and help others recover from alcoholism. AA in Great Britain follows the 12 Step philosophy of recovery. Find more information and local meetings on their website.</p>
    </a>

    <a href="https://www.mind.org.uk" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Dual Diagnosis Support (UK)</h2>
      <p class="text-white">Support for individuals with both mental health issues and substance use disorders, promoting recovery through various support networks and recovery programs. Mind and Rethink Mental Illness can provide guidance on finding local services.</p>
    </a>
  
    <a href="https://www.bipolaruk.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Bipolar UK</h2>
      <p class="text-white">Provides support to individuals living with bipolar disorder through peer support groups, mentoring, and resources to help manage their condition.</p>
    </a>

    <a href="https://www.mind.org.uk" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Mind</h2>
      <p class="text-white">Mind offers advice, support, and information to anyone experiencing a mental health problem. They campaign to improve services and raise awareness.</p>
    </a>

    <a href="https://mentalhealthrecovery.com" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Mental Health Recovery</h2>
      <p class="text-white">Offers resources like the Wellness Recovery Action Plan (WRAP) for people in the recovery process, including articles, publications, and workshops.</p>
    </a>

    <a href="https://www.cptsdfoundation.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Complex PTSD Foundation</h2>
      <p class="text-white">Dedicated to supporting those who struggle with complex PTSD. Offers resources, educational programs, and peer support.</p>
    </a>

    <a href="https://www.rethink.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Rethink Mental Illness</h2>
      <p class="text-white">Provides expert, accredited advice and information to everyone affected by mental health problems. Offers support groups and advocacy services.</p>
    </a>

    <a href="https://www.nhs.uk/conditions/stress-anxiety-depression/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">NHS Mental Health Services</h2>
      <p class="text-white">Access mental health services provided by the NHS, including talking therapies, treatment options, and support for mental health conditions.</p>
    </a>

    <a href="https://www.nhs.uk/conditions/alcohol-misuse/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">NHS Alcohol Misuse Support</h2>
      <p class="text-white">Find information on how to get help if you’re struggling with alcohol misuse, including NHS services and support groups.</p>
    </a>

    <a href="https://www.nhs.uk/live-well/addiction-support/" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">NHS Addiction Support</h2>
      <p class="text-white">Access NHS support services for addiction, including resources for overcoming drug misuse and other addictive behaviors.</p>
    </a>

    <a href="https://www.samaritans.org" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Samaritans</h2>
      <p class="text-white">Provides 24/7 confidential emotional support for people experiencing feelings of distress or despair, including those that could lead to suicide.</p>
    </a>

    <a href="https://www.mentalhealth.org.uk" class="block p-4 border border-zinc-300 rounded-lg hover:bg-zinc-100">
      <h2 class="text-blue-600 font-semibold">Mental Health Foundation</h2>
      <p class="text-white">Works to prevent mental health problems, promotes good mental health, and helps people understand and sustain mental wellbeing.</p>
    </a>
  </div>

  <div style="background-color: blue; margin-top: 2vh" class="text-white p-4 rounded-lg">
    <h2 class="font-bold text-xl">If you're feeling overwhelmed or in crisis, it's important to reach out for help:</h2>
    <ul class="list-disc pl-5 mt-2">
      <li>If you need immediate support for your mental health or are having thoughts of suicide, please contact professionals right away.</li>
    </ul>
    <p class="mt-2">
      You can get urgent support by calling <span class="text-primary">999</span> or the NHS's non-emergency number <span class="text-primary">111</span> for advice and help.
    </p>
    <p class="mt-2">
      For confidential support 24/7, you can reach the Samaritans at <span class="text-primary">116 123</span>. You can also email them at <a href="mailto:jo@samaritans.org" class="text-primary underline">jo@samaritans.org</a>, or use their <a href="https://www.samaritans.org/how-we-can-help/contact-samaritan/chat-online/" class="text-primary underline">live chat service</a>.
    </p>
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
