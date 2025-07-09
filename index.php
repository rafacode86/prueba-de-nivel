<?php
    require_once "ciudades.php";
    require_once "funciones.php";
    /*$ciudades = [
        new Ciudad("Barcelona", 40000, 5000, Partido::izquierda),
        new Ciudad("Madrid", 50000, 4000, Partido::derecha),
        new Ciudad("Vigo", 20000, 6000, Partido::derecha),
        new Ciudad("Cordoba", 25000, 5000, Partido::centro)
    ];*/
    $ciudades [] = crearRegistroCiudad("Barcelona", 40000, 5000, Partido::izquierda);
    $ciudades [] = crearRegistroCiudad("Madrid", 50000, 4000, Partido::derecha);
    $ciudades [] = crearRegistroCiudad("Vigo", 20000, 6000, Partido::derecha);
    $ciudades [] = crearRegistroCiudad("Cordoba", 25000, 5000, Partido::centro);
    
    buscarCiudadMasGrande($ciudades);
    buscarCiudadesPartidoPolitico($ciudades, Partido::derecha);
    buscarCiudadesPartidoPolitico($ciudades, Partido::centro);
    buscarCiudadesPartidoPolitico($ciudades, Partido::izquierda);

?>