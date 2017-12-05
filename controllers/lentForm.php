<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we decare a new book manager
$manager = new BookManager($bdd);


// we check if the $_GET is set
if(isset($_POST['id'])){
// we show the account selected
  $book = $manager->getOneBook($_POST['id']);

}if (isset($_POST['userNumber'])){
  $number=htmlspecialchars($_POST['userNumber']);

}



include('../views/lentFormView.php');
?>
