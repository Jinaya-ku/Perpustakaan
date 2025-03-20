<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Perpustakaan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-white shadow-lg">
   <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between">
     <div class="flex space-x-4">
      <!-- Logo -->
      <div>
       <a class="flex items-center py-5 px-2 text-gray-700">
        <span class="font-bold text-xl">
         Perpustakaan
        </span>
       </a>
      </div>
      <!-- Primary Nav -->
      <div class="hidden md:flex items-center space-x-1">
       <a class="py-5 px-3 text-gray-700 hover:text-gray-900" href="#">
        Beranda
       </a>
       <a class="py-5 px-3 text-gray-700 hover:text-gray-900" href="#">
        Tentang
       </a>
       <a class="py-5 px-3 text-gray-700 hover:text-gray-900" href="#">
        Kontak
       </a>
      </div>
     </div>
     <!-- Secondary Nav -->
     <div class="hidden md:flex items-center space-x-1">
      <a class="py-2 px-3 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="{{ route('login') }}">
       Login
      </a>
      <a class="py-2 px-3 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="{{ route('register') }}">
       Register
      </a>
     </div>
     <!-- Mobile Button -->
     <div class="md:hidden flex items-center">
      <button class="mobile-menu-button">
       <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        </path>
       </svg>
      </button>
     </div>
    </div>
   </div>
  </nav>
  <!-- Mobile Menu -->
  <div class="mobile-menu hidden md:hidden">
   <a class="block py-2 px-4 text-sm hover:bg-gray-200" href="#">
    Beranda
   </a>
   <a class="block py-2 px-4 text-sm hover:bg-gray-200" href="#">
    Tentang
   </a>
   <a class="block py-2 px-4 text-sm hover:bg-gray-200" href="#">
    Kontak
   </a>
   <a class="block py-2 px-4 text-sm hover:bg-gray-200" href="{{ route('login') }}">
    Login
   </a>
   <a class="block py-2 px-4 text-sm hover:bg-gray-200" href="{{ route('register') }}">
    Register
   </a>
  </div>
  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-purple-400 to-blue-500 text-white py-20">
   <div class="max-w-7xl mx-auto px-4 text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">
     Selamat Datang di Perpustakaan
    </h1>
    <p class="text-xl md:text-2xl mb-8">
     Jelajahi dunia pengetahuan dan petualangan
    </p>
    <a class="py-3 px-6 bg-white text-purple-500 font-bold rounded-full" href="{{ route('login') }}">
     Mulai
    </a>
   </div>
  </section>
  <!-- Features Section -->
  <section class="py-20">
   <div class="max-w-7xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12">
     Fitur Kamu
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Illustration of a person reading a book online" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/SrSW4anmMTvfXM8cVOCqCCmzPfBPFx8Hcj8hh-WWsX0.jpg" width="100"/>
      <h3 class="text-2xl font-bold mb-2">
       Membaca Online
      </h3>
      <p class="text-gray-600">
       Anda dapat membaca semua buku di perpustakaan secara Online.
      </p>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Illustration of a person borrowing a book" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/hSTVcPS3kfRwoNBcpFaqQ-fp83KrfqUoSjFuUPXdqbc.jpg" width="100"/>
      <h3 class="text-2xl font-bold mb-2">
       Pinjam Buku
      </h3>
      <p class="text-gray-600">
       Anda dapat melakukan transaksi peminjaman secara online.
      </p>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Illustration of a person searching for books" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/avfElAZlqaDihJtixE2md-_bkPnoz5YGLzx9U95GQGQ.jpg" width="100"/>
      <h3 class="text-2xl font-bold mb-2">
       Cari Buku
      </h3>
      <p class="text-gray-600">
       Temukan buku favorit Anda dengan mudah menggunakan fitur pencarian kami.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-white shadow-lg">
   <div class="max-w-7xl mx-auto px-4 py-6">
    <div class="flex justify-between items-center">
     <div class="text-gray-700">
      © 2025 Perpustakaan. All rights reserved.
     </div>
     <div class="flex space-x-4">
      <a class="text-gray-700 hover:text-gray-900" href="#">
       Privacy Policy
      </a>
      <a class="text-gray-700 hover:text-gray-900" href="#">
       Terms of Service
      </a>
     </div>
    </div>
   </div>
  </footer>
  <script>
   const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
  </script>
 </body>
</html>
