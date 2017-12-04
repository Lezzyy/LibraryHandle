<?php
  include("template/header.php")
 ?>

 <div class="container">
   <div class="card text-center">
     <div class="card-header">
       <h2><?php echo $book->getTitle(); ?></h2>
     </div>
     <div class="card-block">
       <h4 class="card-title"><?php echo $book->getAuthor(); ?></h4>
       <p class="card-text"><?php echo $book->getAbstract(); ?></p>
       <p class="card-text">Published in : <?php echo $book->getReleasedate(); ?></p>
       <p class="card-text">Category : <?php echo $book->getCategory(); ?></p>
       <p class="card-text">Status :
         <?php
     if($book->getStatus() == 1){
       echo "available";
     } else {
       echo "lent";
     } ?>
   </p>
     <h4>Modify status</h4>
         <form class="" action="../controllers/single.php" method="post" id="modifyForm">
           <input type="hidden" name="id" value="<?php echo $book->getId();?>">
           <input type="hidden" name="available" value="1">
           <input class="btn btn-custom" type="submit" name="" value="Available">
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
