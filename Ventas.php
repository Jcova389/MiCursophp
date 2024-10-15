<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Comida Rápida</title>  
</head>  
<body>  
    <h1>Menu de Comida Rápida</h1>  
    <?php  
        // Arreglo asociativo con el menú y precios  
        $menu = [  
            "Hamburguesa" => 5.00,  
            "Papas Fritas" => 2.50,  
            "Refresco" => 1.50,  
            "Pizza" => 8.00  
        ];  

        // Verificando si se ha enviado el formulario  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            $producto = $_POST['producto'];  
            $cantidad = (int)$_POST['cantidad'];  

            // Calcular el total a pagar  
            if (array_key_exists($producto, $menu)) {  
                $precio = $menu[$producto];  
                $total = $precio * $cantidad;  
                echo "<h2>Total a pagar por $cantidad $producto(s): \$" . number_format($total, 2) . "</h2>";  
            } else {  
                echo "<h2>Producto no encontrado.</h2>";  
            }  
        }  
    ?>  

    <form method="post">  
        <label for="producto">Seleccione un producto:</label>  
        <select name="producto" id="producto">  
            <?php foreach ($menu as $nombre => $precio): ?>  
                <option value="<?php echo $nombre; ?>"><?php echo $nombre . " - \$" . number_format($precio, 2); ?></option>  
            <?php endforeach; ?>  
        </select>  

        <label for="cantidad">Cantidad:</label>  
        <input type="number" name="cantidad" id="cantidad" min="1" value="1">  

        <input type="submit" value="Calcular Total">  
    </form>  
</body>  
</html> 

