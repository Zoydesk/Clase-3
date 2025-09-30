<nav class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="#" class="text-2xl font-bold text-blue-600">TiendaOnline</a>
      </div>

      <!-- Links - Desktop -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#" class="text-gray-700 hover:text-blue-600 transition">Inicio</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition">Productos</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition">Ofertas</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition">Categorías</a>
      </div>

      <!-- Iconos -->
      <div class="flex items-center space-x-4">
        <button class="hidden md:block text-gray-700 hover:text-blue-600">🔍</button>
        <button class="text-gray-700 hover:text-blue-600">👤</button>
        <button class="relative text-gray-700 hover:text-blue-600">
          🛒
          <span
            class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center"
          >
            3
          </span>
        </button>
        <button class="md:hidden text-gray-700" id="menu-toggle">☰</button>
      </div>
    </div>

    <!-- Menú móvil -->
    <div class="md:hidden border-t py-4 hidden" id="mobile-menu">
      <div class="flex flex-col space-y-3">
        <a href="#" class="text-gray-700 hover:text-blue-600 transition py-2">Inicio</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition py-2">Productos</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition py-2">Ofertas</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition py-2">Categorías</a>
      </div>
    </div>
  </div>
</nav>
