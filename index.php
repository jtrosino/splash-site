<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Splash - Início</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css" />
  <style>
    .logo-subtitle {
      color: white;
    }
    header.scrolled .logo-subtitle {
      color: white !important;
    }

    /* Gradient border style for images */
    .gradient-frame {
      padding: 4px;
      border-radius: 0.75rem;
      background: linear-gradient(45deg, #ff0000, #ff9a00, #00d4ff, #ff00e0);
      background-size: 300% 300%;
      animation: gradientShift 5s ease infinite;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    @keyframes gradientShift {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    .gradient-frame img {
      border-radius: 0.5rem;
      display: block;
      width: 100%;
      height: auto;
    }
    .gradient-frame:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
    }

    /* Hero logo styling */
    .hero-logo {
      animation: popAnimation 4s ease-in-out infinite;
      filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
    }
    @keyframes popAnimation {
      0%,
      100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
    }
  </style>
</head>
<body class="bg-white font-sans leading-relaxed tracking-wide flex flex-col">
  <!-- Header (restored to match other pages) -->
  <?php include __DIR__ . '/partials/header.html'; ?>


  <!-- Hero Section (large + animated) -->
  <section class="section-fade relative bg-gradient-to-r from-purple-600 to-yellow-400 text-white p-12 text-center">
    <div class="text-center">
      <img src="assets/splash_logo.png" alt="Splash Logo" class="mx-auto mb-0 w-72 md:w-[22rem] hero-logo" />
      <p class="text-4xl md:text-5xl font-semibold -mt-1 mb-20 logo-subtitle">A SUA CASA CRIATIVA</p>
    </div>
    <h1 class="text-5xl md:text-6xl font-bold mb-10 text-center">
      A Splash é onde seu conteúdo começa a virar história.
    </h1>
    <div class="text-center">
      <a href="cadastre.php" class="bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-full text-xl font-semibold pulse-btn">
        Cadastre-se!
      </a>
    </div>
  </section>

  <!-- Como Funciona Section -->
  <section class="section-fade p-8 bg-gray-100">
    <h2 class="text-5xl font-bold text-center mb-10 text-purple-700">Como Funciona</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="gradient-frame"><img src="assets/Feed - Splash - 133.png" alt="Passo 1" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 134.png" alt="Passo 2" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 135.png" alt="Passo 3" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 136.png" alt="Passo 4" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 137.png" alt="Passo 5" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 138.png" alt="Passo 6" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 139.png" alt="Passo 7" class="shadow-lg" /></div>
      <div class="gradient-frame"><img src="assets/Feed - Splash - 140.png" alt="Passo 8" class="shadow-lg" /></div>
    </div>
  </section>

  <!-- Call to Action for Gallery -->
  <section class="text-center p-8 bg-white">
    <a href="gallery.php" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-full text-xl font-semibold pulse-btn-purple">
      Veja nossa Galeria
    </a>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
    &copy; 2025 Splash Assessoria, Ltda. Todos os direitos reservados.
  </footer>

  <script src="script.js"></script>
</body>
</html>

