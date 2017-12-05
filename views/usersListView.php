<?php
include("template/header.php");
 ?>

<main>
<div class="container">
  <a href="../controllers/index.php" class="btn btn-custom">Return</a>
  <h2 class="text-center">Users list</h2>
 <div class="row">
     <?php
     foreach ($users as $user)
     {
       ?>
   <div class="row">
     <div class="card .col-sm-4 .col-md-4 .col-lg-4 .col-xl-4" style="width: 20rem;">
       <div class="card-block">
         <p class="card-text">User number : <?php echo $user->getUsernumber(); ?></p>
         <p class="card-text">User name : <?php echo $user->getName(); ?></p>
         <p class="card-text">User surname : <?php echo $user->getSurname(); ?></p>
         <p class="card-text">User mail address : <?php echo $user->getEmail(); ?></p>
       </div>
     </div>
   </div>
   <?php
 }
    ?>
</div>
</div>
</main>
