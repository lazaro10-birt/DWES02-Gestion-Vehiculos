<?php

namespace App\Models; // llamamos a la clase Coche y la ubicamos en el namespace App\Models

class Coche extends Vehiculo // definimos la clase Coche que hereda de la clase Vehiculo
{   
protected int $puertas; //definimos la propiedad puertas de la clase Coche

public function __construct(//definimos el constructor de la clase Coche
    int $id,
    string $marca,
    string $modelo,
    int $anio,
    int $puertas
) {
    parent::__construct(//llamamos al constructor de la clase padre Vehiculo
        $id, 
        $marca, 
        $modelo, 
        $anio, 
        "coche" //asignamos el valor "coche" a la propiedad tipo de la clase Vehiculo
        );
    
        $this->puertas = $puertas; //asignamos el valor del parametro puertas a la propiedad puertas de la clase Coche
    }
    public function getPuertas(): int
{
    return $this->puertas;
}
}