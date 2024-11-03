<!DOCTYPE html>
<html lang="en">
 <?php 

$title = "Mental Health";
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

<body class="transition-all bg-neutral-900 flex flex-col min-h-screen">
  <!-- Main Content -->
  <div style="margin-top: 5vh" class="flex-grow flex items-center justify-center">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
      <a href="/mental-health/uk" class="bg-blue-500 p-6 rounded-lg shadow-lg text-center transition-transform transform box uk">
        <h2 class="text-xl font-semibold text-white">UK Mental Health Information</h2>
        <p class="mt-2 text-gray-200">Find resources and support for mental health in the UK.</p>
      </a>
      <a href="/mental-health/us" class="bg-red-500 p-6 rounded-lg shadow-lg text-center transition-transform transform box us">
        <h2 class="text-xl font-semibold text-white">US Mental Health Information</h2>
        <p class="mt-2 text-gray-200">Find resources and support for mental health in the US.</p>
      </a>
    </div>
  </div>

  <!-- Footer -->
  <div style="margin-top: 5vh" class="mt-20">
    <footer>
      <?php 
if (file_exists('./components/footer.php')) {
    include './components/footer.php';
} else {
    echo "footer.php not found!";
}

?>
  </footer>
  </footer>
</body>

<style>
 .box.uk:hover {
            background-color: #60a5fa;
        }

        .box.us:hover {
            background-color: #fca5a5; 
        }
   </style>


  </body>
</html>
