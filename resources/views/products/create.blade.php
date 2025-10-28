@extends('admin.layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="form-container">
    <h1>Formulario de Producto</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="product-name">Nombre del Producto</label>
            <input type="text" id="product-name" name="product-name" placeholder="Ingresa el nombre del producto" required>
        </div>

        <div class="form-group">
            <label for="product-price">Precio</label>
            <input type="number" step="0.01" id="product-price" name="product-price" placeholder="Ej: 199.99" required>
        </div>

        <div class="form-group">
            <label for="product-image">Imagen</label>
            <input type="file" id="product-image" name="product-image" accept="image/*">
        </div>

        <div class="form-group">
            <label for="product-brand">Marca</label>
            <input type="text" id="product-brand" name="product-brand" placeholder="Ej: Sony, Samsung..." required>
        </div>

        <div class="form-group">
            <label for="product-description">Descripción</label>
            <textarea id="product-description" name="product-description" rows="4" placeholder="Escribe una descripción del producto" required></textarea>
        </div>

        <button type="submit" class="btn-submit">Guardar Producto</button>
    </form>
</div>

@endsection

