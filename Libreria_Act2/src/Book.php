<?php
    namespace Libreria_Act2;
    use ArrayObject;
    Class Book {
        private string $isb;
        private string $title;
        private string $autor;
        private $category;
        private int $publish_year;
        private bool $disponibility;

        public function __construct($isb, $title, $autor, $publish_year, $disponibility = true, $category = []) {
            $this->isb = $isb;
            $this->title = $title;
            $this->autor = $autor;
            $this->publish_year = $publish_year;
            $this->category = new ArrayObject($category);
            $this->disponibility = $disponibility;
        }

        // getters
        public function getIsb(){
            return $this->isb;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getCategoty(){
            return $this->category;
        }

        public function getPublish_year(){
            return $this->publish_year;
        }

        public function getDisponibility(){
            return $this->disponibility;
        }
        
        // setters
        public function setDisponibility($disponibility){
            $this->disponibility = $disponibility;
        }

        public function appendCategory($category) {
            $this->category->append($category);
        }

        // functions
        public function lendBook(){
            if ($this->disponibility == true){
                $this->disponibility = false;
                return true;
            }else{
                return false;
            }
        }

        /* public function returnBook(){
            $this->disponibility = true;
        } */
        
        public function showCategory() {
            $iterator = $this->category->getIterator();
            foreach ($iterator as $category) {
                echo $category . "<br>";
            }
        }

        public function showBookInfo() {
            echo "ISBN: " . $this->isb . "<br>";
            echo "Título: " . $this->title . "<br>";
            echo "Autor: " . $this->autor . "<br>";
            echo "Año de publicación: " . $this->publish_year . "<br>";
            echo "Disponibilidad: " . ($this->disponibility ? "Disponible" : "No disponible") . "<br>";
            echo "Categorías: <br>";
            $this->showCategory();
        }
    }
?>