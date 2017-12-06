<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../model/userManager.php');
require('../entities/Book.php');
require('../entities/User.php');

// we decare a new book manager
$manager = new BookManager($bdd);

// we check if the $_POST is set
if(isset($_POST['id'])){
// we show the book selected
  $book = $manager->getOneBook($_POST['id']);
// we get the previous status
  $previousStatus = $book->getStatus();

// if the previous status is equal to the new, we show a warn message
  if($previousStatus == $_POST['lent']){
  $warn = 'This book is already lent';

// if the previous status is different to the new, we show an ok message
} if ($previousStatus !=  $_POST['lent']){
  $warn = 'This book is available to be lent';
}
// else{
//   echo 'no book selected';
//   }
}

$userManager = new UserManager($bdd);

  if (isset($_POST['userNumber'])){
  $number=htmlspecialchars($_POST['userNumber']);
  $userNumber = $userManager->getUserNumber($number);
  // var_dump($userNumber);

  // with the user number we could get the user id
  $userId=$userNumber->getIdUser();

  // we set the user id
  $book->setUserid($userId);

  // we set the status to 0
  $book->setStatus(0);

// we update the book with the new status and the new user id
  $update = $manager->updateStatus($book);

// include('single.php');
header("Location: single.php?id=".$book->getId()."");

}



include('../views/lentFormView.php');
?>
