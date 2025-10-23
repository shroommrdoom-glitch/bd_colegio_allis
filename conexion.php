<?php
$servidor = "localhost";
$usuario = "sadboyz";
$password = "SPKDENJI27/_/";
$basedatos = "sadboyz_bd_colegio"; 
//mysql -h mysql-sadboyz.alwaysdata.net -u sadboyz -p sadboyz_bd_colegio
try {
    $conn = new PDO("mysql:host=$servidor;dbname=$basedatos;charset=utf8", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $conn = null;
    echo "Error de conexión: " . $e->getMessage();
}
?>