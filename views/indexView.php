<?php
  include("template/header.php");
 ?>

<div class="container list">
  <a href="../controllers/newBook.php" class="btn btn-custom">Add book</a>
  <a href="../controllers/usersList.php" class="btn btn-custom">List of users</a>


  <h2 class="text-center">List of books</h2>
  <form class="" action="../controllers/indexCat.php" method="post" id="modifyForm">
    <select name="sendCategory">
      <option selected disabled="">Choose a category</option>
      <?php foreach (Book::category as $key => $value): ?>
        <option value="<?php echo $value ?>"><?php echo $value ;?></option>
      <?php endforeach; ?>
    </select>
    <input type="submit" name="classify" value="classify" class="btn btn-custom">
  </form>

<div class="row">
    <?php
    foreach ($books as $book)
    {
      ?>
  <div class="row">
    <div class="card .col-sm-4 .col-md-4 .col-lg-4 .col-xl-4" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title text-center">Title : <?php echo $book->getTitle(); ?></h4>
        <p class="card-text">Author : <?php echo $book->getAuthor(); ?></p>
        <p class="card-text">Release Date : <?php echo $book->getReleasedate(); ?></p>
        <?php
        if($book->getStatus() == 1){
          echo "<p class='card-text available'>Status : Available</p>";
        } else {
          echo "<p class='card-text lent'>Status : Lent</p>";
        } ?>
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
</div>
 <?php
  //  include("template/footer.php")
  ?>
