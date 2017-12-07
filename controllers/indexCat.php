<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we create a new book manager
$manager=new BookManager($bdd);

// if the form is complete, we call the function which get the category and show the books of the category selected

if (isset($_POST['sendCategory'])) {
  $books =  $manager->getCategory($_POST['sendCategory']);

// if there are books on this category, we show a message
    if(!empty($books)){
      $message = 'Here are all the books on this category';
    }

// if there is no book on this category, we show another message
  else {
    $message = 'Sorry :( <br> We don\'t have books on this category';
  }
}


include('../views/indexCatView.php');
