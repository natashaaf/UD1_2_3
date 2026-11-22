<!-- Ejercicio 1: 
Formulario POST + Función tipada + PHPDoc (UD2)Crea dos archivos: utilidades.php e index.php.  
PHP _ Aula Virtual 26-27.pdfEn utilidades.php:Define una función sumarMayoresQueDiez(array $numeros): int 
que recorra el array recibido y devuelva con return la suma únicamente de los elementos estrictamente mayores que 10.   
Documenta la función con un bloque PHPDoc (/** ... */) indicando descripción, @param y @return.   

En index.php:Incluye utilidades.php usando require_once con __DIR__.   
Crea un formulario HTML que envíe por POST tres números (num1, num2, num3) al mismo archivo (action="").   
Cuando se envíe el formulario ($_SERVER['REQUEST_METHOD'] === 'POST'), recoge los valores,
 mételos en un array convirtiéndolos a entero (int), llama a sumarMayoresQueDiez() y muestra el resultado en pantalla.   
 -->




<?php
require_once __DIR__ . '/utilidades.php'; // Carga utilidades.php una vez usando ruta absoluta del directorio
$resultado = null; // Guarda el resultado final; null indica que aún no se ha calculado

// Comprueba que la petición llega por POST (envío de formulario)
if($_SERVER['REQUEST_METHOD'] === "POST"){
    // Verifica que existen los tres campos enviados
    if(isset($_POST['num1'], $_POST['num2'], $_POST['num3'])){
        // Convierte cada valor recibido a entero (int) y arma el array
        $numeros = [
            (int) $_POST['num1'],
            (int) $_POST['num2'],
            (int) $_POST['num3'],
        ];
        // Llama a la función y guarda la suma de los mayores estrictos que 10
        $resultado = sumarMayoresQueDiez($numeros);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Envía datos por POST al mismo archivo (action="") -->
    <form action="" method="post">
        <label>Numero 1: <input type="number" name="num1" required></label>
        <label>Numero 2: <input type="number" name="num2" required></label>
        <label>Numero 3: <input type="number" name="num3" required></label>
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Muestra el resultado solo si ya se procesó un envío válido
    if($resultado !== null){
        echo "Resultado: " . ($resultado);
    }
    ?>
    
</body>
</html>