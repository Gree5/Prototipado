<?php 
include '../../log.php';
?>

<div class="container pt-4">
    <h3>Reporte de Ventas </h3>
    <div class="my-2">
        <a name="" id="" class="btn btn-primary" href="#" role="button">Exportar</a>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Importar</a>
    </div>
    <div>
        
        <div class="mb-3">
            <label for="">Nombre Cliente</label>
            <input type="email" class="form-control" id="buscarCliente" aria-describedby="emailHelp">
            <label for="buscarCliente">Ingrese el Nombre del Cliente</label>
        </div>
        <div class="border-top">
            <h3>Listado de Clientes</h3>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Mark</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">Mark</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row">Mark</th>
                    <td >Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>