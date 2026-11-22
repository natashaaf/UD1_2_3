<?php
session_start();      // 1. Inicia la sesión actual
session_unset();      // 2. Vacía las variables de $_SESSION
session_destroy();    // 3. Destruye la sesión en el servidor

header('Location: login.php'); // 4. Redirige al login
exit();
