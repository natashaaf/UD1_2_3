<!-- Crea un único archivo productos.php.  
  Define un array asociativo $catalogo con al menos 4 productos donde la clave sea el nombre del producto (ej. "Teclado", "Ratón", "Monitor", "Portátil") 
y el valor sea su precio (float).   
Crea un formulario con método GET que tenga un campo de texto busqueda y un número precioMax.   
Al recibir los datos por $_GET (comprobando con isset()), recorre $catalogo con foreach ($catalogo as $nombre => $precio) y muestra solo los productos cuyo precio sea menor o igual a precioMax.   
Muestra también el texto buscado por el usuario escapado correctamente con htmlspecialchars().
 -->

<?php
// Array asociativo: "producto" => precio
$catalogo =  [
    "teclado" => 29.90,
    "raton" => 30,
    "monitor" => 20,
    "portatil" => 10
];

// Array vacío para guardar los productos filtrados
$resultado = [];

// Comprueba que llegan ambos parámetros GET y precioMax no está vacío
if(isset($_GET['busqueda'], $_GET['precioMax']) && $_GET['precioMax'] !== ''){
    $precioMax = $_GET['precioMax']; // Límite máximo de precio

    // Recorre clave ($nombre) y valor ($precio) del catálogo
    foreach ($catalogo as $nombre => $precio){   
        // Filtra productos con precio menor o igual a precioMax
        if($precio <= $precioMax){
            $resultado[$nombre] = $precio;
        }
    }
}
?>

<html>
    <head> 

    </head>
    <body>
        <!-- Envía datos por URL (GET) al mismo archivo (action="") -->
        <form action="" method="GET">
            <label>Busqueda <input type="text" name="busqueda"></label>
            <label>Numero: <input type="number" name="precioMax"></label>
            <button type="submit"> Buscar</button>
        </form>
    </body>

    <!-- Muestra texto de búsqueda escapado contra XSS si no está vacío -->
    <?php if(!empty($_GET['busqueda'])): ?>
        <p>Busqueda: <?php echo htmlspecialchars($_GET['busqueda'], ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <!-- Imprime cada producto filtrado -->
    <?php foreach ($resultado as $nombre => $precio): ?>
            <p><?php echo $nombre . " - " . $precio; ?></p>
    <?php endforeach; ?>

</html>