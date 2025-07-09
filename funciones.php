<?php

    function buscarCiudadMasGrande(array $ciudades) {
        $ciudadGrande= $ciudades[0];
        foreach($ciudades as $ciudad) {
            if ($ciudad->getSuperficie() > $ciudadGrande-> getSuperficie()) {
                $ciudadGrande = $ciudad; 
            }
        }
        echo "la ciudad mas grande es {$ciudadGrande->getNombre()}\n";
    }

    function buscarCiudadesPartidoPolitico(array $ciudades, Partido $partido) {
        $orientacionPolitica = false;
        foreach ($ciudades as $ciudad) {
            if ($ciudad->getPartido() === $partido){
                $orientacionPolitica = true;
                echo "{$ciudad->getNombre()}\n";
            }
        }
    }
?>
