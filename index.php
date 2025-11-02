<?php

require_once 'Catalogo.php';

$catalogo = new Catalogo();

$catalogo->agregarPelicula(new Pelicula("El guardian invisible", Genero::Accion, 220, 2002, ["España"]));
$catalogo->agregarPelicula(new Pelicula("seven", Genero::Accion, 156, 1997, ["Italia", "Brasil"]));
$catalogo->agregarPelicula(new Pelicula("el indomable will hunting", Genero::Terror, 180, 2025, ["Portugal", "Ecuador"]));
$catalogo->agregarPelicula(new Pelicula("a todo gas", Genero::Comedia, 156, 1992, ["Belgica", "Estonia"]));


$catalogo->peliGenero(Genero::Accion);
$catalogo->pelisMultipais();
