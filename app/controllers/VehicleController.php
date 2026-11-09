<?php

namespace App\Controllers;// Llamamos a la clase VehiculoController y la ubicamos en el namespace App\controllers

use App\Models\Vehiculo; // llamamos a la clase Vehiculo y la ubicamos en el namespace App\Models
use App\Models\Coche; // llamamos a la clase Coche y la ubicamos en el namespace App\Models
use App\Models\Moto; // llamamos a la clase Moto y la ubicamos en el namespace App\Models


class VehicleController {
    
    public function store($vehiculoData): array{//Con esta funcion guardaremos un vehiculo en la base de datos, si no se puede guardar devolvemos null

        $vehiculos = $this->leerVehiculos(); //Cargamos los archivos original
        
        if($vehiculoData['tipo'] === 'coche'){// verificamos q tipo de vehiculo

            $vehiculo = new Coche(//Creamos un objetyo coche

                $vehiculoData['id'],
                $vehiculoData['marca'],
                $vehiculoData['modelo'],
                $vehiculoData['anio'],
                $vehiculoData['puertas']
            );

        } elseif ($vehiculoData['tipo'] === 'moto') {

        $vehiculo = new Moto(
            $vehiculoData['id'],
            $vehiculoData['marca'],
            $vehiculoData['modelo'],
            $vehiculoData['anio'],
            $vehiculoData['sidecar']
        );

    } else {
        return $vehiculos;
    }

        $vehiculos[] = $vehiculo;//Añadimos el nuevo vehiculo al array

        return $vehiculos; //Devolvemos el vehiculo creado
    }





    public function getById($id): ?Vehiculo //Con esta funcion obtendremos un vehiculo por su id, si no existe devolvemos null
    {
        $vehiculos = $this-> leerVehiculos(); //llamamos a la funcion leerVehiculos para obtener un array de objetos Vehiculo
        
        foreach($vehiculos as $vehiculo){ //Vamos a recorrer y examinar cada objeto Vehiculo del array de vehiculos
            if($vehiculo->getId() === (int)$id){ //Comparamos el ID que nos pasan por parametro con el ID de cada objeto Vehiculo, si coincide devolvemos el objeto Vehiculo
                return $vehiculo; //devolvemos el objeto Vehiculo que coincide con el ID
            }
        }
        return null;//si no encontramos ningun objeto Vehiculo con el ID que nos pasan por parametro devolvemos null
        
    }
    




    private function leerVehiculos(): array //creamos una funcion privada para leer los datos
{
    require_once __DIR__ . '/../../data/vehiculos_bbdd.php'; //Indicamos la ruta de nuestro datos guardado

    $vehiculos = [];//Creamos un  array vacio

    foreach (VEHICULOS as $datos) {//Creamos un for pararecorrer el array de nustros datos

        if ($datos['tipo'] === 'coche') {//Verificamos el tipo

            $vehiculo = new Coche(
                $datos['id'],
                $datos['marca'],
                $datos['modelo'],
                $datos['anio'],
                $datos['puertas']
            );

        } elseif ($datos['tipo'] === 'moto') {

            $vehiculo = new Moto(
                $datos['id'],
                $datos['marca'],
                $datos['modelo'],
                $datos['anio'],
                $datos['sidecar']
            );

        } else {
            continue;
        }

        $vehiculos[] = $vehiculo;
    }

    return $vehiculos;
}


}