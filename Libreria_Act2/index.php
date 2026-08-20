<?php
    require_once 'src/Book.php';
    require_once 'src/Member.php';
    require_once 'src/Loan.php';
    use Libreria_Act2\Book;
    use Libreria_Act2\Member;
    use Libreria_Act2\Loan;

    $book=new Book("978-3-16-148410-0", "El Principito", "Antoine de Saint-Exupéry", 1943);
    $book->appendCategory("Ficción");
    $book->appendCategory("Clásico");
    echo "<h2>Información del libro:</h2>";
    $book->showBookInfo();
    $member=new Member("Carlos", "Villalba");
    echo "<h2>Información del miembro:</h2>";
    $member->showMemberInfo();
    echo "<br>";
    echo "Haciendo un préstamo de libro...<br>";
    $loan=new Loan($member, $book);
    echo "<h2>Información del libro actual:</h2>";
    $book->showBookInfo();
    echo "<h2>Libros del miembro:" . $member->getName() . " " . $member->getLast_name() . "</h2>";
    $member->showBorrowedBooks();
?>