<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we create a new book manager
$manager=new BookManager($bdd);


// we use the request to see all the books
$books = $manager->getAllBooks();


include "../views/indexView.php";
 ?>
