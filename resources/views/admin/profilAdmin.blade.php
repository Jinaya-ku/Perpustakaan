<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Profil - Perpustakaan
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
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="{{route('admin.dashboard')}}">
       <i class="fas fa-tachometer-alt mr-3">
       </i>
       Dashboard
      </a>
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="kelola_buku.html">
       <i class="fas fa-book mr-3">
       </i>
       Kelola Buku
      </a>
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="kelola_buku.html">
        <i class="fas fa-users mr-3">
        </i>
        Kelola User
       </a>
      <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="peminjaman.html">
       <i class="fas fa-book-reader mr-3">
       </i>
       Peminjaman
      </a>
     </nav>
    </div>
    <div class="mb-10">
     <hr class="border-t border-white my-4 mx-4"/>
     <a class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white" href="{{route('admin.profil')}}">
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
     Profil Admin
    </h1>
    <div class="bg-white p-8 rounded-lg shadow-lg">
     <div class="flex items-center mb-6">
      <img alt="Profile picture of the user" class="w-24 h-24 rounded-full mr-4" src="https://placehold.co/100x100"/>
      <div>
       <h2 class="text-2xl font-bold">
        John Doe
       </h2>
       <p class="text-gray-600">
        john@example.com
       </p>
      </div>
     </div>
     <form>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       <div>
        <label class="block text-gray-700">
         Nama
        </label>
        <input class="w-full mt-2 p-2 border rounded" type="text" value="John Doe"/>
       </div>
       <div>
        <label class="block text-gray-700">
         Email
        </label>
        <input class="w-full mt-2 p-2 border rounded" type="email" value="john@example.com"/>
       </div>
       <div>
        <label class="block text-gray-700">
         Password
        </label>
        <input class="w-full mt-2 p-2 border rounded" placeholder="********" type="password"/>
       </div>
       <div>
        <label class="block text-gray-700">
         Konfirmasi Password
        </label>
        <input class="w-full mt-2 p-2 border rounded" placeholder="********" type="password"/>
       </div>
      </div>
      <div class="mt-6">
       <button class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full" type="submit">
        Simpan Perubahan
       </button>
      </div>
     </form>
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
