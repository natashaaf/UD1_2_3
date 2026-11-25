<?php
// ==============================================
//  5.4. Inclusión de archivos 
// ==============================================
require_once "tarifas.php";
/**@var array $tarifas */
require_once "funciones.php"; 

// ==============================================
// 5.1. Recuperación y validación de los datos
// 5.2. Acumulación y visualización de errores
// 5.3. Cálculo y presentación de los resultados
// ==============================================

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errores = []; 
    $nombreRecibido = $_POST["nombre"];
    $taller = $_POST["taller"];
    $sesiones = $_POST["sesiones"];

    //Nombre no debe estar vacío ni tener espacios. 
    $nombre = trim($nombreRecibido);
    if ($nombre === "") {
        $errores[] = "El nombre es obligatorio.";
    }

    //Número entero comprendido entre 1 y 10.
    if ($sesiones < 1 || $sesiones > 10) {
        $errores[] = "El número de sesiones debe ser un entero entre 1 y 10.";
    }

    //El taller seleccionado existe entre las claves del array $tarifas. 
    if (!array_key_exists($taller, $tarifas)) { 
        $errores[] = "El taller seleccionado no existe.";
    }

    // Visualización de errores con htmlspecialchars 
    if (count($errores)>0) {
        echo "<h2>Se han encontrado errores:</h2>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    } else {
        // Obtén el precio por sesión a partir del array $tarifas
        $precio = $tarifas[$taller];

        // Utiliza las funciones de funciones.php
        $importe = calcularImporte($precio, $sesiones);
        $descuento = calcularDescuento($importe, $sesiones);
        $total = calcularTotal($importe, $descuento);

        // Mostra los datos
        echo "<h2>Resultado</h2>";
        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Taller seleccionado: " . htmlspecialchars($taller) . "</p>";
        echo "<p>Número de sesiones: " . htmlspecialchars((string)$sesiones) . "</p>";
        echo "<p>Precio por sesión: " . number_format($precio, 2, ",", ".") . " €</p>";
        echo "<p>Importe inicial: " . number_format($importe, 2, ",", ".") . " €</p>";
        echo "<p>Descuento aplicado: " . number_format($descuento, 2, ",", ".") . " €</p>";
        echo "<p>Importe total: " . number_format($total, 2, ",", ".") . " €</p>";
    }


}
