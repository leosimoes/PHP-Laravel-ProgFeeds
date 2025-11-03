<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ProgFeeds</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

<!-- Header -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Left: Logo -->
        <div class="text-2xl font-bold text-blue-600">
            ProgFeeds
        </div>

        <!-- Right: Auth Buttons -->
        <div class="space-x-4">
            @guest
                <a href="#" class="text-sm text-blue-500 hover:underline">Login</a>
            @else
                <form method="POST" action="#" class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow container mx-auto px-4 py-10">
    <h1 class="text-3xl font-semibold mb-4">ProgFeeds</h1>
    <p class="text-lg text-gray-700">...</p>
</main>

<!-- Footer -->
<footer class="bg-white border-t py-4">
    <div class="container mx-auto px-4 text-center text-sm text-gray-500">
        2025 ProgFeeds - Built with PHP, Laravel and Tailwindcss
    </div>
</footer>

</body>
</html>
