<?php

$user = "root";
$pass = "";
$host = "localhost";

$conexion = mysqli_connect($host, $user, $pass, "prototipado");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}

if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) > 1 && strlen($_POST['direccion']) > 1 && strlen($_POST['telefono']) > 1) {
        $name = mysqli_real_escape_string($conexion, trim($_POST['name']));
        $direccion = mysqli_real_escape_string($conexion, trim($_POST['direccion']));
        $telefono = mysqli_real_escape_string($conexion, trim($_POST['telefono']));
        $instruccion_SQL = "INSERT INTO cliente(nombre, direccion, telefono) VALUES ('$name','$direccion','$telefono')";
        $resultado = mysqli_query($conexion, $instruccion_SQL);
        if ($resultado) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar";
        }
    } else {
        echo "Por favor, complete todos los campos";
    }
} else {
    echo "Formulario no enviado";
}

$consulta = "SELECT * FROM cliente";
$result = mysqli_query($conexion, $consulta);

echo "<table>";
echo "<tr>";
echo "<th><h1>id</h1></th>";
echo "<th><h1>nombre</h1></th>";
echo "<th><h1>direccion</h1></th>";
echo "<th><h1>telefono</h1></th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><h2>".$colum['id']."</h2></td>";
    echo "<td><h2>".$colum['nombre']."</h2></td>";
    echo "<td><h2>".$colum['direccion']."</h2></td>";
    echo "<td><h2>".$colum['telefono']."</h2></td>";
    echo "</tr>";
}

mysqli_close($conexion);
?>