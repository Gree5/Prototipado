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

?>

<div class="container">
    <h5>Mantenimiento de cliente</h5>
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <div class="mb-3">
                        <label for="name" class="form-label">NOMBRE</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId" placeholder=""/>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">DIRECCIÓN</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder=""/>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">TELÉFONO</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder=""/>
                    </div>

                    <input name="registrar" id="registrar" class="btn btn-primary" type="submit" value="Registrar"/>

                    <a name="" id="" class="btn btn-warning" href="#" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                </div>
            </div>
        
    </form>
    <!-- <div class="col-md-6">
        <div class="table-responsive-md">
            <h5>Tabla de clientes</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CÓDIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">TELÉFONO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>Rudy</td>
                        <td>Av. Primavera 1501</td>
                        <td>123456789</td>
                    </tr>
                    <tr class="">
                        <td scope="row">123</td>
                        <td>James</td>
                        <td>AV.</td>
                        <td>987654321</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->
<div class="col-md-6">
        <div class="table-responsive-md">
            <h5>Tabla de clientes</h5>
            <br><br>
<?php
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
            </table>
        </div>
    </div>
</div>