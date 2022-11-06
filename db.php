<!-- Esta es la conexion de la base de datos para implementarla mas adelante -->


<?php
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'nombre de la base de datos',
);
?>
<!-- Estes es un ejemplo para guardar un archivo utilizando la conexion a la base de datos

<php


include("db.php");

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $query = "INSERT INTO usuario(nombre, apellido) VALUES ('$name', '$surname')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Faild");
    }

    header("Location: index.php");
}

?>


-->