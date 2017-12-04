<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

$manager=new BookManager($bdd);


// if (isset($_POST)) {
//   $manager->getCategory($_POST['category']);
// }

// we use the request to see all the accounts
$books = $manager->getAllBooks();


include "../views/indexView.php";
 ?>
