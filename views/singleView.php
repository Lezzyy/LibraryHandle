<?php
  include("template/header.php")
 ?>

 <div class="container">
   <a href="../controllers/index.php" class="btn btn-custom">Return</a>
   <div class="card text-center">
     <div class="card-header">
       <h2><?php echo $book->getTitle(); ?></h2>
     </div>
     <div class="card-block">
       <h4 class="card-title"><?php echo $book->getAuthor(); ?></h4>
       <p class="card-text"><?php echo $book->getAbstract(); ?></p>
       <p class="card-text">Published in : <?php echo $book->getReleasedate(); ?></p>
       <p class="card-text">Category : <?php echo $book->getCategory(); ?></p>
         <?php
     if($book->getStatus() == 1){
       echo "<p class='card-text available'>Statut : Available</p>";
     } else {
       echo "<p class='card-text lent'>Statut : Lent</p>";
     } ?>
     <h4 class="message"><?php echo $message ?></h4>
         <form class="" action="" method="post" id="modifyForm">
           <input type="hidden" name="id" value="<?php echo $book->getId(); ?>">
           <input type="hidden" name="available" value="1">
           <input class="btn btn-custom <?php if($book->getStatus() == 1){
             echo "disabled";} ?> " type="submit" name="register" value="Available">
         </form>

         <form class="" action="../controllers/lentForm.php" method="post" id="modifyForm">
           <input type="hidden" name="id" value="<?php echo $book->getId();?>">
           <input type="hidden" name="lent" value="0">
           <input class="btn btn-custom" type="submit" name="" value="Lent">
         </form>
       </div>
     </div>
     <div class="card-footer text-muted">





     </div>
   </div>
 </div>
