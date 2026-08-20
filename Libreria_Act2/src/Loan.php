<?php
    namespace Libreria_Act2;
    Class Loan {
        private $member;
        private $book;

        public function __construct(Member $member, Book $book) {
            $this->member = $member->BorrowBook($book);
            $this->book = $book->lendBook();
        }
    }
?>