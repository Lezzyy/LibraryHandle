<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../model/userManager.php');
require('../entities/Book.php');
require('../entities/User.php');


// we decare a new book manager
$manager = new BookManager($bdd);


// we check if the $_GET is set
if(isset($_GET['id'])){

// we show the book selected
  $book = $manager->getOneBook($_GET['id']);

// we get the book's status
  $status = $book->getStatus();

  // if the status is available (equal to 1), we show a message
 if($status == 1){
   $message = 'Modify status';
 }

 // if the status is lent (equal to 0), we show a message and get the user name and surname

 else {
// we create a new user manager
  $userManager = new UserManager($bdd);
// we get the user id on the table booksList
  $bookUserId = $book->getUserId();

// we get the id of the table usersList
  $userId=$userManager->getUserId($bookUserId);

// we get the name and the surname of the user
  $userName=$userId->getName();
  $userSurname = $userId->getSurname();

// we show a message with user data
  $message = 'Lent by '.$userName.' '.$userSurname.'<br> Modify status :';
 }
}

// if the $_POST is set

if(isset($_POST['available'])){
  // we show the book selected
    $book = $manager->getOneBook($_POST['id']);

  // we get the previous status
    $previousStatus = $book->getStatus();

  // if the previous status is equal to the new, warning message
    if($_POST['available'] == $previousStatus){
      $message = 'This book is already available';
    }

    // if the previous status is different to the new, message ok
    if($previousStatus != 1){
      // when the book is available, the user id is NULL
      $userId= NULL;

      // we set the new user id
      $book->setUserid($userId);

      // we set the new status (when the book is available, the status is equal to 1)
      $book->setStatus(1);

      // we update the book with the new status and the new user id
        $update = $manager->updateStatus($book);
        $message = 'This book is available now';
    }
}





  include('../views/singleView.php');
