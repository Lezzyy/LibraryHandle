<?php
  include("template/header.php")
 ?>

<main>
  <div class="container">
    <a href="../controllers/index.php" class="btn btn-custom">Return</a>
    <div class="form-group" id="modifyForm">
    <h2 class="text-center">Add a book</h2><br>

      <form class="d-flex flex-column justify-content-center" action="../controllers/newBook.php" method="post">
        <p class="text-center"><?php echo $error; ?></p>
        <input type="text" name='title' class="form-control" value="" placeholder="Title" required="required"><br>
        <input type="text" name='author' class="form-control" value="" placeholder="Author" required="required"><br>
        <textarea name="abstract" rows="5" cols="10" required="required"></textarea>
        <input type="text" name='releaseDate' class="form-control" value="" placeholder="Published year (ex : 2017)" required="required"><br>

        <select name="category">
          <?php foreach (Book::category as $key => $value): ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
          <?php endforeach; ?>
        </select>

        <input type="hidden" name='status' class="form-control" value="1" placeholder="Status"><br>

        <input type='submit' name='register' value='Add a book' class="btn btn-custom">
      </form>
    </div>
  </div>
</main>
