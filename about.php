<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Splash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .logo-subtitle {
            color: white;
        }
        header.scrolled .logo-subtitle {
            color: white !important;
        }

        /* Gradient frame */
        .gradient-frame {
            padding: 4px;
            border-radius: 12px;
            background: linear-gradient(45deg, #ff0000, #ff9a00, #00d4ff, #ff00e0);
            background-size: 300% 300%;
            animation: gradientShift 4s ease infinite;
        }
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* About list */
        .about-list {
            max-width: 50rem;
            margin: 0 auto;
            padding: 1.5rem;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .about-list li {
            display: flex;
            align-items: flex-start;
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 1.4rem;
            gap: 0.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .about-list li:hover {
            transform: translateX(5px) scale(1.02);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        }

        /* Stylized @ icons */
        .about-icon {
            font-family: 'Arial Black', sans-serif;
            font-size: 1.6rem;
            flex-shrink: 0;
            transition: transform 0.3s ease, text-shadow 0.3s ease;
        }
        .about-icon:hover {
            transform: scale(1.3);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }
        .icon-blue { color: #007bff; }
        .icon-red { color: #ff0000; }
        .icon-green { color: #00cc44; }
        .icon-yellow { color: #ffcc00; }

        /* Gradient text animation */
        .gradient-text {
            background: linear-gradient(90deg, #6b21a8, #ec4899, #facc15, #6b21a8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: textGradientMove 6s linear infinite;
        }
        @keyframes textGradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Section background */
        .about-section {
            background: linear-gradient(to bottom, #faf5ff, #ffffff);
        }
    </style>
</head>
<body class="bg-white font-sans leading-relaxed tracking-wide flex flex-col">
    <!-- Header -->
    <?php include __DIR__ . '/partials/header.html'; ?>

    <section class="section-fade p-12 text-center about-section">
        <h1 class="text-5xl font-bold mb-8 gradient-text">Sobre Nós</h1>
        <div class="gradient-frame max-w-3xl mx-auto">
            <ul class="about-list">
                <li>
                    <span class="about-icon icon-blue">@</span>
                    A Splash é um estúdio criativo em São Paulo especializado em criação de conteúdo, posicionamento digital e estratégias de crescimento para influenciadores, creators e marcas. Somos mais do que uma produtora — somos a Casa Criativa de quem quer transformar sua visibilidade nas redes sociais em oportunidades reais.
                </li>
                <li>
                    <span class="about-icon icon-red">@</span>
                    Combinamos consultoria personalizada, assessoria digital para influenciadores, workshops imersivos e produção de vídeos profissionais para elevar a imagem e o conteúdo de quem quer se destacar no universo online. Atuamos com foco em autenticidade, criatividade e impacto real, criando estratégias sob medida para cada etapa da jornada digital.
                </li>
                <li>
                    <span class="about-icon icon-green">@</span>
                    Se você já compartilha sua rotina no Instagram, TikTok, YouTube ou outras redes, está na hora de transformar isso em uma carreira estruturada. A Splash te ajuda a sair do improviso e entrar no mercado com branding forte, conteúdo estratégico e suporte de ponta a ponta.
                </li>
                <li>
                    <span class="about-icon icon-yellow">@</span>
                    Aqui, sua presença digital ganha direção, seu conteúdo vira negócio e sua identidade se transforma em potência.
                </li>
            </ul>
        </div>
    </section>
                  
    <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
        &copy; 2025 Splash Assessoria, Ltda. Todos os direitos reservados.
    </footer>
    <script src="script.js"></script>
</body>
</html>
