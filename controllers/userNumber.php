<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../model/userManager.php');
require('../entities/Book.php');
require('../entities/User.php');


$userManager = new UserManager($bdd);

  if (isset($_POST['userNumber'])){
  $number=htmlspecialchars($_POST['userNumber']);

  // we get the user number
  $userNumber = $userManager->getUserNumber($number);
  // var_dump($userNumber);
  // header('Location : lentForm.php');

  // with the user number we could get the user id
  $userId=$userNumber->getIdUser();
  var_dump($userId);

  // $bookManager = new BookManager($bdd);
  // $IdUser=$bookManager->findUserid($userId);
  //
  // var_dump($IdUser);
  // $status = $IdUser->getStatus();



  }


// include('../views/lentFormView.php');
