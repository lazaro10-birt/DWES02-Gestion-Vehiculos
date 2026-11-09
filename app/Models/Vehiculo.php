<?php

//vamos a crear  una clase para definir las caracteristica comunes de 
//cualquier vehiculo

namespace App\Models; // llamamos a la clase Vehiculo y la ubicamos en el namespace App\Models

class Vehiculo // definimos la clase Vehiculo
{
    //definimos las propiedades de la clase Vehiculo
    protected int $id;
    protected string $marca;
    protected string $modelo;
    protected int $anio;
    protected string $tipo;

    //definimos el constructor de la clase Vehiculo
    public function __construct(
        int $id,
        string $marca,
        string $modelo,
        int $anio,
        string $tipo
    ) {
        //asignamos los valores de los parametros a las propiedades de la clase Vehiculo
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->tipo = $tipo;
    }



    public function getId(): int
    {
        return $this->id;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAnio(): int
    {
        return $this->anio;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

}