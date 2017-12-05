<?php

class BookManager {
  private $db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function getDb()
  {
      return $this->db;
  }

  /**
   * @param mixed $db
   */
  public function setDb($db)
  {
      $this->db = $db;
  }

// request to get all books

public function getAllBooks(){

  $response=$this->db->query('SELECT * FROM booksList');
  $books=$response->fetchAll(PDO::FETCH_ASSOC);
  foreach ($books as $key => $value) {
    $books[$key]= new Book($value);
  }
  return $books;
}

// request to get one book

public function getOneBook($id){
  $response=$this->db->prepare('SELECT * FROM booksList WHERE id=:id');
  $response->execute(array(
    'id'=> $id
  ));
  $book=$response->fetch(PDO::FETCH_ASSOC);
  $book = new Book($book);
  return $book;
}



  // request to add a book

  public function addBook($book){
    $response=$this->db->prepare('INSERT INTO booksList(title, author, abstract, releaseDate, category, status, userId) VALUES(:title, :author, :abstract, :releaseDate, :category, :status, :userId)');
    $response->bindValue(':title', $book->getTitle(), PDO::PARAM_STR);
    $response->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
    $response->bindValue(':abstract', $book->getAbstract(), PDO::PARAM_STR);
    $response->bindValue(':releaseDate', $book->getReleasedate());
    $response->bindValue(':category', $book->getCategory());
    $response->bindValue(':status', $book->getStatus(), PDO::PARAM_STR);
    $response->bindValue(':userId', $book->getUserId());
    $response->execute();
  }

// request to select category

public function getCategory($category){
  $response=$this->db->prepare('SELECT * FROM booksList WHERE category=:category');
  $response->execute(array(
    'category'=>$category
  ));
  $book=$response->fetchAll(PDO::FETCH_ASSOC);
  foreach ($book as $key => $value) {
  $book[$key]= new Book($value);
    }
    return $book;
  }

// request to join user Id in the two Tables

function getUserid($getUserId){
  include('db.php');
    $reponse = $bdd->prepare('SELECT * FROM booksList b INNER JOIN usersList u ON u.idUser = b.userId and u.id = ?');
    $reponse->execute(array($getUserId));
    return $reponse->fetchAll();
}



// request to update the status and user id when the status is modify
public function updateStatus($status){
  $response=$this->db->prepare('UPDATE booksList SET status=:status, userId=:userId WHERE id=:id');
  $response->bindValue(':status', $status->getStatus());
  $response->bindValue(':userId', $status->getUserId());
  $response->bindValue(':id', $status->getId());
  $response->execute();
}


}



 ?>
