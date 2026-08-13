<?php
    class Library{
        private string $isb;
        private string $title;
        private string $autor;
        private int $publish_year;
        private bool $disponibility;

        public function __construct($isb, $title, $autor, $publish_year, $disponibility = true) {
            $this->isb = $isb;
            $this->title = $title;
            $this->autor = $autor;
            $this->publish_year = $publish_year;
            $this->disponibility = $disponibility;
        }

        // getters and setters
        public function getIsb(){
            return $this->isb;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getPublish_year(){
            return $this->publish_year;
        }

        public function getDisponibility(){
            return $this->disponibility;
        }

        public function setIsb($isb){
            $this->isb = $isb;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function setPublish_year($publish_year){
            $this->publish_year = $publish_year;
        }

        public function setDisponibility($disponibility){
            $this->disponibility = $disponibility;
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

        public function returnBook(){
            $this->disponibility = true;
        }

        public function printBook(){
            return "<br> Titulo: ". $this->getTitle() . 
            "<br> Autor: ". $this->getAutor() .
            "<br> ISBN: ". $this->getIsb() .
            "<br> Año de publicación: ". $this->getPublish_year() .
            "<br> Disponibilidad: ". ($this->getDisponibility() ? "Disponible" : "No disponible") ."<br>";
        }
    }
    echo "Creando libro...";
    echo "<br>";
    $book = new Library("978-3-16-148410-0", "El Principito", "Antoine de Saint-Exupéry", 1943, false);
    echo $book->printBook();
    echo "<br>";

    echo "Prestando libro...";
    echo "<br>";
    if ($book->getDisponibility()) {
        $book->lendBook();
        echo "El libro ha sido prestado con éxito.";
        echo $book->printBook();
    } else {
        echo "El libro no esta disponible.";
    }

    echo "<br>";
    echo "Regresando libro...";
    echo "<br>";
    $book->returnBook();
    echo $book->printBook();
?>
