<!DOCTYPE html>
<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['Correo'])) {
    header("Location: login.php");
    exit();
}
?>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Crearcuenta.php"><input type="submit" value="Crear Cuenta"></form>
<form action="cerrar.php" method="post"><input type="submit" value="Cerrar Sesión"></form>


</body>
</html>