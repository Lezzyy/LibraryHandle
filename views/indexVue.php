<?php
  include("template/header.php")
 ?>

<div class="container">
  <a href="#" class="btn btn-custom">Add book</a>
  <a href="#" class="btn btn-custom">List of users</a>


  <h2 class="text-center">List of books</h2>
  <div class="dropdown">
    <button type="button" class="btn btn-custom btn-sm dropdown-toggle" data-toggle="dropdown">
      Category
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Romance</a>
      <a class="dropdown-item" href="#">Adventure</a>
      <a class="dropdown-item" href="#">Thriller</a>
    </div>
  </div>

  <div class="row">
    <div class="card .col-sm-4 .col-md-4 .col-lg-4 .col-xl-4" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-custom">See details</a>
      </div>
    </div>
  </div>
</div>


 <?php
   include("template/footer.php")
  ?>
