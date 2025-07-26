<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Splash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo-subtitle {
            color: white;
        }
        header.scrolled .logo-subtitle {
            color: white !important;
        }
        .gradient-frame {
            padding: 4px;
            border-radius: 12px;
            background: linear-gradient(45deg, #ff0000, #ff9a00, #00d4ff, #ff00e0);
            background-size: 300% 300%;
            animation: gradientShift 5s ease infinite;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-white font-sans leading-relaxed tracking-wide flex flex-col">
    <!-- Header -->
    <?php include __DIR__ . '/partials/header.html'; ?>

    <section class="section-fade p-12">
        <h1 class="text-5xl font-bold text-purple-700 mb-6 text-center">Nossos Serviços</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="gradient-frame">
                <div class="p-6 bg-gradient-to-br from-yellow-400 via-orange-400 to-red-500 text-white rounded-lg shadow-xl">
                    <h2 class="text-2xl font-bold mb-2">Consultoria Digital</h2>
                    <p>Estratégias personalizadas para potencializar seu perfil online.</p>
                </div>
            </div>

            <div class="gradient-frame">
                <div class="p-6 bg-gradient-to-br from-pink-500 via-fuchsia-600 to-purple-700 text-white rounded-lg shadow-xl">
                    <h2 class="text-2xl font-bold mb-2">Produção de Conteúdo</h2>
                    <p>Ensaios fotográficos, vídeos e identidade visual profissional.</p>
                </div>
            </div>

            <div class="gradient-frame">
                <div class="p-6 bg-gradient-to-br from-blue-500 via-teal-400 to-green-500 text-white rounded-lg shadow-xl">
                    <h2 class="text-2xl font-bold mb-2">Workshops</h2>
                    <p>Treinamentos práticos e presenciais para criadores de conteúdo.</p>
                </div>
            </div>
        </div>
    </section>
                     
    <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
        &copy; 2025 Splash Assessoria, Ltda. Todos os direitos reservados.
    </footer>
    <script src="script.js"></script>
</body>
</html>
