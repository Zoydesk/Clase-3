@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')


<div class="product-list-container">
    <h1>Lista de Productos</h1>

    <!-- Producto 1 -->
    <div class="product-item">
        <div class="product-details">
            <img src="https://via.placeholder.com/80" alt="Imagen Producto">
            <div class="product-info">
                <h3>Aquí aparecerá el nombre del producto</h3>
                <p><strong>Marca:</strong> Aquí aparecerá la marca</p>
                <p><strong>Descripción:</strong> Aquí aparecerá la descripción del producto</p>
                <div class="product-price">$2,699.900</div>
            </div>
        </div>
    </div>


    <!-- Si no hay productos -->
    <div class="no-products" style="display: none;">
        No hay productos para mostrar.
    </div>
</div>

@endsection