<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../model/userManager.php');
require('../entities/Book.php');
require('../entities/User.php');


// we decare a new book manager
$manager = new BookManager($bdd);


// $message='Modify status :';

// we check if the $_GET is set
if(isset($_GET['id'])){
// we show the account selected
  $book = $manager->getOneBook($_GET['id']);
  $status = $book->getStatus();
 if($status == 1){
   $message = 'Modify status';
 }
 else{
  $userManager = new UserManager($bdd);
  $bookUserId = $book->getUserId();
  $userId=$userManager->getUserId($bookUserId);
  $userName=$userId->getName();
  $userSurname = $userId->getSurname();

  $message = 'Lent by '.$userName.' '.$userSurname.'<br> Modify status :';
 }
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

//
// if(isset($_POST['id'])){
//   var_dump($_POST['id']);
    // we show the account selected



  include('../views/singleView.php');
