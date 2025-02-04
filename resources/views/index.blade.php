<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina cliente</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/eva-icons"></script>

</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="py-4 shadow-sm bg-white">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a href="#">
                <img src="https://picsum.photos/200/300" alt="Logo" class="w-16 h-16">
            </a>

            <div class="w-full max-w-xl relative flex">
                <div class="flex w-full relative">
                    <i data-eva="search" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <input type="text"
                        class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none hidden md:block"
                        placeholder="Buscar productos...">
                    <button
                        class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition hidden md:block">
                        Buscar
                    </button>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i data-eva="heart"></i>
                    </div>
                    <div class="text-xs leading-3">Favoritos</div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i data-eva="shopping-cart"></i>
                    </div>
                    <div class="text-xs leading-3">Carrito</div>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i data-eva="person"></i>
                    </div>
                    <div class="text-xs leading-3">Cuenta</div>
                </a>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4 flex">
            <div class="px-8 py-4 bg-primary md:flex items-center cursor-pointer relative group hidden">
                <span class="text-white">
                    <i data-eva="menu"></i>
                </span>
                <span class="capitalize ml-2 text-white hidden">All Categories</span>
            </div>

            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="#" class="text-gray-200 hover:text-white transition">Inicio</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Tienda</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Sobre nosotros</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Contactanos</a>
                </div>
                <a href="#" class="text-gray-200 hover:text-white transition">Login</a>
            </div>
        </div>
    </nav>
</body>

</html>
