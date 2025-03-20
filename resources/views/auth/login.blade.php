<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-100">
    <section id="login" class="py-20 bg-gray-100">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <div class="bg-gradient-to-r from-purple-400 to-blue-500 text-white text-center rounded-t-lg py-4">
                <h2 class="text-2xl font-bold">Halaman Login</h2>
            </div>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="space-y-6 mt-6" method="POST" action="{{ route('loginAction') }}">
                @csrf
                <div>
                    <input type="username" name="username" placeholder="Username" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                <div>
                    <button type="submit" class="w-full py-2 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full font-bold">Login</button>
                </div>
            </form>
            <div class="text-center mt-6">
                <p class="text-gray-600">Tidak Punya Akun? <a href="{{route('register')}}" class="text-blue-500">Register sekarang</a></p>
            </div>
        </div>
    </section>
</body>
    <footer class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="text-gray-700">
                    &copy; 2025 Library. All rights reserved.
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
</html>
