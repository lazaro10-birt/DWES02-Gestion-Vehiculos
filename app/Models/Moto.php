<?php

namespace App\Models; // llamamos a la clase Vehiculo y la ubicamos en el namespace App\Models

class Moto extends Vehiculo // definimos la clase moto que hereda de la clase Vehiculo
{   
    protected bool $sidecar; //definimos la propiedad sidecar de la clase moto, booleano que indica si la moto tiene o no sidecar

    public function __construct(//definimos el constructor de la clase moto
        int $id,
        string $marca,
        string $modelo,
        int $anio,
        bool $sidecar
    ) {
        parent::__construct(//llamamos al constructor de la clase padre Vehiculo
            $id, 
            $marca, 
            $modelo, 
            $anio, 
            "moto" //asignamos el valor "moto" a la propiedad tipo de la clase Vehiculo
            );
        
            $this->sidecar = $sidecar; //asignamos el valor del parametro sidecar a la propiedad sidecar de la clase moto
        }

        public function getSidecar(): bool
        {
            return $this->sidecar;
        }
}