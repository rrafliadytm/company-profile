<?= $this->extend('layout/template') ?>

<?= $this->Section('content') ?>
  <!-- Content Section -->
  <main class="max-w-7l px-6 sm:px-8 lg:px-12 mt-10 md:mt-16 flex-grow">
    <div class="md:flex md:space-x-20 md:items-center md:justify-center">
      <h1 class="text-4xl md:text-5xl font-normal max-w-xs md:max-w-sm leading-[1.1]">
        Looking For Preloved Fashion Items?<br />Snap It, Love It, SecondLook!
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
        <a
        class="hidden md:inline-block bg-[#2563EB] text-white text-sm font-semibold px-6 py-3 rounded-full hover:bg-[#1e4bb8] transition mt-5"
        href="<?= site_url('contact') ?>"
        >Contact Us</a
        >
      </div>
    </div>
    
    <div class="mx-auto mt-8 sm:mt-8 max-w-7xl md:flex md:justify-center">
    
    </div>
    
    <!-- Carousel Section -->
      <!-- Carousel Header -->
      <div class="mt-10 xl:mt-24 max-w-7xl mx-auto">
        <div class="md:flex md:space-x-20 md:items-center md:justify-center">
          <h1 class="text-4xl md:text-4xl font-semibold max-w-xs md:max-w-sm leading-[1.1]">
            Featured Products
          </h1>
        </div>
        <!-- Carousel -->
        <div
          class="mt-7 sm:mt-7 max-w-7xl mx-auto flex overflow-x-auto snap-x snap-mandatory"
          style="scrollbar-width: none; -ms-overflow-style: none;"
        >
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Dinosaur Jr T-Shirt, a vintage band tee displayed on a mannequin with a white gallery interior image overlay"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-1.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Dinosaur Jr Black T-Shirt<br /><span class="text-xl font-normal"
                  >IDR 500.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Vintage Baggy Jeans, a pair of denim jeans displayed on a wooden floor with a soft light"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-2.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Vintage Baggy Jeans<br /><span class="text-xl font-normal"
                  >IDR 350.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Ikhras White T-Shirt, a minimalist white t-shirt displayed on a simple background"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-3.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Ikhras White T-Shirt<br /><span class="text-xl font-normal"
                  >IDR 500.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Scowl Black T-Shirt, a stylish black t-shirt displayed on a mannequin with a modern gallery background"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-4.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Scowl Black T-Shirt<br /><span class="text-xl font-normal"
                  >IDR 500.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Vintage Black Work Jacket, a classic black jacket displayed on a mannequin with a soft light"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-5.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Vintage Black Work Jacket<br /><span class="text-xl font-normal"
                  >IDR 900.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Vintage Green Cardigan, a cozy green cardigan displayed on a mannequin with a soft light"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-6.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Vintage Green Cardigan <br /><span class="text-xl font-normal"
                  >IDR 300.000,00</span
                >
              </div>
            </div>
          </div>
    
          <div class="snap-center flex-shrink-0 w-full md:w-1/4 p-4 hover:scale-105 transition-transform duration-300">
              <div class="relative group cursor-pointer">
              <img
                alt="Blue Gingham Pattern Flannel Shirt, a stylish flannel shirt displayed on a mannequin with a soft light"
                class="w-full h-auto object-cover"
                height="400"
                src="<?= base_url('assets') ?>/img/product-display-7.jpg"
                width="600"
              />
              <div
                class="absolute bottom-4 left-4 text-white text-l font-semibold bg-black bg-opacity-60 px-3 py-1 rounded"
              >
                Blue Gingham Pattern Flannel Shirt<br /><span class="text-xl font-normal"
                  >IDR 400.000,00</span
                >
              </div>
            </div>
          </div>
    
        </div>
      </div>
    <!-- End Carousel Section -->

    <!-- Charts Section -->
    <section
      class="mt-16 max-w-7xl mx-auto bg-white rounded-lg shadow p-6 grid grid-cols-1 md:grid-cols-2 gap-8"
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

  <?= $this->endSection(); ?>
  
  
  
