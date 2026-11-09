<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php'; //(require_once = carga el autoloader de Composer) (__DIR__) =  representa la carpeta donde está el archivo actual (public).

use App\Controllers\VehicleController;//use: nos permite utilizar VehicleController sin escribir su namespace completo cada vez.

function request(): void
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
}


    $controller = new VehicleController();

if ($method === 'GET') {

    echo "Hemos recibido una petición GET";

} elseif ($method === 'POST') {

    echo "Hemos recibido una petición POST";

}
request();