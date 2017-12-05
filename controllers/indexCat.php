<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we create a new book manager
$manager=new BookManager($bdd);

// if the form is complete, we call the function which get the category and show the books of the catagory selected

if (isset($_POST['sendCategory'])) {
  $books =  $manager->getCategory($_POST['sendCategory']);

    if(!empty($books)){
      $message = 'Here are all the books on this category';
    }

  else {
    $message = 'Sorry :( <br> We don\'t have books on this category';
  }
}
// if(count($_POST['sendCategory'])<=0){
//   $message = 'no selection';
// } else {
//   $books =  $manager->getCategory($_POST['sendCategory']);
//   $message = 'Classify by category';
//   var_dump(($_POST['sendCategory']));
// }

include('../views/indexCatView.php');
