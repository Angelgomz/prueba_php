<?php 
 require_once('ConexionModels.php');
    class Productos{ 
        protected $id;
        protected $titulo;
        protected $genero;
        protected $consola;
        

        public function __construct($id,$titulo,$genero,$consola) {
           $this->getId= $id;
           $this->getTitulo = $titulo;
           $this->getGenero = $genero;
           $this->getConsola = $consola;
        }

        public function getId(){
            return $this->id;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function getConsola(){
            return $this->consola;
        }
}
?>