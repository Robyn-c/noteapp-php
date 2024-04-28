<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full flex flex-col">
    <!-- Navbar -->
    <?php require('partials/nav.php') ?>
    <!-- Heading -->
    <?php require('partials/heading.php') ?>

  <main class="py-20 md:py-0">
  
      <a class="text-blue-800 font-bold" href="/notes">Go Back</a>

      <li class="mt-6">
          <?= htmlspecialchars($note['body']) ?>
      </li>
    
  </main>
  <!-- Footer -->
  <?php require('partials/footer.php') ?>
</div>
</body>
</html>