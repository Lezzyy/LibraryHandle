<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

$manager = new BookManager($bdd);

if(isset($_GET['id'])){
// we show the account selected
  $book = $manager->getOneBook($_GET['id']);
  require('../views/singleView.php');
}else{
// if not error message
  echo 'no slection';
}
