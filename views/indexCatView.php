<?php
  include("template/header.php")
 ?>
 <div class="container">
   <a href="../controllers/index.php" class="btn btn-custom">Return</a>
   <h2 class="text-center">Classify by category</h2>
   <form class="" action="../controllers/indexCat.php" method="post">
     <select name="sendCategory">
       <?php foreach (Book::category as $key => $value): ?>
         <option value="<?php echo $value ?>" name="cat"><?php echo $value ;?></option>
       <?php endforeach; ?>
     </select>
     <input type="submit" name="classify" value="classify" class="btn btn-custom">
   </form>

 <?php
 foreach ($books as $book)
 {
  ?>
  <div class="row">
   <div class="card .col-sm-4 .col-md-4 .col-lg-4 .col-xl-4" style="width: 20rem;">
     <div class="card-block">
       <h4 class="card-title">Title : <?php echo $book->getTitle(); ?></h4>
       <p class="card-text">Author : <?php echo $book->getAuthor(); ?></p>
       <p class="card-text">Release Date : <?php echo $book->getReleasedate(); ?></p>
       <p class="card-text" name='status'>Status :
           <?php
         if($book->getStatus() == 1){
           echo "available";
         } else {
           echo "lent";
         }
         ?>
       </p>
       <p class="card-text" name="category">Category : <?php echo $book->getCategory(); ?></p>
       <?php
       echo "<a class='btn btn-custom' href='../controllers/single.php?id=".$book->getId()."'>See details</a>";
        ?>
     </div>
   </div>
  </div>
<?php
}
?>
</div>
