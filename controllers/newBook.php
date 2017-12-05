<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');
$manager = new BookManager($bdd);



// if all $_POST are set

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['abstract']) && isset($_POST['releaseDate']) && isset($_POST['category']) && isset($_POST['status'])){

// we securise all the data from the $_POST
  $newData = [strtolower(htmlspecialchars($_POST['title'])), strtolower(htmlspecialchars($_POST['author'])), strtolower(htmlspecialchars($_POST['abstract'])), strtolower(htmlspecialchars($_POST['releaseDate'])), strtolower(htmlspecialchars($_POST['category'])), strtolower(htmlspecialchars($_POST['status']))
  ];

// $POST = htmlspecialchars($_POST[);
// $input=strtolower($POST);

// we creat a new object books which take in argument all the securised data

$newBook = new Book($newData);

// we use the function to add a book in bdd
$manager -> addBook($newBook);
var_dump($manager -> addBook($newBook));
// header('Location: ../views/indexView.php');
} else {
  $error= 'Please complete form';
}
include("../views/newBookView.php");

 ?>
