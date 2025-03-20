<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Dashboard - Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                    <a href="dashboard.html" class="text-white text-2xl font-bold">Perpustakaan</a>
                </div>
                <nav class="mt-10">
                    <a href="dashboard.html" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white">
                        <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                    </a>
                    <a href="kelola_buku.html" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white">
                        <i class="fas fa-book mr-3"></i> Kelola Buku
                    </a>
                    <a href="peminjaman.html" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white">
                        <i class="fas fa-book-reader mr-3"></i> Peminjaman
                    </a>
                </nav>
            </div>
            <div class="mb-10">
                <hr class="border-t border-white my-4 mx-4">
                <a href="{{route('petugas.profil')}}" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white">
                    <i class="fas fa-user mr-3"></i> Profil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="block py-3 px-4 rounded transition duration-200 hover:bg-purple-500 text-white">
                    @csrf
                    <button type="submit">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </button>
                </form>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-10 content content-expanded" id="mainContent">
            <button class="mb-4 py-2 px-4 bg-gray-200 text-gray-700 rounded-full" id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-book text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">150</h2>
                            <p class="text-gray-600">Total Buku</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">75</h2>
                            <p class="text-gray-600">Total Pengguna</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-book-reader text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold">30</h2>
                            <p class="text-gray-600">Buku Dipinjam</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Daftar Buku -->
            <div class="mt-10">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold">Daftar Buku</h2>
                    <a href="tambah_buku.html" class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full">
                        <i class="fas fa-plus mr-2"></i> Tambah Buku
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-200 text-gray-600">
                            <tr>
                                <th class="py-3 px-4 text-left">Judul Buku</th>
                                <th class="py-3 px-4 text-left">Penulis</th>
                                <th class="py-3 px-4 text-left">Kategori</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr>
                                <td class="py-3 px-4">Buku A</td>
                                <td class="py-3 px-4">Penulis A</td>
                                <td class="py-3 px-4">Kategori A</td>
                                <td class="py-3 px-4">Tersedia</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Buku B</td>
                                <td class="py-3 px-4">Penulis B</td>
                                <td class="py-3 px-4">Kategori B</td>
                                <td class="py-3 px-4">Dipinjam</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Buku C</td>
                                <td class="py-3 px-4">Penulis C</td>
                                <td class="py-3 px-4">Kategori C</td>
                                <td class="py-3 px-4">Tersedia</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Buku D</td>
                                <td class="py-3 px-4">Penulis D</td>
                                <td class="py-3 px-4">Kategori D</td>
                                <td class="py-3 px-4">Dipinjam</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Buku E</td>
                                <td class="py-3 px-4">Penulis E</td>
                                <td class="py-3 px-4">Kategori E</td>
                                <td class="py-3 px-4">Tersedia</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Table Daftar Peminjaman -->
            <div class="mt-10">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold">Daftar Peminjaman</h2>
                    <a href="tambah_buku.html" class="py-2 px-4 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full">
                        <i class="fas fa-plus mr-2"></i> Tambah Peminjaman
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-200 text-gray-600">
                            <tr>
                                <th class="py-3 px-4 text-left">Nama Peminjam</th>
                                <th class="py-3 px-4 text-left">Judul Buku</th>
                                <th class="py-3 px-4 text-left">Tanggal Pinjam</th>
                                <th class="py-3 px-4 text-left">Tanggal Kembali</th>
                                <th class="py-3 px-4 text-left">Status</th>
                                <th class="py-3 px-4 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr>
                                <td class="py-3 px-4">John Doe</td>
                                <td class="py-3 px-4">Buku A</td>
                                <td class="py-3 px-4">2023-01-01</td>
                                <td class="py-3 px-4">2023-01-10</td>
                                <td class="py-3 px-4">Dipinjam</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Jane Smith</td>
                                <td class="py-3 px-4">Buku B</td>
                                <td class="py-3 px-4">2023-01-05</td>
                                <td class="py-3 px-4">2023-01-15</td>
                                <td class="py-3 px-4">Dikembalikan</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Alice Johnson</td>
                                <td class="py-3 px-4">Buku C</td>
                                <td class="py-3 px-4">2023-01-10</td>
                                <td class="py-3 px-4">2023-01-20</td>
                                <td class="py-3 px-4">Dipinjam</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Bob Brown</td>
                                <td class="py-3 px-4">Buku D</td>
                                <td class="py-3 px-4">2023-01-15</td>
                                <td class="py-3 px-4">2023-01-25</td>
                                <td class="py-3 px-4">Dipinjam</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Charlie Davis</td>
                                <td class="py-3 px-4">Buku E</td>
                                <td class="py-3 px-4">2023-01-20</td>
                                <td class="py-3 px-4">2023-01-30</td>
                                <td class="py-3 px-4">Dikembalikan</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <a href="#" class="text-red-500 hover:text-red-700 ml-2">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
