<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

// we create a new book manager
$manager=new BookManager($bdd);

// if the form is complete, we call the function which get the category and show the books on the catagory selected

if (isset($_POST['sendCategory'])) {
$books =  $manager->getCategory($_POST['sendCategory']);
  include('../views/indexCatView.php');
}else {
}
