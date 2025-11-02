<?php

require_once ('Pelicula.php');



class Catalogo {

private array $peliculas = [];


    public function agregarPelicula(Pelicula $pelicula): void
    {
        $this->peliculas[] = $pelicula;
    }


function peliGenero(Genero $genero): void
{
    echo "Lista de peliculas por genero:\n";
    $consulta = [];
    foreach ($this->peliculas as $pelicula) {
        if ($pelicula->getGenero() == $genero) {
            $consulta[] = $pelicula;
        }
    }
    if (empty($consulta)) {
        echo "No existe ninguna pelicula de ese genero";
    } else {
        foreach ($consulta as $resultado) {
            echo $resultado;
        }
    }
}
    function pelisMultipais(): void
    {
        echo "\nPeliculas con más de un país productor:\n";
        $multiPais = [];
        foreach ($this->peliculas as $pelicula) {
            if (count($pelicula->getPaises()) > 1) {
                $multiPais[] = $pelicula;
            }
        }
        if (empty($multiPais)) {
            echo "No existe ninguna pelicula con mas de un pais de produccion\n";
        } else {
            foreach ($multiPais as $peli) {
                echo $peli;
            }
        }
    }


}