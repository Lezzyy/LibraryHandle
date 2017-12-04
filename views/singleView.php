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
         <form class="" action="../controllers/single.php" method="post">
           <select name="sendStatus">
             <?php foreach (Book::status as $key => $value): ?>
               <option value="<?php echo $value ?>"><?php echo $value ?></option>
             <?php endforeach; ?>
           </select>
           <input type="submit" name="" value="modify">
          
         </form>
       </div>

     </div>
     <div class="card-footer text-muted">


     </div>
   </div>
 </div>
