<?php
// we create a book object

class Book{
  protected $id;
  protected $title;
  protected $author;
  protected $abstract;
  protected $releaseDate;
  protected $category;
  protected $status;

// declare constance for category
  const category =['roman', 'adventure', 'thriller', 'science fiction'];

// declare constance for status
  const status = ['available', 'lent'];


  public function __construct($data){
    $this->hydrate($data);
  }

  /**
     * Fill the object with data
     * @param array $data
     */
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
    public function getId(){
      return $this->id;
    }

    public function getTitle(){
      return $this->title;
    }

    public function getAuthor(){
      return $this->author;
    }

    public function getAbstract(){
      return $this->abstract;
    }

    public function getReleasedate(){
      return $this->releaseDate;
    }

    public function getCategory(){
      return $this->category;
    }

    public function getStatus(){
      return $this->status;
    }

    // setters

    public function setId(int $id){
    $this->id=$id;
    }

    public function setTitle($title){
      $this->title=$title;
    }

    public function setAuthor($author){
      $this->author=$author;
    }

    public function setAbstract($abstract){
      $this->abstract=$abstract;
    }

    public function setReleasedate($releaseDate){
      $this->releaseDate=$releaseDate;
    }

    public function setCategory($category){
      $this->category=$category;
    }
    public function setStatus(int $status){
      return $this->status=$status;
    }
}

 ?>
