<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TiendaOnline')</title>

    {{-- TailwindCSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Estilos personalizados --}}
    <style>
        .form-container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Contenido dinámico --}}
    <main class="min-h-screen py-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Script menú responsive --}}
    <script>
        const toggleBtn = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");
            });
        }
    </script>
</body>
</html>
