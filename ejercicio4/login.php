<!-- Ejercicio 4:Sesiones, Autenticación y Redirección (UD3)

Crea tres archivos: login.php, panel.php y logout.php.   
 Inicia sesión con session_start().
 Muestra un formulario POST con usuario y password.   
 Comprueba en PHP si el usuario existe y la contraseña coincide contra un array asociativo de usuarios válidos 
 (por ejemplo: ["admin" => "1234", "natasha" => "daw26"]).  
 Si las credenciales son correctas, guarda el nombre en $_SESSION['usuario'] y redirige a panel.php. 
 Si no, muestra un mensaje de error.   
 
 En panel.php:
 Inicia sesión con session_start().   
 Comprueba si existe $_SESSION['usuario'] (isset()); si no existe, redirige automáticamente a login.php.   
 Si existe, muestra un saludo personalizado (htmlspecialchars()) y un enlace o formulario a logout.php.  
  
 En logout.php:
 Inicia sesión, vacía variables con session_unset(), destruye la sesión con session_destroy() y redirige a login.php.  -->

<?php
session_start(); //Inicia o reanuda la sesion en la primera linea

//Array asociativo de usuarios validos: usuario => contraseña
$usuarios = [
    "admin" => "1234",
    "usuario" => "daw26"
];

$error = "";

//Compueba si se envió el formulario por POST
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['usuario'], $_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //verifica que el usuario existe y coincida su contraseña
    if(isset($usuarios[$usuario]) && $usuarios[$usuario] === $password){
        $_SESSION['usuario'] = $usuario; // Guarda el usuario en la sesión
        header('Location: panel.php');  // Redirige al panel
        exit();
    }else{
        $error = 'Usuario o contraseña incorrectos.';
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
    <h2>Iniciar sesión</h2>

    <?php if ($error !== ""): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label>Usuario: <input type="text" name="usuario" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>