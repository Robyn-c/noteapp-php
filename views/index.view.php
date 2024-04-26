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

  <main class="m-auto py-20 md:py-0">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-y-12  items-center">
      <div class="mx-auto max-w-xl text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left ">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Boost your productivity.</h1>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl mt-2">Start using our app today.</h2>
          <p class="mt-6 text-lg leading-8 text-gray-800">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
            <a href="#" class="rounded-md bg-gray-800 px-3.5 py-2.5 text-sm font-semibold text-gray-200 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-800">Learn more <span aria-hidden="true">→</span></a>
          </div>
      </div>   
      <img class="h-[350px]" src="/assets/notes-blue.svg" />
    </div>
  </main>
  <!-- Footer -->
  <?php require('partials/footer.php') ?>
</div>
</body>
</html>