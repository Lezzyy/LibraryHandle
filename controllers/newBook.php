<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

$manager = new BookManager($bdd);

// at the beginning we say to the user to complete the form
$error= 'Please complete form';

// if all $_POST are set

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['abstract']) && isset($_POST['releaseDate']) && isset($_POST['category']) && isset($_POST['status'])){

// we verify the year enter

  if(preg_match("#^[12][0-9]{3}$#", ($_POST['releaseDate']))){

// we securise all the data from the $_POST
  $newData = ['title'=>strtolower(htmlspecialchars($_POST['title'])), 'author'=>strtolower(htmlspecialchars($_POST['author'])), 'abstract'=>strtolower(htmlspecialchars($_POST['abstract'])), 'releaseDate'=>strtolower(htmlspecialchars($_POST['releaseDate'])), 'category'=>strtolower(htmlspecialchars($_POST['category'])), 'status'=>strtolower(htmlspecialchars($_POST['status']))];


// we creat a new object books which take in argument all the securised data

$newBook = new Book($newData);

// we use the function to add a book in db
$manager ->addBook($newBook);

// we go back to the home page
header('Location: ../controllers/index.php');

// if the year is not ok we show an error message
} else {
  $error= 'Please enter correct value';
  }
}

include("../views/newBookView.php");

 ?>
