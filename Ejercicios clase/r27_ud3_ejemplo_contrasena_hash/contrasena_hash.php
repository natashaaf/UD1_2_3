<?php

$password = "abc123.";

$hash1 = password_hash($password, PASSWORD_BCRYPT);
$hash2 = password_hash($password, PASSWORD_BCRYPT);

echo "Primer hash: " . $hash1 . "<br>";
echo "Segundo hash: " . $hash2;

$hashCalculado1= '$2y$10$xzv2qxcDSAOoFJMlYccqzeFspu7SL96lD99cG2TlfErXb7cZ22Ptu'; //usar comillias simples
$hashCalculado2 = '$2y$10$lax4IPa7OfzCyjtSIo53Se9uel09X/gAfDxo7.alJgdN8Ry8Qhp6.';

password_verify($password, $hashCalculado1);
password_verify($password, $hashCalculado2);

// ¿Los dos hashes obtenidos son iguales? No
// Si la contraseña de entrada es la misma, ¿por qué se generan resultados diferentes? Por causa de salt que genera distinto
// Si los hashes son diferentes, ¿cómo puede comprobar PHP que una contraseña coincide con un hash almacenado?

?>
