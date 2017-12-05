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

  require('../views/singleView.php');

  }
  // $previousStatus = $manager->getStatus();
// }

// if the form is complete and have a value different of 1 (which is different from available), a new form appears.
//   if(isset($_POST['lent'])){
//     if($_POST['lent'] != 1){
//       header('Location : lentForm.php');
//
//     }
// }


// }else{
// // if not error message
//   echo 'no slection';
