@extends('layout.app')

@section('title', 'Crear Producto')

@section('content')
    <div class="form-container">
        <h1>Formulario de Producto</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="product-name">Nombre del Producto:</label>
                <input type="text" id="product-name" name="product-name" placeholder="Ingresa el nombre del producto" required>
            </div>

            <div class="form-group">
                <label for="product-price">Precio del Producto:</label>
                <input type="text" id="product-price" name="product-price" placeholder="Ingresa el precio del producto" required>
            </div>

            <div class="form-group">
                <label for="product-image">Imagen del Producto:</label>
                <input type="file" id="product-image" name="product-image" accept="image/*">
            </div>

            <div class="form-group">
                <label for="product-brand">Marca del Producto:</label>
                <input type="text" id="product-brand" name="product-brand" placeholder="Ingresa la marca del producto" required>
            </div>

            <div class="form-group">
                <label for="product-description">Descripción del Producto:</label>
                <textarea id="product-description" name="product-description" rows="4" placeholder="Escribe una descripción del producto" required></textarea>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
