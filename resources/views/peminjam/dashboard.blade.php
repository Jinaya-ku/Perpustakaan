<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Perpustakaan - Peminjaman Buku
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   .sidebar {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-closed {
            transform: translateX(-100%);
        }
        .content {
            transition: margin-left 0.3s ease-in-out;
        }
        .content-expanded {
            margin-left: 0;
        }
        .content-collapsed {
            margin-left: 16rem;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-64 bg-gradient-to-r from-purple-400 to-blue-500 h-screen shadow-lg fixed flex flex-col justify-between sidebar sidebar-closed" id="sidebar">
    <div>
     <div class="p-6">
      <a class="text-white text-2xl font-bold">
       Perpustakaan
      </a>
     </div>
     <nav class="mt-10">
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="dashboard.html">
       <i class="fas fa-tachometer-alt mr-3">
       </i>
       Dashboard
      </a>
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="peminjaman.html">
       <i class="fas fa-book-reader mr-3">
       </i>
       Peminjaman
      </a>
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="baca_online.html">
       <i class="fas fa-laptop mr-3">
       </i>
       Baca Online
      </a>
     </nav>
    </div>
    <div class="mb-10">
     <hr class="border-t border-white my-4 mx-4"/>
     <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="profil.html">
      <i class="fas fa-user mr-3">
      </i>
      Profil
     </a>
     <form action="{{ route('logout') }}" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" method="POST">
      @csrf
      <button type="submit">
       <i class="fas fa-sign-out-alt mr-3">
       </i>
       Logout
      </button>
     </form>
    </div>
   </div>
   <!-- Main Content -->
   <div class="flex-1 p-10 content content-expanded" id="mainContent">
    <button class="mb-4 py-2 px-4 bg-gray-200 text-gray-700 rounded-full" id="toggleSidebar">
     <i class="fas fa-bars">
     </i>
    </button>
    <h1 class="text-3xl font-bold mb-6">
     Peminjaman Buku
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book A" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku A
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis A
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori A
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book B" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku B
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis B
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori B
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book C" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku C
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis C
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori C
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book D" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku D
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis D
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori D
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book E" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku E
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis E
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori E
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
     <div class="bg-white p-8 rounded-lg shadow-lg">
      <img alt="Cover of Book F" class="mx-auto mb-4" src="https://placehold.co/300x400"/>
      <h3 class="text-2xl font-bold mb-2">
       Buku F
      </h3>
      <p class="text-gray-600 mb-4">
       Penulis: Penulis F
      </p>
      <p class="text-gray-600 mb-4">
       Kategori: Kategori F
      </p>
      <a class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" href="#">
       Pinjam
      </a>
     </div>
    </div>
   </div>
  </div>
  <script>
   document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-closed');
            document.getElementById('mainContent').classList.toggle('content-expanded');
            document.getElementById('mainContent').classList.toggle('content-collapsed');
        });
  </script>
 </body>
</html>
