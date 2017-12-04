<?php
require('../model/connection.php');
require('../model/userManager.php');
require('../entities/User.php');

// declare a new user manager
$manager=new UserManager($bdd);


// we use the request to see all the books
$users = $manager->getAllUsers();

// we show the user list page
include "../views/usersListView.php";


 ?>
