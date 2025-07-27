<!DOCTYPE html>
<?php echo "<!-- Using cadastre.php -->"; ?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastre-se - Splash</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
  <style>
    .logo-subtitle {
      color: white;
    }
    header.scrolled .logo-subtitle {
      color: white !important;
    }

    /* Gradient frame for the form */
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

    .form-card {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      max-width: 800px;
      margin: 0 auto;
    }

    .form-header {
      font-size: 1.2rem;
      color: #4b0082;
      margin-bottom: 1rem;
    }

    .label-icon {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
      transition: color 0.3s ease;
    }
    .required-star {
      color: red;
      margin-left: 4px;
    }

    .label-icon i {
      color: #888;
      font-size: 1.5rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .input-wrapper:focus-within i {
      color: #6b21a8;
      transform: scale(1.15);
    }

    .form-container input,
    .form-container textarea {
      width: 100%;
      padding: 1rem;
      margin-bottom: 1rem;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1.1rem;
      color: #333;
      transition: border 0.3s, box-shadow 0.3s;
    }

    .form-container input:focus,
    .form-container textarea:focus {
      border-color: #ec4899;
      box-shadow: 0 0 8px rgba(236, 72, 153, 0.5);
      outline: none;
    }

    .form-container .error-border {
      border-color: red !important;
    }

    .divider {
      border-top: 1px solid #ddd;
      margin: 1.5rem 0;
    }

    .form-container button {
      background: linear-gradient(90deg, #6b21a8, #ec4899);
      color: white;
      padding: 0.85rem 2rem;
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      transition: box-shadow 0.3s ease, transform 0.2s;
    }

    .form-container button:hover {
      box-shadow: 0 0 15px rgba(236, 72, 153, 0.8);
      transform: translateY(-1px);
    }

    .error-message {
      color: red;
      font-size: 0.9rem;
      margin-top: -0.5rem;
      margin-bottom: 0.5rem;
      display: none;
    }

    /* Toast success message */
    .toast-message {
      position: fixed;
      top: 20px;
      right: -300px;
      background: #10b981;
      color: white;
      padding: 1rem 1.5rem;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      font-weight: bold;
      transition: right 0.5s ease, opacity 0.5s ease;
      z-index: 1000;
      opacity: 0;
    }
    .toast-message.show {
      right: 20px;
      opacity: 1;
    }

    @media (min-width: 768px) {
      .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem 1.5rem;
      }
    }

    .shake {
      animation: shake 0.3s;
    }

    @keyframes shake {
      0% { transform: translateX(0); }
      25% { transform: translateX(-4px); }
      50% { transform: translateX(4px); }
      75% { transform: translateX(-4px); }
      100% { transform: translateX(0); }
    }

    .gradient-text {
      background: linear-gradient(90deg, #6b21a8, #ec4899, #facc15);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans leading-relaxed tracking-wide flex flex-col">
  <!-- Header -->
  <?php include __DIR__ . '/partials/header.html'; ?>


  <!-- Cadastre Section -->
  <section class="section-fade p-12 text-center bg-white">
    <h1 class="text-5xl font-bold mb-4 gradient-text">Cadastre-se</h1>
    <p class="form-header text-gray-700">Preencha o formulário abaixo e entraremos em contato com você.</p>
    <div class="gradient-frame mt-6">
      <div class="form-card">
<?php if (!empty($_GET['msg'])): ?>
    <div class="form-response">
        <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
<?php endif; ?>
        <form class="form-container text-left" action="send_email.php" method="POST" novalidate>
>
          <div class="form-grid">
            <div class="input-wrapper">
              <label for="nome" class="label-icon"><i class="fas fa-user"></i> Nome <span class="required-star">*</span></label>
              <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required />
              <p class="error-message" id="error-nome">Por favor, preencha o nome.</p>
            </div>
            <div class="input-wrapper">
              <label for="email" class="label-icon"><i class="fas fa-envelope"></i> E-mail <span class="required-star">*</span></label>
              <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required />
              <p class="error-message" id="error-email">Por favor, preencha um e-mail válido.</p>
            </div>
            <div class="input-wrapper">
              <label for="telefone" class="label-icon"><i class="fas fa-phone"></i> Telefone</label>
              <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" />
            </div>
            <div class="input-wrapper">
              <label for="whatsapp" class="label-icon"><i class="fab fa-whatsapp"></i> WhatsApp</label>
              <input type="tel" id="whatsapp" name="whatsapp" placeholder="Digite seu número de WhatsApp" />
            </div>
          </div>

          <div class="divider"></div>

          <div class="input-wrapper">
            <label for="mensagem" class="label-icon"><i class="fas fa-comment-dots"></i> Mensagem <span class="required-star">*</span></label>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem" required></textarea>
          </div>
          <p class="error-message" id="error-mensagem">Por favor, escreva sua mensagem.</p>

          <div class="text-center mt-4">
            <button type="submit">Enviar Mensagem</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Toast Message -->
  <div id="toast" class="toast-message">Mensagem enviada com sucesso!</div>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 text-center p-4 mt-12">
    &copy; 2025 Splash Assessoria, Ltda. Todos os direitos reservados.
  </footer>

  <script>
    const form = document.getElementById("cadastreForm");
    const toast = document.getElementById("toast");

    const requiredFields = [
      { input: document.getElementById("nome"), error: document.getElementById("error-nome") },
      { input: document.getElementById("email"), error: document.getElementById("error-email") },
      { input: document.getElementById("mensagem"), error: document.getElementById("error-mensagem") },
    ];

    // Hide error message on focus
    requiredFields.forEach(field => {
      field.input.addEventListener("focus", () => {
        field.error.style.display = "none";
        field.input.classList.remove("error-border", "shake");
      });
    });

    form.addEventListener("submit", function (event) {
      event.preventDefault();
      let valid = true;

      requiredFields.forEach(field => {
        if (field.input.value.trim() === "" || 
            (field.input.type === "email" && !/\S+@\S+\.\S+/.test(field.input.value))) {
          field.error.style.display = "block";
          field.input.classList.add("error-border", "shake");
          valid = false;
        }
      });

      if (valid) {
        form.reset();
        showToast();
      }
    });

    function showToast() {
      toast.classList.add("show");
      setTimeout(() => {
        toast.classList.remove("show");
      }, 3000);
    }
  </script>
  <script src="script.js"></script>
</body>
</html>
