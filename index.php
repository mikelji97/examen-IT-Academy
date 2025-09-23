<?php

enum Genero: string
{
    case Drama = "drama";
    case Comedia  = "comedia";
    case Accion = "accion";
    case CienciaFiccion = "ciencia ficcion";
    case Terror = "terror";
}

class Peliculas
{
    private string $nombre;
    private Genero $genero;
    private int $duracion;
    private int $añoEstreno;
    private array $pais;

    public function __construct(string $nombre, Genero $genero, int $duracion, int $añoEstreno, array $pais)
    {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->añoEstreno = $añoEstreno;
        $this->pais = $pais;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getGenero(): Genero
    {
        return $this->genero;
    }
    public function getDuracion(): int
    {
        return $this->duracion;
    }
    public function getAñoEstreno(): int
    {
        return $this->añoEstreno;
    }
    public function getPais(): string
    {
        return $this->pais;
    }

    public function __toString()
    {
        implode()
        return "Nombre: {$this->nombre}, Genero: {$this->genero->value}, duracion: {$this->duracion}, Año de estreno: {$this->añoEstreno}, pais: {$this->pais} \n";
    }
}
$peliculas = [
    new Peliculas("El guardian invisible", Genero::Accion, 220, 2002, "España"),
    new Peliculas("seven", Genero::Accion, 156, 1997, "Italia"),
    new Peliculas("el indomable will hunting", Genero::Terror, 180, 2025, "Portugal"),
    new Peliculas("a todo gas", Genero::Comedia, 156, 1992, "Belgica"),
];

function peliGenero(array $peliculas, Genero $genero): void
{
    echo "Lista de peliculas por genero";
    $consulta = [];
    foreach ($peliculas as $p) {
        if ($p->getGenero() == $genero) {
            $consulta[] = $p;
        }
    }
    if(empty($consulta)){
        echo "No existe ninguna pelicula de ese genero";
    }else {
        foreach($consulta as $c){
            echo $c;
        }
    }
}




peliGenero($peliculas, Genero :: Accion);