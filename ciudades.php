<?php
    enum Partido: string {
        case derecha = "derecha" ;
        case izquierda = "izquierda";
    }
    Class Ciudad {
        private string $nombre;
        private int $numHabitantes;
        private int $superficie;
        private Partido $partido;

        public function __construct(string $nombre, int $numHabitantes, int $superficie, Partido $partido){
            $this->nombre = $nombre;
            $this->numHabitantes = $numHabitantes;
            $this->superficie = $superficie;
            $this->partido = $partido;

        } 

        public function getNombre() {
            return $this->nombre;
        }
        public function getNumHabitantes() {
            return $this->numHabitantes;
        }
        public function getSuperficie() {
            return $this->superficie;
        }
        public function getPartido() {
            return $this->partido;
        }
        
    }
?>