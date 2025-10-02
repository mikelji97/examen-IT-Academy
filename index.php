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
    private array $paises;

    public function __construct(string $nombre, Genero $genero, int $duracion, int $añoEstreno, array $paises)
    {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->añoEstreno = $añoEstreno;
        $this->paises = $paises;
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
    public function getPaises(): array
    {
        return $this->paises;
    }

    public function __toString()
    {
        $paisesStr = implode(", ", $this->paises);
        return "Nombre: {$this->nombre}, Genero: {$this->genero->value}, duracion: {$this->duracion}, Año de estreno: {$this->añoEstreno}, pais o paises: {$paisesStr} \n";
    }
}
$peliculas = [
    new Peliculas("El guardian invisible", Genero::Accion, 220, 2002, ["España"]),
    new Peliculas("seven", Genero::Accion, 156, 1997, ["Italia","Brasil"]),
    new Peliculas("el indomable will hunting", Genero::Terror, 180, 2025, ["Portugal","Ecuador"]),
    new Peliculas("a todo gas", Genero::Comedia, 156, 1992, ["Belgica", "Estonia"]),
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