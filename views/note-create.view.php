<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="h-full">
<div class="min-h-full flex flex-col">
    <!-- Navbar -->
    <?php require('partials/nav.php') ?>
    <!-- Heading -->
    <?php require('partials/heading.php') ?>

  <main class="py-20 md:px-6 md:py-6">
    
<form class="max-w-xl" method="POST">
  <div class="space-y-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
          <div class="mt-2">
            <textarea id="body" name="body" rows="3" class="block w-full resize-none rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
      </div>

  <div class="mt-4 flex items-center justify-end gap-x-6">
    <a href="/notes">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    </a>
    <button type="submit" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>


  </main>

  <!-- Footer -->
  <?php require('partials/footer.php') ?>
</div>
</body>
</html>