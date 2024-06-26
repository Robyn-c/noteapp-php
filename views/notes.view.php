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

  <main class="py-20 md:py-0 p-4 list-unstyled">
    <div class="py-6 flex flex-col gap-6">
      <ul>
      <?php foreach($notes as $note): ?>
        <li>
          <a class="text-blue-700" href="/note?id=<?= htmlspecialchars($note['id']) ?>">
            <?= $note['body'] ?>
        </li>
      <?php endforeach ?>
      </ul>
      <a href="/notes/create">
        <button class="px-4 py-2 bg-blue-500 rounded-md text-white">
          Create Note
        </button>  
      </a>
    </div>
  </main>
  <!-- Footer -->
  <?php require('partials/footer.php') ?>
</div>
</body>
</html>