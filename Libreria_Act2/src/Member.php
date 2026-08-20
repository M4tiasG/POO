<?php
    namespace Libreria_Act2;
    Class Member{
        private string $name;
        private string $last_name;
        private $borrowed_books;

        public function __construct($name, $last_name){
            $this->name = $name;
            $this->last_name = $last_name;
            $this->borrowed_books = array();
        }

        // getters
        public function getName(){
            return $this->name;
        }

        public function getLast_name(){
            return $this->last_name;
        }

        public function getBorrowed_books(){
            return $this->borrowed_books;
        }

        //functions
        public function showMemberInfo(){
            echo "Nombre: " . $this->getName() . "<br>";
            echo "Apellido: " . $this->getLast_name() . "<br>";
        }

        public function borrowBook(Book $book){
            $this->borrowed_books[] = $book;
            echo "El libro " . $book->getTitle() . " ha sido prestado a " . $this->getName() . " " . $this->getLast_name() . "<br>";
        }

        public function showBorrowedBooks(){
            if (count($this->borrowed_books) > 0){
                echo "Libros prestados por " . $this->getName() . " " . $this->getLast_name() . ":<br>";
                foreach ($this->borrowed_books as $book){
                    echo "- " . $book->getTitle() . "<br>";
                }
            } else {
                echo $this->getName() . " " . $this->getLast_name() . " no tiene libros prestados.<br>";
            }
        }
    }
?>