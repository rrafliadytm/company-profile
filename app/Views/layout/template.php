<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title> <?= $title ?></title>
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
  <script src="<?= base_url('assets/js/chart-script.js'); ?>"></script>
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>

<body class="bg-white text-black flex flex-col min-h-screen">
  <!-- Header Section -->
  <header class="bg-[#121212]" style="position: sticky; top: 0; z-index: 50;">
    <nav
      class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex items-center justify-between h-14"
    >
      <div class="text-white font-semibold text-lg"><a href="<?= site_url('home') ?>">SecondLook</a></div>
      <ul class="hidden md:flex space-x-9 text-white text-sm font-normal">
        <li><a class="hover:underline" href="<?= site_url('home') ?>">Home</a></li>
        <li><a class="hover:underline" href="<?= site_url('how') ?>">How It Works</a></li>
        <li><a class="hover:underline" href="<?= site_url('team') ?>">Our Team</a></li>
        <li><a class="hover:underline" href="<?= site_url('faqs') ?>">FAQs</a></li>
      </ul>
      <ul class="hidden md:flex space-x-9 text-white text-sm font-normal">
        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f text-white text-2xl"></i></a></li>
        <li><a href="https://instagram.com/"><i class="fab fa-instagram text-white text-2xl"></i></i></a></li>
        <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in text-white text-2xl"></i></a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Render Halaman/Section Content -->
  <?= $this->renderSection('content'); ?>

  <!-- Footer Section -->
  <footer class="bg-[#121212] mt-16">
    <div
      class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-8 flex flex-col md:flex-row justify-between items-center text-white text-sm font-normal"
    >
      <p>© 2025 SecondLook. All rights reserved.</p>
      <ul class="flex space-x-6 mt-4 md:mt-0">
        <li><a class="hover:underline" href="<?= site_url('privacy') ?>">Privacy Policy</a></li>
        <li><a class="hover:underline" href="<?= site_url('terms') ?>">Terms of Service</a></li>
        <li><a class="hover:underline" href="<?= site_url('contact') ?>">Contact</a></li>
      </ul>
    </div>
  </footer>
</body>
