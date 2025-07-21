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
  <main class="container mx-auto px-4 py-8 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-10 md:mt-16 flex-grow"> 
      <h1 class="text-2xl font-bold mb-4">Social Media Links</h1>
      <!-- Add your content here -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center space-x-4 mb-4">
          <i class="fab fa-facebook-f text-blue-600 text-3xl"></i>
          <h2 class="text-xl font-semibold text-gray-900">Facebook</h2>
          </div>
          <a class="mt-4 inline-block text-blue-600 font-semibold hover:underline" href="https://facebook.com/" target="_blank">Visit Facebook Profile</a>    
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center space-x-4 mb-4">
          <i class="fab fa-twitter text-blue-400 text-3xl"></i>
          <h2 class="text-xl font-semibold text-gray-900">Twitter</h2>
          </div>
          <a class="mt-4 inline-block text-blue-400 font-semibold hover:underline" href="https://twitter.com/" target="_blank">Visit Twitter Profile</a>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <div class="flex items-center space-x-4 mb-4">
          <i class="fab fa-instagram text-pink-600 text-3xl"></i>
          <h2 class="text-xl font-semibold text-gray-900">Instagram</h2>
          </div>
          <a class="mt-4 inline-block text-pink-400 font-semibold hover:underline" href="https://instagram.com/" target="_blank">Visit Instagram Profile</a>
        </div>
    </div>
  </main> 
  <footer class="bg-[#121212] mt-16">
    <div
      class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-8 flex flex-col md:flex-row justify-between items-center text-white text-sm font-normal">
      <p>© 2025 SecondLook. All rights reserved.</p>
      <ul class="flex space-x-6 mt-4 md:mt-0">
        <li><a class="hover:underline" href="<?= site_url('privacy') ?>">Privacy Policy</a></li>
        <li><a class="hover:underline" href="<?= site_url('terms') ?>">Terms of Service</a></li>
        <li><a class="hover:underline" href="<?= site_url('contact') ?>">Contact</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>