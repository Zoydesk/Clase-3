<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
        }

        .form-group input[type="file"] {
            padding: 5px;
        }

        button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            background-color: #00796b;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Formulario de Producto</h1>
        <form action="#" method="POST">

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

</body>
</html>
