<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Bersama</title>
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body-dashboard-main min-h-screen flex flex-col items-center justify-between text-white font-sans">

  <!-- Header -->
  <header class="w-full flex items-center justify-start p-6">
    <img src="assets/image/logo_white.png" alt="Logo Bersama" class="w-10 h-10 mr-2">
    <h1 class="text-xl font-bold">BERSAMA</h1>
  </header>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col items-center justify-center px-6 text-center">
    <h1 class="text-3xl font-bold mb-2">Selamat Datang</h1>
    <p class="text-sm mb-8 max-w-md">
        Dashboard Bersama, satu langkah menuju produktivitas lebih baik.
    </p>

    <!-- Cards -->
    <div class="flex flex-col md:flex-row gap-6">
      <!-- Card 1 -->
      <div class="bg-white/20 rounded-lg shadow-lg px-6 py-6 text-center w-64">
        <!-- Logo Lingkaran -->
        <div class="flex justify-center mb-4">
          <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
            <img src="assets/image/BMN-logo.png" alt="Logo Dunia Advertising" class="w-12 h-12">
          </div>
        </div>
        <h2 class="font-bold text-white text-lg">Dunia Advertising</h2>
        <a href="<?= base_url('/bintarajayapersada')?>">
          <button class="mt-4 px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white font-semibold">
            See Dashboard
          </button>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="bg-white/20 rounded-lg shadow-lg px-6 py-6 text-center w-64">
        <!-- Logo Lingkaran -->
        <div class="flex justify-center mb-4">
          <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
            <img src="assets/image/lgnav2fix.png" alt="Logo Bintara Jaya Persada" class="w-12 h-12">
          </div>
        </div>
        <h2 class="font-bold text-white text-lg">Bintara Jaya Persada</h2>
        <a href="<?= base_url('/bintarajayapersada')?>">
          <button class="mt-4 px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white font-semibold">
            See Dashboard
          </button>
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full bg-white/10 py-4 flex items-center justify-between px-6 text-sm">
    <span>&copy; Bersama 2025</span>
    <div class="flex gap-4">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
    </div>
  </footer>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
</body>
</html>
