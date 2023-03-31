<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "login";


    $nom = $_POST["nom"]; 
    $prenom = $_POST["prenom"];
    $poseur = $_POST["poseur"];
    
    if (!isset($nom)){
      die("S'il vous plaît entrez le nom du patient");
    }
    if (!isset($prenom)){
      die("S'il vous plaît entrez le prénom du patient");
    }
    if (!isset($poseur)){
      die("S'il vous plait entez le nom du poseur");
    }
    
    $mysqli = new mysqli($host, $username, $password, $database);
    
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    } 
    
    $statement = $mysqli->prepare("INSERT INTO hospitalisation (nom, prenom, poseur) VALUES(?, ?, ?)"); 

    $statement->bind_param('ss', $nom, $prenom, $poseur); 
    
    if($statement->execute()){
      print "Salut " . $nom . "!, votre adresse e-mail est ". $prenom. "!, le nom du poseur est " .$poseur;
    }else{
      print $mysqli->error; 
    }
  }
?>