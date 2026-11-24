<?php
$hash = password_hash('abc123.', PASSWORD_BCRYPT);
echo $hash . PHP_EOL;