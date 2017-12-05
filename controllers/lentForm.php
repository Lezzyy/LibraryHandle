<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we decare a new book manager
$manager = new BookManager($bdd);


// we check if the $_POST is set
if(isset($_POST['id'])){
// we show the account selected
  $book = $manager->getOneBook($_POST['id']);

// we get the previous status
  $previousStatus = $book->getStatus();

// if the previous status is equal to the new, we show a warn message
  if($previousStatus == $_POST['lent']){
  $warn = 'The book is already lent';

// if the previous status is different to the new, we show an ok message
} if ($previousStatus !=  $_POST['lent']){
  $warn = 'The book is available to be lent';
}

  if (isset($_POST['userNumber'])){
  $number=htmlspecialchars($_POST['userNumber']);
  }
}



include('../views/lentFormView.php');
?>
