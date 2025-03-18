<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <section id="register" class="py-20 bg-gray-100">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
            <div class="bg-gradient-to-r from-purple-400 to-blue-500 text-white text-center rounded-t-lg py-4">
                <h2 class="text-2xl font-bold">Halaman Register</h2>
        </div>
        <form class="space-y-6 mt-6">
            <div>
                <input type="text" placeholder="Full Name" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <input type="email" placeholder="Email Address" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <input type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <input type="password" placeholder="Confirm Password" class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>
            <div>
                <button type="submit" class="w-full py-2 bg-gradient-to-r from-purple-400 to-blue-500 text-white rounded-full font-bold">Register</button>
            </div>
        </form>
        <div class="text-center mt-6">
            <p class="text-gray-600">Already a member? <a href="{{route('login')}}" class="text-blue-500">Login now</a></p>
            </div>
        </div>
    </section>
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
</body>
</html>
