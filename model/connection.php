<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=LibraryHandle;charset=utf8', 'root', 'gj7b!17LA', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}



 ?>
