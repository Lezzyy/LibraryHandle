<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we decare a new book manager
$manager = new BookManager($bdd);


var_dump($_POST['available']);

if(isset($_POST['available'])){
  // we show the account selected
    $book = $manager->getOneBook($_POST['id']);

  // we get the previous status
    $previousStatus = $book->getStatus();

  // if the previous status is equal to the new, warning message
    if($_POST['available'] == $previousStatus){
      $message = 'This book is already available';
    }

    // if the previous status is different to the new, message ok
    if($_POST['available'] != $previousStatus){
      echo 'This book is available now';
      $userId= $book->getUserId();
      $manager->findUserid($userId);
      var_dump($userId);
    }


}

 ?>
