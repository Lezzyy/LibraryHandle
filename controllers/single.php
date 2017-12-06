<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we decare a new book manager
$manager = new BookManager($bdd);



// we check if the $_GET is set
if(isset($_GET['id'])){
// we show the account selected
  $book = $manager->getOneBook($_GET['id']);
  // $previousStatus=$book ->getStatus();
}
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
      // when the book is avalable, the user id is NULL
      $userId= NULL;

      // we set the new user id
      $book->setUserid($userId);

      // we set the new status (when the book is available, the status is equal to 1)
      $book->setStatus(1);
    
      // we update the book with the new status and the new user id
        $update = $manager->updateStatus($book);
    }


}

//
// if(isset($_POST['id'])){
//   var_dump($_POST['id']);
    // we show the account selected
    //   $book = $manager->getOneBook($_POST['id']);
    //
    // we get the previous status
    //   $previousStatus = $book->getStatus();
    //
    // if the previous status is equal to the new, warning message
    //   if($_POST['available'] == $previousStatus){
    //     $message = 'This book is already available';
    //   }
    //
    //   if the previous status is different to the new, message ok
    //   if($_POST['available'] != $previousStatus){
    //     echo 'This book is available now';
    //     $userId= $book->getUserId();
    //     $manager->findUserid($userId);
    //     var_dump($userId);
    //   }
  //   }
  //
  // /


  include('../views/singleView.php');
