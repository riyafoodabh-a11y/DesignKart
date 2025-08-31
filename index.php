<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Business App Dynamic Sections</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="mug.css">
</head>

<body class="bg-gray-100">

  <?php include 'includes/header.php'; ?>

  <!-- Full Responsive Container -->
  <div class="container">

    <div id="view-app-content" class="tab-content active p-6 sm:p-8">

      <header class="hero-banner">
        <div class="absolute inset-0 z-0 overflow-hidden" id="rain-container"></div>

        <div class="relative z-10 logo-container mb-2">
          <svg class="logo-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#FFD700;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#FF8C00;stop-opacity:1" />
              </linearGradient>
              <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#1E3A8A;stop-opacity:1" />
              </linearGradient>
              <filter id="shadow">
                <feDropShadow dx="0" dy="4" stdDeviation="4" flood-color="rgba(0,0,0,0.2)" />
              </filter>
            </defs>

            <path d="M50 10 C35 10 25 20 25 35 V75 C25 90 35 90 50 90 C65 90 75 80 75 65 V25 C75 15 65 10 50 10 Z"
              fill="url(#gradient2)" filter="url(#shadow)" />
            <path d="M65 40 Q75 35 80 40 L85 55 L70 60 L65 45 Z" fill="url(#gradient1)"
              transform="rotate(-15, 75, 45)" />
            <circle cx="50" cy="80" r="7" fill="url(#gradient1)" filter="url(#shadow)" />
            <circle cx="35" cy="80" r="7" fill="url(#gradient1)" filter="url(#shadow)" />
          </svg>

          <span id="business-name-view" class="logo-text">DesignKart</span>
        </div>

        <p id="tagline-view" class="relative z-10 text-xl sm:text-2xl font-light opacity-90 drop-shadow-md">
          Welcome to the world of design and printing
        </p>
      </header>

    </div>

    <!-- Categories Section inside container -->
   <section class="categories p-6 sm:p-8">
  <div class="category-grid grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6">
    
    <a href="cup" class="category-card block">
      <img src="images/mug.webp" alt="Mugs">
      <h3>Mugs</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/shirt.webp" alt="T-Shirts">
      <h3>T-Shirts</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/pillow.webp" alt="Cushions">
      <h3>Cushions</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/fram.webp" alt="Photo Frames">
      <h3>Photo Frames</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/visiting.webp" alt="Visiting Cards">
      <h3>Visiting Cards</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/sticker.webp" alt="Sticker">
      <h3>Sticker</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/bottle.webp" alt="Bottles">
      <h3>Bottles</h3>
    </a>
    
    <a href="#" class="category-card block">
      <img src="images/paper.webp" alt="Wallpaper Flex">
      <h3>Wallpaper Flex</h3>
    </a>
    
  </div>
</section>


<section class="hero-slider">
  <div class="slider-container" id="slider">
    <div class="slide"><img src="images/hero2.webp" alt="Hero Image 2"></div>
    <div class="slide"><img src="images/hero3.webp" alt="Hero Image 3"></div>
    <div class="slide"><img src="images/hero1.webp" alt="Hero Image 1"></div>
    <div class="slide"><img src="images/hero4.webp" alt="Hero Image 4"></div>
  </div>

  <button class="nav-btn prev" id="prev">&#10094;</button>
  <button class="nav-btn next" id="next">&#10095;</button>
</section>


  </div>

</body>

<script>
  const rainContainer = document.getElementById("rain-container");

  function createRaindrop() {
    const drop = document.createElement("div");
    drop.classList.add("raindrop");

    const thickness = Math.random() * 2 + 1;
    const length = Math.random() * 15 + 10;

    drop.style.width = thickness + "px";
    drop.style.height = length + "px";
    drop.style.left = Math.random() * window.innerWidth + "px";
    drop.style.animationDuration = (Math.random() * 1 + 0.5) + "s";

    rainContainer.appendChild(drop);

    setTimeout(() => drop.remove(), 2000);
  }

  setInterval(createRaindrop, 10);

  const slider = document.getElementById("slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

let index = 0;
const totalSlides = slides.length;

function showSlide(i) {
  index = (i + totalSlides) % totalSlides;
  slider.style.transform = `translateX(${-index * 100}%)`;
}

function nextSlide() { showSlide(index + 1); }
function prevSlide() { showSlide(index - 1); }

let autoSlide = setInterval(nextSlide, 5000);

nextBtn.addEventListener("click", () => { nextSlide(); resetAutoSlide(); });
prevBtn.addEventListener("click", () => { prevSlide(); resetAutoSlide(); });

function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextSlide, 5000);
}

</script>

</html>
