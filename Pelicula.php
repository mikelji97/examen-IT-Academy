<?php

enum Genero: string
{
    case Drama = "drama";
    case Comedia  = "comedia";
    case Accion = "accion";
    case CienciaFiccion = "ciencia ficcion";
    case Terror = "terror";
}

class Pelicula
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
    public function __toString(): string
    {
        $paisesStr = implode(", ", $this->paises);
        return "Nombre: {$this->nombre}, Genero: {$this->genero->value}, Países: {$paisesStr}\n";
    }
}