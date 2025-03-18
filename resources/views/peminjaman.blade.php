<!-- resources/views/borrow.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Form Peminjaman Buku</h1>

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="mb-6">
                <h2 class="text-xl font-semibold">Detail Buku</h2>
                <div class="mt-2">
                    <p><strong>Judul:</strong> {{ $buku->judul }}</p>
                    <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                    <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                    <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
                </div>
            </div>

            <form action="{{ route('borrow.store', $buku) }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_peminjaman" value="{{ date('Y-m-d') }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                           readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Peminjam</label>
                    <input type="text" value="{{ Auth::user()->name }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                           readonly>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('home') }}"
                       class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </a>
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Konfirmasi Peminjaman
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
