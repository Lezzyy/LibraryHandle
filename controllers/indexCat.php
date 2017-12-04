<?php
require('../model/connection.php');
require('../model/bookManager.php');
require('../entities/Book.php');

$manager=new BookManager($bdd);

if (isset($_POST['sendCategory'])) {
$books =  $manager->getCategory($_POST['sendCategory']);
  include('../views/indexCatView.php');
}else {
}
