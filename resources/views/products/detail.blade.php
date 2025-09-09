<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .product-container {
            display: flex;
            margin: 30px auto;
            width: 80%;
            max-width: 1200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .product-images {
            flex: 1;
            padding-right: 20px;
        }

        .main-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .thumbnail-images {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 32%;
            cursor: pointer;
            border-radius: 4px;
        }

        .product-details {
            flex: 1;
            padding-left: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .product-price {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .original-price {
            text-decoration: line-through;
            color: #aaa;
            font-size: 20px;
        }

        .discounted-price {
            font-size: 26px;
            color: #d32f2f;
            font-weight: bold;
        }

        .product-info {
            margin-bottom: 20px;
        }

        .product-info p {
            font-size: 16px;
            color: #555;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .add-to-cart {
            background-color: #f57c00;
            color: white;
        }

        .buy-now {
            background-color: #00796b;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

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

</body>
</html>
