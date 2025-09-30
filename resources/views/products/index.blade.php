<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .product-list-container {
            width: 80%;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            padding: 15px 0;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-details {
            display: flex;
            flex: 1;
        }

        .product-details img {
            width: 80px;
            height: auto;
            margin-right: 20px;
            border-radius: 6px;
        }

        .product-info {
            flex: 1;
        }

        .product-info h3 {
            font-size: 18px;
            color: #333;
            margin: 0;
        }

        .product-info p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .product-price {
            color: #d32f2f;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .no-products {
            text-align: center;
            font-size: 18px;
            color: #888;
            margin-top: 20px;
        }

    </style>
</head>
<body>

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

        <!-- Producto 2 -->
        <div class="product-item">
            <div class="product-details">
                <img src="https://via.placeholder.com/80" alt="Imagen Producto">
                <div class="product-info">
                    <h3>Aquí aparecerá el nombre del producto</h3>
                    <p><strong>Marca:</strong> Aquí aparecerá la marca</p>
                    <p><strong>Descripción:</strong> Aquí aparecerá la descripción del producto</p>
                    <div class="product-price">$3,199.900</div>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="product-item">
            <div class="product-details">
                <img src="https://via.placeholder.com/80" alt="Imagen Producto">
                <div class="product-info">
                    <h3>Aquí aparecerá el nombre del producto</h3>
                    <p><strong>Marca:</strong> Aquí aparecerá la marca</p>
                    <p><strong>Descripción:</strong> Aquí aparecerá la descripción del producto</p>
                    <div class="product-price">$1,599.900</div>
                </div>
            </div>
        </div>

        <!-- Si no hay productos -->
        <div class="no-products" style="display: none;">
            No hay productos para mostrar.
        </div>
    </div>

</body>
</html>
