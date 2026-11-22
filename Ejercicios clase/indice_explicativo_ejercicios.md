# Índice explicativo de ejercicios

Recorre, carpeta a carpeta, qué se aprende en cada ejercicio del repositorio (44 ficheros PHP). Al final hay un mapa de conceptos y una lista de observaciones para revisar.

## Índice

1. [Actividad 2.2: Estructuras de control y entrada de datos](#actividad-22-estructuras-de-control-y-entrada-de-datos)
2. [Actividad 2.3: Arrays indexados y asociativos](#actividad-23-arrays-indexados-y-asociativos)
3. [Actividad 2.4: Matrices](#actividad-24-matrices)
4. [Actividad 2.5: Formularios GET y POST](#actividad-25-formularios-get-y-post)
5. [Actividad 2.6: Subida de ficheros](#actividad-26-subida-de-ficheros)
6. [Actividades 2.8 y 2.9: Funciones y ficheros de apoyo](#actividades-28-y-29-funciones-y-ficheros-de-apoyo)
7. [Actividad 3.1: Cookies](#actividad-31-cookies)
8. [Actividad 3.2: Cesta de la compra con sesiones](#actividad-32-cesta-de-la-compra-con-sesiones)
9. [UD3: Ejemplo de cesta de la compra](#ud3-ejemplo-de-cesta-de-la-compra)
10. [UD3: Ejemplo de login y sesiones](#ud3-ejemplo-de-login-y-sesiones)
11. [Mapa de conceptos](#mapa-de-conceptos)
12. [Observaciones detectadas](#observaciones-detectadas)

---

## Actividad 2.2: Estructuras de control y entrada de datos

**Qué se aprende:** escribir bucles y condicionales, usar operadores aritméticos y módulo, leer datos con `fscanf` y generar salida con `printf`/`echo`.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ejercicio1.php](r27_Actividad2.2/ejercicio1.php) | Convierte una altura en cm a pulgadas y pies. | Constantes con `const`, `fscanf(STDIN)`, `printf` con `%.2f`. |
| [ejercicio2.php](r27_Actividad2.2/ejercicio2.php) | Calcula f(x) = x² si x > 0; si no, 0. | `if`, operador `**`. |
| [ejercicio3.php](r27_Actividad2.2/ejercicio3.php) | Suma los n primeros números impares. | `for` con paso 2, acumulador. |
| [ejercicio4.php](r27_Actividad2.2/ejercicio4.php) | Suma la serie 1 + 1/2 + 1/4 + … con n términos. | `for`, acumulador en coma flotante. |
| [ejercicio5.php](r27_Actividad2.2/ejercicio5.php) | Lista los divisores de n (sin incluir n) en una lista HTML. | Operador `%`, `floor`, bucle descendente, `<ul>`/`<li>`. |
| [ejercicio6.php](r27_Actividad2.2/ejercicio6.php) | Tira un dado hasta sacar un 5 y cuenta las tiradas. | `do-while`, `rand()`, contador. |
| [ejercicio7.php](r27_Actividad2.2/ejercicio7.php) | Convierte una nota en calificación (matrícula, sobresaliente, notable, aprobado, suspenso). | `switch` con casos agrupados (sin `break` intencionado), `floor`, `is_float`. |

---

## Actividad 2.3: Arrays indexados y asociativos

**Qué se aprende:** crear y recorrer arrays indexados y asociativos, usar `foreach` con clave y valor, y usar funciones de array (`array_sum`, `count`, `range`).

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ejercicio1_horas_extra copy.php](<r27_Actividad2.3/ejercicio1_horas_extra copy.php>) | Suma las horas extra de un array y calcula el importe (× 12,5 €). | Array indexado, `foreach`, constante. `array_sum` aparece comentado como alternativa. |
| [ejercicio2.php](r27_Actividad2.3/ejercicio2.php) | Recorre un array asociativo de empresas del IBEX con su variación y calcula la media. | Array asociativo, `foreach ($a as $clave => $valor)`, `array_sum` / `count`. |
| [ejercicio3.php](r27_Actividad2.3/ejercicio3.php) | Genera un array de 0 a n (o de n a 0 si n es negativo). | Operador ternario, `range()`, `print_r`. |
| [ejercicio4.php](r27_Actividad2.3/ejercicio4.php) | Genera la tabla de multiplicar de n con claves tipo `"nx3"`. | Claves construidas con interpolación `{$n}x{$i}`, bucle `for`. |

---

## Actividad 2.4: Matrices

**Qué se aprende:** crear arrays bidimensionales y recorrerlos con bucles anidados.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [matriz.php](r27_Actividad2.4_matrices/matriz.php) | Pide filas y columnas, genera una matriz con valores aleatorios entre 1 y 10 y la muestra. | Arrays multidimensionales `$a[$i][$j]`, bucles anidados, `fscanf` con dos valores (`"%d %d"`), `rand()`. Los índices empiezan en 1. |

---

## Actividad 2.5: Formularios GET y POST

**Qué se aprende:** construir formularios HTML, recibir datos en PHP y mostrarlos de forma segura.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ejercicio1.php](r27_Actividad2.5_forms/ejercicio1.php) | Formulario con checkboxes de prendas y selector de color (GET). Muestra lo seleccionado. | `method="get"`, `$_GET`, checkboxes con `name="prendas[]"`, `input type="color"`, `isset`, `htmlspecialchars` contra XSS. |
| [ejercicio2.php](r27_Actividad2.5_forms/ejercicio2.php) | Formulario de reserva con fecha, hora, radio y select múltiple (POST). Muestra los datos recibidos. | `method="post"`, `required`, `min`/`max` en hora, `checked`, `select multiple` con `alergenos[]`, `implode` para arrays, recorrer `$_POST`. |

---

## Actividad 2.6: Subida de ficheros

**Qué se aprende:** subir uno o varios ficheros al servidor, leyendo `$_FILES` y moviéndolos con `move_uploaded_file()`.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ejemplo.php](r27_Actividad2.6_files/ejemplo.php) | Plantilla de subida de un fichero con `move_uploaded_file`. | `$_FILES`, `UPLOAD_ERR_OK`, `enctype="multipart/form-data"`. Con `name="archivo[]"` no funciona tal cual (ver [observaciones](#observaciones-detectadas)). |
| [ejercicio1.php](r27_Actividad2.6_files/ejercicio1.php) | Muestra la estructura de `$_FILES` con `print_r` y recorre sus datos con un bucle. | Estructura de `$_FILES` (`name`, `tmp_name`, `error`, `size`, `type`), `print_r`, índices. |
| [ejercicio2.php](r27_Actividad2.6_files/ejercicio2.php) | Muestra cada clave de `$_FILES` para cada fichero. | Bucle `for` anidado con `foreach` sobre las claves de `$_FILES`. |
| [ejercicio3.php](r27_Actividad2.6_files/ejercicio3.php) | Subida múltiple: comprueba el error de cada fichero y lo mueve a `uploads/`. | `multiple`, `foreach` con índice, comprobación de error por fichero, mensajes individuales. |
| [uploads/README.txt](r27_Actividad2.6_files/uploads/README.txt) | Indica que la carpeta `uploads/` debe existir antes de subir. | Requisito de la carpeta de destino. |

---

## Actividades 2.8 y 2.9: Funciones y ficheros de apoyo

**Qué se aprende:** definir funciones con tipos, separar código en ficheros (`require_once`), y distinguir entre calcular datos y mostrarlos.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ej1/ejercicio1.php](r27_Actividad2.8y2.9/ej1/ejercicio1.php) | Calculadora de suma o producto con formulario. | `declare(strict_types=1)`, `require_once`, `(float)` para convertir la entrada, constantes para los tipos de operación. |
| [ej1/funciones.php](r27_Actividad2.8y2.9/ej1/funciones.php) | Funciones `calcular`, `sumar` y `multiplicar`. | Tipos de parámetro y de retorno (`: float`), `if`/`else if` (la versión con `switch` está comentada). |
| [ej2/ejercicio2_a.php](r27_Actividad2.8y2.9/ej2/ejercicio2_a.php) | Formulario de filas y columnas que genera una tabla de aleatorios 0–10. | `require_once`, `min`/`max` en inputs, enlace a CSS externo. |
| [ej2/funciones_a.php](r27_Actividad2.8y2.9/ej2/funciones_a.php) | `mostrarTabla()`: genera el HTML de la tabla directamente con `echo`. | PHPDoc, función `void`, mezcla de cálculo y presentación. |
| [ej2/ejercicio2_b.php](r27_Actividad2.8y2.9/ej2/ejercicio2_b.php) | Mismo resultado que la versión _a, separando la lógica. | Llamadas a `crearMatriz()` y `mostrarMatriz()`. |
| [ej2/funciones_b_c.php](r27_Actividad2.8y2.9/ej2/funciones_b_c.php) | `crearMatriz()` devuelve el array; `mostrarMatriz()` lo pinta en una tabla. | Funciones con retorno de array (`: array`), separación lógica/presentación, reutilización. |
| [ej2/estilos.css](r27_Actividad2.8y2.9/ej2/estilos.css) | Estilos de la tabla (bordes y `border-collapse`). | Enlazar CSS con `<link>`, selectores de elementos. |

---

## Actividad 3.1: Cookies

**Qué se aprende:** guardar, leer, actualizar y borrar cookies, y guardar preferencias o historiales en ellas.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [ejercicio1/visitas.php](r27_Actividad3.1-cookies_aula/ejercicio1/visitas.php) | Contador de visitas con una cookie de 1 hora y botón para eliminarla. | `setcookie` con caducidad, `$_COOKIE`, borrado con tiempo pasado, `header('Location')`, `<?= ?>`. El valor nuevo no aparece en `$_COOKIE` hasta la siguiente petición (comentado en el fichero). |
| [ejercicio2/index.php](r27_Actividad3.1-cookies_aula/ejercicio2/index.php) | Selector de idioma (gallego/castellano) guardado 30 días; permite borrar la preferencia. | Arrays de textos por idioma, `array_key_exists` para validar la cookie, patrón POST → cookie → redirección, `htmlspecialchars`, atributo `lang` dinámico, sintaxis alternativa de plantillas (`foreach … endforeach`). |
| [ejercicio3/catalogo.php](r27_Actividad3.1-cookies_aula/ejercicio3/catalogo.php) | Define el catálogo de productos como array asociativo anidado. | `require_once`, arrays de arrays, datos separados de la vista. |
| [ejercicio3/index.php](r27_Actividad3.1-cookies_aula/ejercicio3/index.php) | Catálogo y lista de "productos visitados recientemente" leída de la cookie. | `explode` para convertir la cookie en array, búsqueda de datos por id, `number_format` con formato español, borrado del historial por POST. |
| [ejercicio3/producto.php](r27_Actividad3.1-cookies_aula/ejercicio3/producto.php) | Muestra la ficha de un producto y actualiza el historial (máximo 5, se elimina el más antiguo). | `$_GET` con `??`, validación con `array_key_exists`, `array_search`, `unset` + `array_values`, `implode`, `die()` si el id no existe. |

---

## Actividad 3.2: Cesta de la compra con sesiones

**Qué se aprende:** una aplicación completa de tienda: sesión, cesta, añadir, ver y vaciar, separando datos, lógica y vista. Es la versión completa (carpeta `aula_sol`).

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [productos.php](r27_Actividad3.2_aula_sol/productos.php) | Catálogo de productos (nombre, descripción, precio, imagen). | Datos en un array incluido con `require_once`. |
| [index.php](r27_Actividad3.2_aula_sol/index.php) | Tienda: tarjetas de producto con botón "Añadir" y contador de la cesta. | `session_start()`, inicializar `$_SESSION['cesta']`, `array_sum`, formulario POST con id oculto, Bootstrap. |
| [anadir.php](r27_Actividad3.2_aula_sol/anadir.php) | Añade una unidad del producto recibido por POST y redirige. | `is_numeric`, `(int)`, validación de existencia, `$_SESSION[...]++`, `header` + `exit` (patrón PRG). |
| [util.php](r27_Actividad3.2_aula_sol/util.php) | `mostrarCestaEnTabla()`: tabla con cantidad, precio unitario, subtotal y total. | `global $productos`, `foreach`, `number_format`, cálculo de totales. |
| [cesta.php](r27_Actividad3.2_aula_sol/cesta.php) | Muestra la cesta (vacía o con tabla) y el botón de vaciar. | `require_once` de otro fichero, condicionales en la plantilla, `empty()`. |
| [vaciar.php](r27_Actividad3.2_aula_sol/vaciar.php) | Elimina la cesta de la sesión y redirige. | `unset($_SESSION[...])`, formulario POST, redirección. |

---

## UD3: Ejemplo de cesta de la compra

**Qué se aprende:** es la versión de partida de la cesta de la actividad 3.2. Sirve para practicar completando lo que falta.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [anadir.php](r27_ud3_ejemplo_cesta_compra/anadir.php), [productos.php](r27_ud3_ejemplo_cesta_compra/productos.php), [index.php](r27_ud3_ejemplo_cesta_compra/index.php) | Igual que los de la 3.2: añadir al carrito, catálogo y contador. | Mismos conceptos que la actividad 3.2. |
| [cesta.php](r27_ud3_ejemplo_cesta_compra/cesta.php) | Solo muestra el número de productos o el mensaje de cesta vacía. | No tiene tabla de detalle ni botón de vaciar, que sí están en la 3.2 (`util.php` y `vaciar.php`). |

---

## UD3: Ejemplo de login y sesiones

**Qué se aprende:** autenticación básica: formulario de acceso, verificación de contraseñas con hash, control de acceso a una zona privada y cierre de sesión.

| Fichero | Qué hace | Conceptos clave |
| :--- | :--- | :--- |
| [login.php](r27_ud3_ejemplo_autenticacion/login.php) | Formulario de usuario y contraseña; muestra el error guardado en sesión. | `session_start`, mensaje "flash" (`$_SESSION['error_login']` y `unset`), `htmlspecialchars`. |
| [validar.php](r27_ud3_ejemplo_autenticacion/validar.php) | Comprueba los datos POST, busca el usuario y valida la contraseña. Si es correcta guarda la identidad en sesión; si no, guarda un error. | `$_SERVER['REQUEST_METHOD']`, `isset` múltiple, `is_string`, `password_verify`, `require_once`, redirecciones. |
| [usuarios.php](r27_ud3_ejemplo_autenticacion/usuarios.php) | Función `getUsuarioByUserName()`: lee `usuarios.json` y devuelve el usuario o `null`. | `file_get_contents`, `json_decode(..., true)`, `foreach`, `return null`. |
| [usuarios.json](r27_ud3_ejemplo_autenticacion/usuarios.json) | Almacén de usuarios (id, usuario y contraseña). | Formato JSON; la contraseña se guarda como hash bcrypt, no en texto plano. |
| [privada.php](r27_ud3_ejemplo_autenticacion/privada.php) | Zona protegida: si no hay sesión, redirige a login; si la hay, saluda al usuario. | Control de acceso comprobando `$_SESSION`, `htmlspecialchars`. |
| [logout.php](r27_ud3_ejemplo_autenticacion/logout.php) | Cierra la sesión: vacía `$_SESSION`, borra la cookie de sesión y destruye la sesión. | `session_destroy`, `session_get_cookie_params`, `ini_get`, borrado de cookie con tiempo pasado. |

---

## Mapa de conceptos

| Concepto | Dónde se practica |
| :--- | :--- |
| Bucles `for`, `while`, `do-while`, `foreach` | 2.2, 2.3, 2.4, 2.6 |
| Condicionales `if`, `switch`, ternario | 2.2 (ej. 2, 7), 2.3 (ej. 3) |
| Entrada por consola con `fscanf(STDIN)` | 2.2, 2.3 (ej. 3), 2.4 |
| Arrays indexados, asociativos y multidimensionales | 2.3, 2.4, 3.1 (ej. 3) |
| Formularios GET y POST, `checkbox[]`, `select multiple` | 2.5 |
| Escapado de salida con `htmlspecialchars` (XSS) | 2.5, 3.1 (ej. 2), 3.2, UD3 (login) |
| Subida de ficheros: `$_FILES`, `move_uploaded_file` | 2.6 |
| Funciones con tipos, `strict_types`, `require_once` | 2.8 y 2.9, 3.1 (ej. 3), 3.2 |
| Cookies: `setcookie`, `$_COOKIE`, caducidad, borrado | 3.1 |
| Sesiones: `session_start`, `$_SESSION`, `session_destroy` | 3.2, UD3 |
| Patrón PRG (POST → redirección con `header` + `exit`) | 3.1 (ej. 2), 3.2 (`anadir`, `vaciar`), UD3 (`validar`) |
| Contraseñas con hash y `password_verify` | UD3 (login) |
| JSON con `json_decode` | UD3 (login) |
| Control de acceso y cierre de sesión | UD3 (`privada`, `logout`) |

---

## Observaciones detectadas

Puntos del código que conviene revisar o que pueden dar problemas:

1. **`fscanf(STDIN, …)`** (2.2, 2.3 ej. 3, 2.4): `STDIN` solo existe al ejecutar el script por consola (`php fichero.php`). Desde el navegador estos ejercicios fallan.
2. **Cabeceras ya enviadas**: `setcookie()`, `header()` y `session_start()` deben ejecutarse antes de cualquier HTML. Esto ocurre en [visitas.php](r27_Actividad3.1-cookies_aula/ejercicio1/visitas.php) (HTML antes del bloque PHP), en la rama de borrado de [ejercicio3/index.php](r27_Actividad3.1-cookies_aula/ejercicio3/index.php) y en [login.php](r27_ud3_ejemplo_autenticacion/login.php) (`session_start()` después del `<h1>`).
3. **[ejemplo.php](r27_Actividad2.6_files/ejemplo.php)** usa `name="archivo[]"` pero trata `$_FILES["archivo"]["error"]` como un valor simple. Como ese campo es un array, la comprobación con `UPLOAD_ERR_OK` nunca se cumple. La versión correcta es [ejercicio3.php](r27_Actividad2.6_files/ejercicio3.php).
4. **Subida de ficheros sin validar**: no se comprueba tipo, tamaño ni nombre del fichero. Es un aspecto a tener en cuenta en una aplicación real.
5. **[ej. 2.5 ejercicio2.php](r27_Actividad2.5_forms/ejercicio2.php)**: `isset($_POST)` siempre es `true`, así que el bucle que muestra `$_POST` se ejecuta aunque no se haya enviado nada. La comprobación correcta sería `if ($_SERVER["REQUEST_METHOD"] === "POST")`.
6. **Comentarios `COMPLETAR`** en [ejercicio3/index.php](r27_Actividad3.1-cookies_aula/ejercicio3/index.php) y [ejercicio3/producto.php](r27_Actividad3.1-cookies_aula/ejercicio3/producto.php): el código ya está escrito debajo, pero los comentarios siguen puestos.
