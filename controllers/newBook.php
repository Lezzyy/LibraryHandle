<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');
$manager = new BookManager($bdd);

  // $newData = ['title'=>strtolower(htmlspecialchars($_POST['title'])), 'author'=>strtolower(htmlspecialchars($_POST['author'])), 'abstract'=>strtolower(htmlspecialchars($_POST['abstract'])), 'releaseDate'=>strtolower(htmlspecialchars($_POST['releaseDate'])), 'category'=>strtolower(htmlspecialchars($_POST['sendCategory'])), 'status'=>strtolower(htmlspecialchars($_POST['status']))];
  //
// if all $_POST are set

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['abstract']) && isset($_POST['releaseDate']) && isset($_POST['category']) && isset($_POST['status'])){

// we securise all the data from the $_POST
  $newData = ['title'=>strtolower(htmlspecialchars($_POST['title'])), 'author'=>strtolower(htmlspecialchars($_POST['author'])), 'abstract'=>strtolower(htmlspecialchars($_POST['abstract'])), 'releaseDate'=>strtolower(htmlspecialchars($_POST['releaseDate'])), 'category'=>strtolower(htmlspecialchars($_POST['category'])), 'status'=>strtolower(htmlspecialchars($_POST['status']))];

// we creat a new object books which take in argument all the securised data

$newBook = new Book($newData);

// we use the function to add a book in bdd
$manager ->addBook($newBook);
header('Location: ../controllers/index.php');

} else {
  $error= 'Please complete form';
}
include("../views/newBookView.php");

 ?>
