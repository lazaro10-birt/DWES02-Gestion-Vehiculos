<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos creados</title>
</head>
<body>

<h1>Gestión de vehículos</h1>

<h2>Listado de todos los vehículos</h2>

<?php foreach ($vehiculos as $vehiculo): ?>

    <hr>

    <p>ID: <?= $vehiculo->getId() ?></p>
    <p>Marca: <?= $vehiculo->getMarca() ?></p>
    <p>Modelo: <?= $vehiculo->getModelo() ?></p>
    <p>Año: <?= $vehiculo->getAnio() ?></p>
    <p>Tipo: <?= $vehiculo->getTipo() ?></p>

    <?php if ($vehiculo instanceof \App\Models\Coche): ?>

        <p>Puertas: <?= $vehiculo->getPuertas() ?></p>

    <?php elseif ($vehiculo instanceof \App\Models\Moto): ?>

        <p>¿Tiene sidecar?: <?= $vehiculo->getSidecar() ? 'Sí' : 'No' ?></p>

    <?php endif; ?>

<?php endforeach; ?>

<hr>

<p>Total de vehículos: <?= count($vehiculos) ?></p>

<p><a href="indice.html">Volver</a></p>

</body>
</html>