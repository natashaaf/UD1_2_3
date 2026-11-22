<!-- Ejercicio 3: 
Cookies (Crear, leer y eliminar) (UD3)Crea un archivo preferencia_color.php.   
Si no existe la cookie colorFondo, el fondo de la página (<body>) será blanco (#ffffff). 
Si existe, aplicará el color guardado en $_COOKIE['colorFondo'] (escapado con htmlspecialchars()).   
Incluye un formulario POST con un <input type="color" name="color"> y un botón "Guardar color" 
que cree la cookie colorFondo con duración de 1 hora (time() + 3600) y redirija a preferencia_color.php con header('Location: ...') y exit().   
ncluye un segundo formulario POST con un botón "Restablecer color" (name="borrar") que elimine la cookie (fecha en el pasado) y
redirija de nuevo a la misma página.    -->

<?php
//1. Valor inicial por defecto si aún no existe la cookie
$colorFondo = '#ffffff';

//2. Procesar el primer formulario POST (Guardar color)
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])){
    // Crea la cookie 'colorFondo' valida durante 1h (3600 segundos)
    setcookie('colorFondo', $_POST['color'], time() + 3600, '/');

    //Redirige de nuevo a preferencia_color.php
    header('Location: preferencia_color.php');
    exit();
}

//3. Procesar el segundo formulario POST (Restablecer color -> name= borrar)
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrar'])){
    //Borra la cookie poniendo una fecha de expiración en el pasado
    setcookie('colorFondo', '', time() - 3600, '/');

    //Redirige de nuevo a preferencia_color.php
    header("Location: preferencia_color.php");
    exit();
}

//4. Leer la cookie si existe y escaparla con htmlspecialchars() por seguridad 
if(isset($_COOKIE['colorFondo'])){
    $colorFondo = htmlspecialchars($_COOKIE['colorFondo'], ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
//5. Aplicar el color de fondo en <body>
<body style="background-color: <?php echo $colorFondo; ?> ">

    //6. Primer formulario POST para elegir y guardar el color
    <form action="" method="POST">
        <label>Color de fondo: <input type="color" name="color"></label>
        <button type="submit">Guardar color</button>
    </form>

    //7. Segundo formulario POST para restablecer/borrar el color
    <form action="" method="POST">
        <button type="submit" name="borrar"> Restablecer color</button>
    </form>
    
    
</body>
</html>