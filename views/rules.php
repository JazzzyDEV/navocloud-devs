<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Server Rules";
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

<body class="text-white">


<section style="background-color: #171717" class="text-white py-12">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-8">Server Rules</h2>
    <div class="space-y-8">
      
      <!-- Rule Block -->
      <div>
        <h3 class="text-xl font-semibold">Respect Everyone</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Treat all members with respect and kindness.</li>
          <li>No harassment, bullying, or personal attacks.</li>
          <li>No discrimination based on race, gender, sexuality, religion, nationality, or any other characteristic.</li>
        </ul>
      </div>

      <!-- Rule Block -->
      <div>
        <h3 class="text-xl font-semibold">No Hate Speech or Offensive Content</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>No racism, sexism, homophobia, transphobia, or any form of hate speech.</li>
          <li>Avoid posting any offensive, obscene, or inappropriate content.</li>
        </ul>
      </div>

      <!-- Additional Rule Blocks -->
      <div>
        <h3 class="text-xl font-semibold">No Spam or Self-Promotion</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>No spamming messages, links, or images.</li>
          <li>Do not promote other Discord servers, websites, or services without permission from the moderators.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Follow Channel-Specific Rules</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Each channel has a specific purpose. Ensure your posts are relevant to the channel topic.</li>
          <li>Read pinned messages in each channel for detailed guidelines.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Use Appropriate Language</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Keep the language and tone civil.</li>
          <li>Avoid excessive swearing or inappropriate language.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">No Illegal Activities</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Do not engage in or promote any illegal activities.</li>
          <li>Respect intellectual property rights and do not share pirated content.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">No Exploiting or Hacking</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Do not attempt to exploit, hack, or gain unauthorized access to any servers or services.</li>
          <li>Report any vulnerabilities or security issues to the moderators.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Use Hosting Services Responsibly</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Use the free hosting services ethically and responsibly.</li>
          <li>Do not abuse resources or engage in activities that could harm the servers or other users.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Clarify Resource Abuse</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>This includes unauthorized bots, excessive idle time, and any non-permitted activity.</li>
          <li>Please use resources fairly to ensure service quality for everyone.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Security and Privacy Considerations</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Keep your account secure by enabling 2FA, and avoid sharing personal information.</li>
          <li>Do not dox or share private information about other users without their consent.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Report Issues</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>If you encounter any issues or witness rule-breaking, report it to the moderators immediately.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Follow Discord's Terms of Service</h3>
        <ul class="list-disc ml-6 mt-2">
          <li>Adhere to Discord’s Terms of Service and Community Guidelines at all times.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Moderation and Enforcement</h3>
        <ul class="list-disc ml-6 mt-2">
          <li><strong>Warnings:</strong> First-time offenses may result in a warning.</li>
          <li><strong>Temporary Mutes or Bans:</strong> Repeated or severe violations can lead to temporary mutes or bans.</li>
          <li><strong>Permanent Bans:</strong> Serious or continuous violations may result in a permanent ban from the server.</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Clarify Moderation Hierarchy</h3>
        <p class="ml-6 mt-2">Moderators have specific responsibilities. If you feel a decision was unfair, you may appeal after a permanent ban. Moderators are available to help with specific issues, so feel free to reach out.</p>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Encourage Positive Engagement</h3>
        <p class="ml-6 mt-2">Engage positively within the community! Help others, join discussions, and contribute to a supportive environment.</p>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Using Self-Bots</h3>
        <p class="ml-6 mt-2">Using self-bots on our server is strictly prohibited. Penalties:</p>
        <ul class="list-disc ml-6 mt-2">
          <li>Timed out (24 hours) | First offense</li>
          <li>Kicked with a warning | Second offense</li>
          <li>Banned with an appeal option in 2 weeks | Third offense</li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-semibold">Alt Account Misuse</h3>
        <p class="ml-6 mt-2">Knowingly or unknowingly using or helping with alt accounts within both Discord and hosting services will result in immediate action as outlined in our TOS. Immediate suspension on the main account (if known) and a permanent ban from our server and hosting services.</p>
      </div>

    </div>
  </div>
</section>

    
  
    <?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>
  </body>
</html>