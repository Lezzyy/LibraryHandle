<?php

class User {
  private $idUser;
  private $name;
  private $surname;
  private $email;
  private $userNumber;



  public function __construct($data){
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
      foreach ($data as $key => $value)
      {
          // we get setter's name which correspond to the attribut
          $method = 'set'.ucfirst($key);
          // if the setter exist
          if (method_exists($this, $method))
          {
              // we call the setter.
              $this->$method($value);
          }
      }
  }

// getters

  public function getIdUser(){
    return $this ->idUser;
  }

  public function getName(){
    return $this ->name;
  }

  public function getSurname(){
    return $this ->surname;
  }

  public function getEmail(){
    return $this ->email;
  }

  public function getUsernumber(){
    return $this->userNumber;
  }

// setters

  public function setIdUser(int $idUser){
  $this->idUser = $idUser;
  }

  public function setName($name){
  $this->name = $name;
  }

  public function setSurname($surname){
  $this->surname = $surname;
  }

  public function setEmail($email){
  $this->email = $email;
  }

  public function setUsernumber(int $userNumber){
    $this->userNumber = $userNumber;
  }

}




 ?>
