<?php

    function buscarCiudadMasGrande(array $ciudades) {
        $ciudadGrande = $ciudades[0];
        for($i = 1; $i < count($ciudades); $i++) {
            if ($ciudades[$i]->getSuperficie() > $ciudadGrande-> getSuperficie()) {
                $ciudadGrande = $ciudades[$i]; 
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
