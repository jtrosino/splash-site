<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria - Splash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white font-sans leading-relaxed tracking-wide flex flex-col">
    <!-- Header -->
    <header class="bg-gradient-to-r from-purple-600 to-yellow-400 text-white p-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex flex-col items-center">
                <img src="assets/Spl@sh_balloon.png" alt="Splash Logo" class="w-32">
                <p class="text-base mt-1" style="color: #6b21a8;">A su casa creativa</p>
            </div>
            <nav class="space-x-4 text-lg font-semibold">
                <a href="index.html">Início</a>
                <a href="about.html">Sobre Nós</a>
                <a href="services.html">Serviços</a>
                <a href="contact.html">Contato</a>
                <a href="gallery.php" class="active">Galeria</a>
            </nav>
        </div>
    </header>

    <!-- Gallery Section -->
    <section class="p-8 text-center">
        <h1 class="text-4xl font-bold text-purple-700 mb-6">Galeria</h1>
        <div class="gallery-grid">
            <?php
            $images = glob("gallery-images/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
            foreach ($images as $image) {
                $filename = basename($image);
                echo '<img src="gallery-images/' . htmlspecialchars($filename) . '" class="gallery-image" alt="' . htmlspecialchars($filename) . '">';
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
        &copy; 2025 Splash. Todos os direitos reservados.
    </footer>

    <script src="script.js"></script>
</body>
</html>
