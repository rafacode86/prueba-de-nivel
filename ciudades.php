<?php

$ciudades = [];    
    function crearRegistroCiudad (string $nombre, int $numHabitantes, int $superficie, Partido $partido): Ciudad{
        echo "Su ciudad ha sido creada";
        return new Ciudad($nombre,$numHabitantes, $superficie, $partido);
    }
    function buscarCiudadMasGrande(array $ciudades) {
        $ciudadGrande = $ciudades[0];
        for($i = 1; $i < count($ciudades); $i++) {
            if ($ciudades[$i]->getSuperficie() > $ciudadGrande-> getSuperficie()) {
                $ciudadGrande = $ciudades[$i]; 
            }
        }
        echo "---La ciudad mas grande es: {$ciudadGrande->getNombre()}\n";
        }
    

    function buscarCiudadesPartidoPolitico(array $ciudades, Partido $partido) {
        echo "---Ciudades con partido polito de " . $partido->value . ": \n";
        $orientacionPolitica = false;
        foreach ($ciudades as $ciudad) {
            if ($ciudad->getPartido() === $partido){
                $orientacionPolitica = true;
                echo "{$ciudad->getNombre()}\n";
            }
        }
    }
?>
