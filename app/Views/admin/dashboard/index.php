
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title> Company Profile</title>
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
  <main class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 mt-10 md:mt-16 flex-grow">
    <div class="md:flex md:space-x-20">
      <h1 class="text-4xl md:text-5xl font-normal max-w-xs md:max-w-sm leading-[1.1]">
        Looking for preloved items?<br />Snap It, Love It, SecondLook
      </h1>
      <div class="mt-8 md:mt-0 max-w-md">
        <div class="flex justify-between items-center mb-2">
          <p class="text-xs font-semibold text-[#121212]">About SecondLook</p>
          <p class="text-xs font-semibold text-[#121212]">-EST 2025</p>
        </div>
        <p class="text-m text-[#121212] font-normal leading-5">
            SecondLook is an image-based preloved buying and selling platform that prioritizes
            convenience and trust. We help you rediscover the value of gently used items through clear and informative visual displays. With the concept of “look once more, find new opportunities”, SecondLook 
            is the place for anyone who wants to shop or sell smarter and more sustainably.
        </p>
      </div>
    </div>
    <div
      class="mt-10 md:mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 max-w-7xl"
    >
      <div class="relative group cursor-pointer">
        <img
          alt="Soejiwo Tedjo Statue in Belgium Art Center, a tall dark stone statue with a pointed top"
          class="w-full h-auto object-cover"
          height="400"
          src="https://storage.googleapis.com/a1aa/image/0d30a794-2cd2-472c-830a-d63438c748a9.jpg"
          width="600"
        />
        <div
          class="absolute bottom-4 left-4 text-white text-sm font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
        >
          Belgium Art Center<br /><span class="text-xs font-normal"
            >Soejiwo Tedjo Statue</span
          >
        </div>
      </div>
      <div class="relative group cursor-pointer">
        <img
          alt="Kamplo Alamanda in Spain Art Center, a large stone sculpture of a face with a white gallery interior image overlay"
          class="w-full h-auto object-cover"
          height="400"
          src="https://storage.googleapis.com/a1aa/image/077fdd15-3b18-4ccf-ffc5-4efd92b3b536.jpg"
          width="600"
        />
        <div
          class="absolute bottom-4 left-4 bg-white bg-opacity-90 px-3 py-2 rounded w-[calc(100%-2rem)]"
        >
          <p class="text-[10px] font-semibold text-gray-600 mb-1">
            Spain Art Center Video
          </p>
          <p class="text-sm font-semibold text-black mb-1">Kamplo Alamanda</p>
          <p class="text-xs font-normal text-gray-600">By Huangying</p>
        </div>
        <button
          aria-label="Go tour"
          class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black bg-opacity-60 text-white text-xs font-semibold px-4 py-1 rounded"
        >
          Go tour
        </button>
      </div>
      <div class="relative group cursor-pointer">
        <img
          alt="Koes Amerrido Statue in Belgium Art Center, a dark stone statue of a face with a hand on the chin"
          class="w-full h-auto object-cover"
          height="400"
          src="https://storage.googleapis.com/a1aa/image/db986893-b4f3-48b6-a53d-c42a751d9789.jpg"
          width="600"
        />
        <div
          class="absolute bottom-4 left-4 text-white text-sm font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
        >
          Belgium Art Center<br /><span class="text-xs font-normal"
            >Koes Amerrido Statue</span
          >
        </div>
      </div>
    </div>
    <!-- Charts Section -->
    <section
      class="mt-16 max-w-7xl bg-white rounded-lg shadow p-6 grid grid-cols-1 md:grid-cols-2 gap-8"
    >
      <div>
        <h2 class="text-xl font-semibold mb-4 text-gray-900">Bar Chart</h2>
        <div class="w-full h-72 md:h-96">
          <canvas id="barChart" class="w-full h-full"></canvas>
        </div>
      </div>
      <div>
        <h2 class="text-xl font-semibold mb-4 text-gray-900">Area Chart</h2>
        <div class="w-full h-72 md:h-96">
          <canvas id="areaChart" class="w-full h-full"></canvas>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-[#121212] mt-16">
    <div
      class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-8 flex flex-col md:flex-row justify-between items-center text-white text-sm font-normal"
    >
      <p>© 2024 Re.Art. All rights reserved.</p>
      <ul class="flex space-x-6 mt-4 md:mt-0">
        <li><a class="hover:underline" href="<?= site_url('privacy') ?>">Privacy Policy</a></li>
        <li><a class="hover:underline" href="<?= site_url('terms') ?>">Terms of Service</a></li>
        <li><a class="hover:underline" href="<?= site_url('contact') ?>">Contact</a></li>
      </ul>
    </div>
  </footer>

  <script>
    async function fetchChartData() {
      // In real CI4 app, you would fetch this data from a controller endpoint via AJAX
      return new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            labels: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
            ],
            barDatasets: [
              {
                label: "Artworks Sold",
                data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 20],
                backgroundColor: "#2563EB",
                borderRadius: 4,
                maxBarThickness: 40,
              },
              {
                label: "Visitors",
                data: [30, 25, 40, 45, 50, 55, 60, 65, 70, 75],
                backgroundColor: "#F59E0B",
                borderRadius: 4,
                maxBarThickness: 40,
              },
            ],
            areaDatasets: [
              {
                label: "Artworks Sold",
                data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 20],
                borderColor: "#2563EB",
                backgroundColor: "rgba(37, 99, 235, 0.3)",
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
              },
              {
                label: "Visitors",
                data: [30, 25, 40, 45, 50, 55, 60, 65, 70, 75],
                borderColor: "#F59E0B",
                backgroundColor: "rgba(245, 158, 11, 0.3)",
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
              },
            ],
          });
        }, 800);
      });
    }

    async function renderCharts() {
      const chartData = await fetchChartData();

      const barCtx = document.getElementById("barChart").getContext("2d");
      new Chart(barCtx, {
        type: "bar",
        data: {
          labels: chartData.labels,
          datasets: chartData.barDatasets,
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          interaction: {
            mode: "nearest",
            intersect: false,
          },
          plugins: {
            legend: {
              labels: {
                font: {
                  family: "Inter, sans-serif",
                  weight: "600",
                  size: 14,
                },
                color: "#111827",
              },
            },
            tooltip: {
              enabled: true,
              backgroundColor: "#111827",
              titleFont: { family: "Inter, sans-serif", weight: "600", size: 14 },
              bodyFont: { family: "Inter, sans-serif", size: 12 },
            },
          },
          scales: {
            x: {
              ticks: {
                font: {
                  family: "Inter, sans-serif",
                  size: 12,
                  weight: "600",
                },
                color: "#374151",
              },
              grid: {
                display: false,
              },
              stacked: false,
            },
            y: {
              beginAtZero: true,
              ticks: {
                font: {
                  family: "Inter, sans-serif",
                  size: 12,
                  weight: "600",
                },
                color: "#374151",
              },
              grid: {
                color: "#E5E7EB",
              },
              stacked: false,
            },
          },
        },
      });

      const areaCtx = document.getElementById("areaChart").getContext("2d");
      new Chart(areaCtx, {
        type: "line",
        data: {
          labels: chartData.labels,
          datasets: chartData.areaDatasets,
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          interaction: {
            mode: "nearest",
            intersect: false,
          },
          plugins: {
            legend: {
              labels: {
                font: {
                  family: "Inter, sans-serif",
                  weight: "600",
                  size: 14,
                },
                color: "#111827",
              },
            },
            tooltip: {
              enabled: true,
              backgroundColor: "#111827",
              titleFont: { family: "Inter, sans-serif", weight: "600", size: 14 },
              bodyFont: { family: "Inter, sans-serif", size: 12 },
            },
          },
          scales: {
            x: {
              ticks: {
                font: {
                  family: "Inter, sans-serif",
                  size: 12,
                  weight: "600",
                },
                color: "#374151",
              },
              grid: {
                display: false,
              },
            },
            y: {
              beginAtZero: true,
              ticks: {
                font: {
                  family: "Inter, sans-serif",
                  size: 12,
                  weight: "600",
                },
                color: "#374151",
              },
              grid: {
                color: "#E5E7EB",
              },
            },
          },
        },
      });
    }

    renderCharts();
  </script>
</body>
</html>