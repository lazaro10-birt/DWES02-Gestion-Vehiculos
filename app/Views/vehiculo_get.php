<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de búsqueda</title>
</head>
<body>

    <h1>Resultado de búsqueda</h1>

    <?php if ($vehiculo !== null): ?>

        <h2>Datos del vehículo</h2>

        <p>ID: <?= $vehiculo->getId() ?></p>
        <p>Marca: <?= $vehiculo->getMarca() ?></p>
        <p>Modelo: <?= $vehiculo->getModelo() ?></p>
        <p>Año: <?= $vehiculo->getAnio() ?></p>
        <p>Tipo: <?= $vehiculo->getTipo() ?></p>

        <?php if ($vehiculo instanceof \App\Models\Coche): //nos permite comprobar si el objeto es de tipo Coche o Moto. Así mostramos las características específicas de cada uno. ?> 

            <p>Puertas: <?= $vehiculo->getPuertas() ?></p>

        <?php elseif ($vehiculo instanceof \App\Models\Moto): ?>

            <p>¿Tiene sidecar?: <?= $vehiculo->getSidecar() ? 'Sí' : 'No' ?></p>

        <?php endif; ?>

    <?php else: ?>

        <p>No se ha encontrado ningún vehículo con ese ID.</p>

    <?php endif; ?>

    <p><a href="index.html">Volver</a></p>

</body>
</html>