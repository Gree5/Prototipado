<?php
include '..\..\log.php';

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
    if (strlen($_POST['name']) > 1 && strlen($_POST['fechareg']) > 1) {
        $name = mysqli_real_escape_string($conexion, trim($_POST['name']));
        $fechareg = mysqli_real_escape_string($conexion, trim($_POST['fechareg']));
        $instruccion_SQL = "INSERT INTO empleado(nombre, fechareg) VALUES ('$name','$fechareg')";
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
?>

<div class="container">
    <h5>Mantenimiento de empleado</h5>
<div class="row">
    <div class="col-md-6">
        <div class="form-container">
<div class="mb-3">
    <label for="name" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId" placeholder=""/>
</div>
<div class="mb-3">
    <label for="fechareg" class="form-label">FECHA DE REGISTRO</label>
    <input type="date" class="form-control" name="fechareg"  id="fechareg" placeholder=""/>
</div>

<input name="registrar" id="registrar" class="btn btn-primary" type="submit" value="Registrar"/>

<a 
    name=""
    id=""
    class="btn btn-warning"
    href="#"
    role="button"
    >Editar</a>

<a
    name=""
    id=""
    class="btn btn-danger"
    href="#"
    role="button"
    >Eliminar</a>
    </div>
</div>

<div class="col-md-6">
        <div class="table-responsive-md">
            <h5>Tabla de empleado</h5>
            <br><br>
<?php
$consulta = "SELECT * FROM empleado";
$result = mysqli_query($conexion, $consulta);

echo "<table>";
echo "<tr>";
echo "<th><h1>id</h1></th>";
echo "<th><h1>nombre</h1></th>";
echo "<th><h1>fechareg</h1></th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><h2>".$colum['id']."</h2></td>";
    echo "<td><h2>".$colum['nombre']."</h2></td>";
    echo "<td><h2>".$colum['fechareg']."</h2></td>";
    echo "</tr>";
}

mysqli_close($conexion);
?>
            </table>
        </div>
    </div>
</div>