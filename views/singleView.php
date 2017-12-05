<?php
  include("template/header.php")
 ?>

 <div class="container">
   <a href="../controllers/index.php" class="btn btn-custom">Return</a>
   <div class="card text-center">
     <div class="card-header">
       <p class="card-text">stat : <?php echo $book->getStatus(); ?></p>

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
         <form class="" action="../controllers/available.php" method="post" id="modifyForm">
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




       <!-- Trigger the modal with a button -->
       <!-- <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#myModal">Available</button> -->

       <!-- Modal -->
       <!-- <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog"> -->

           <!-- Modal content-->
           <!-- <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title"></h4>
             </div>
             <div class="modal-body">
               <p>Some text in the modal.</p>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
           </div> -->

         <!-- </div>
       </div> -->

     </div>
   </div>
 </div>
