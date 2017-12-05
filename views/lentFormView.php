<?php
  include("template/header.php");
 ?>

 <main>
   <div class="container">
     <h2 class="text-center warn"><?php echo $warn; ?></h2>
     <h2 class="text-center">Book to loan : <?php echo $book->getTitle(); ?> </h2>
     <p class=text-center>by <?php echo $book->getAuthor() ; ?> </p>
     <div class="form-group" id="modifyForm">
     <h3 class="text-center">User data</h3><br>
       <form class="d-flex flex-column justify-content-center" action="../controllers/newBook.php" method="post">
         <input type="text" name='userNumber' class="form-control" value="" placeholder="User number"><br>
         <input type="hidden" name='id' class="form-control" value="<?php $book->getId(); ?>"><br>
         <p class="text-center"><?php echo $book->getStatus() ; ?></p>
         <input type="hidden" name="lent" value="0">
         <input type='submit' name='register' value='Register' class="btn btn-custom">
       </form>
     </div>
   </div>
 </main>
