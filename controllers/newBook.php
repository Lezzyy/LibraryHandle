<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

$manager = new BookManager($bdd);


// if all $_POST are set

if(isset($_POST['title']) && isset($_POST['author']) && isset($_POST['abstract']) && isset($_POST['releaseDate']) && isset($_POST['category']) && isset($_POST['status'])){

  $newData = [
    'title' => strtolower(htmlspecialchars($_POST['title'])),
    'author' => strtolower(htmlspecialchars($_POST['author'])),
    'abstract' => strtolower(htmlspecialchars($_POST['abstract'])), 'releaseDate' => strtolower(htmlspecialchars($_POST['releaseDate'])), 'category' => strtolower(htmlspecialchars($_POST['category'])),
    'status' => strtolower(htmlspecialchars($_POST['status']))
  ];

// $POST = htmlspecialchars($_POST['title']);
// $input=strtolower($POST);

$newBook = new Book($newData);
$manager -> addBook($newBook);

}

  include("../views/newBookView.php");
 ?>
