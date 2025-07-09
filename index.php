<?php
    require_once "ciudades.php";
    require_once "funciones.php";
    $ciudades = [
        new Ciudad("Barcelona", 40000, 5000, Partido::izquierda),
        new Ciudad("Madrid", 50000, 4000, Partido::derecha),
        new Ciudad("Vigo", 20000, 6000, Partido::derecha),
        new Ciudad("Cordoba", 25000, 5000, Partido::izquierda)
    ];

    buscarCiudadMasGrande($ciudades);
    buscarCiudadesPartidoPolitico($ciudades, Partido::derecha);


?>