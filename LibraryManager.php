<?php
use Richardolaolu\Libraryapp\Book;
use Richardolaolu\Libraryapp\Library
;
require_once __DIR__ . '/vendor/autoload.php';

//$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925, "Fiction");


$library = new Library(title: "", author: "", year: "", genre: "", books: [new Book(title: "Central Library", author: "John Doe", year: 2020, genre: "public")], isRead: false);
$library->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925, "Fiction"));
$library->addBook(new Book("Fight Club", "Chuck Palahniuk", 1996, "Fiction"));
$library->addBook(new Book("1984", "George Orwell", 1949, "Dystopian"));
$library->addBook(new Book("Alice in Wonderland", "Lewis Carroll", 1865, "Fantasy"));
//echo $library->listBooks();
//echo $library->countBooks();
//echo $library->removeBook("fight club");
//echo $library->removeBook("the great gatsby");
//echo $library->findBooksByAuthor("george orwell");
//echo $library->getLibrarySummary();

$library->isbookread("The Great Gatsby", true);
echo $library->listBooks();


 