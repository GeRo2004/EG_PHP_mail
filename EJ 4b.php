<?php
session_start();


if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 1;
} else {
    $_SESSION['paginas_visitadas']++;
}

echo "Página 2 - Has visitado " . $_SESSION['paginas_visitadas'] . " página(s).";

echo '<a href="EJ 4a.php">Volver a la Página 1</a>';
echo '<a href="EJ 4c.php">Cerrar Sesión</a>';
?>