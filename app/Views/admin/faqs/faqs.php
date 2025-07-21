<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title> SecondLook | Steal Your Look!</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>
<body class="bg-white text-black flex flex-col min-h-screen">
  <header class="bg-[#121212]">
    <nav
      class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-between h-14"
    >
      <div class="text-white font-semibold text-lg">SecondLook</div>
      <ul class="hidden md:flex space-x-8 text-white text-sm font-normal">
        <li><a class="hover:underline" href="<?= site_url('home') ?>">Home</a></li>
        <li><a class="hover:underline" href="<?= site_url('how') ?>">How It Works</a></li>
        <li><a class="hover:underline" href="<?= site_url('team') ?>">Our Team</a></li>
        <li><a class="hover:underline" href="<?= site_url('social') ?>">Social Media</a></li>
        <li><a class="hover:underline" href="<?= site_url('faqs') ?>">FAQs</a></li>
      </ul>
      <a
        class="hidden md:inline-block bg-[#2563EB] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1e4bb8] transition"
        href="<?= site_url('contact') ?>"
        >Contact Us</a
      >
    </nav>
  </header>
</html>