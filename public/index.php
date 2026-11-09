<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\VehicleController;

function request(): void
{
    // Identificamos el método HTTP
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    // Creamos el controlador
    $controller = new VehicleController();

    if ($method === 'GET') {

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $vehiculo = $controller->getById($id);

            require __DIR__ . '/../app/Views/vehiculo_get.php';

        } else {

            echo "Introduce un ID de vehículo";

        }

    } elseif ($method === 'POST') {

        // Recuperamos los datos enviados por el formulario
        $jsonPost = $_POST['jsonPost'] ?? '';

        // Convertimos el JSON en un array asociativo
        $vehiculoData = json_decode($jsonPost, true);

        // Comprobamos que el JSON se ha convertido correctamente
        if (is_array($vehiculoData)) {

            // Guardamos el vehículo y recuperamos el listado
            $vehiculos = $controller->store($vehiculoData);

            // Mostramos todos los vehículos
            require __DIR__ . '/../app/Views/vehiculo_post.php';

        } else {

            echo "Error: los datos JSON no son válidos.";

        }
    }
}

request();
