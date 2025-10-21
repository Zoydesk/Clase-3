@extends('layouts.app')

@section('title', 'Producto')

@section('content')

 <div class="product-container">
    <div class="product-images">
        <!-- Imagen del producto -->
        <img src="https://via.placeholder.com/300x200" alt="Imagen del producto" class="main-image">
        <div class="thumbnail-images">
            <!-- Imágenes pequeñas o miniaturas -->
            <img src="https://via.placeholder.com/100x60" alt="Miniatura 1">
            <img src="https://via.placeholder.com/100x60" alt="Miniatura 2">
            <img src="https://via.placeholder.com/100x60" alt="Miniatura 3">
        </div>
    </div>

    <div class="product-details">
        <!-- Nombre del producto -->
        <h1>Aquí aparecerá el nombre del producto</h1>
        
        <!-- Precio del producto -->
        <div class="product-price">
            <span class="original-price">Aquí aparecerá el precio original</span>
            <span class="discounted-price">Aquí aparecerá el precio con descuento</span>
        </div>

        <!-- Descripción y marca -->
        <div class="product-info">
            <p><strong>Aquí aparecerá la marca del producto</strong></p>
            <p><strong>Aquí aparecerá la descripción del producto</strong></p>
        </div>
        
        <!-- Botones de acción -->
        <button class="add-to-cart">Agregar al carrito</button>
        <button class="buy-now">Comprar ahora</button>
    </div>
</div>

@endsection