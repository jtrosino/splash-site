<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria - Splash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo-subtitle {
            color: white;
        }
        header.scrolled .logo-subtitle {
            color: white !important;
        }

        /* Gradient frame styling for gallery images */
        .gradient-frame {
            padding: 4px;
            border-radius: 0.75rem;
            background: linear-gradient(45deg, #ff0000, #ff9a00, #00d4ff, #ff00e0);
            background-size: 300% 300%;
            animation: gradientShift 5s ease infinite;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .gradient-frame img {
            border-radius: 0.5rem;
            width: 100%;
            height: auto;
            display: block;
        }
        .gradient-frame:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
    </style>
</head>
<body class="bg-white font-sans leading-relaxed tracking-wide flex flex-col">
    <!-- Header -->
    <?php include __DIR__ . '/partials/header.html'; ?>

    <section class="p-8 text-center">
        <h1 class="text-5xl font-bold text-purple-700 mb-6">Galeria</h1>
        <div class="gallery-grid">
            <?php
            $images = glob("gallery-images/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
            foreach ($images as $image) {
                $filename = basename($image);
                echo '<div class="gradient-frame">';
                echo '<img src="gallery-images/' . htmlspecialchars($filename) . '" class="gallery-image" alt="' . htmlspecialchars($filename) . '">';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
        &copy; 2025 Splash Assessoria, Ltda. Todos os direitos reservados.
    </footer>

    <script src="script.js"></script>
</body>
</html>
