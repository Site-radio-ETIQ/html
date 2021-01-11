<?php
  // Vérifie qu'il provient d'un formulaire
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "radiovoixdurenard";        //base de donnée du site
    
    $objet = $_POST["objet"]; 
    $contenuForm = $_POST["contenuForm"];
    $nomForm = $_SESSION["nomcompte"];      // nomform qui sera utilisé pour l'inserssion prend la valeurs du nomdu compte de la session en cours
    $emailForm = $_SESSION["mailcompte"];

    if(!isset($_SESSION['nomcompte'])){                 // verification : si pas de session en cours alors ce message
    print "Connectez vous pour envoyer un message";
    exit; 
    }  
    
    else{                                               // sinon
    if (!isset($objet)){                                //si l'objet est vide alors il affiche ce message
      die("S'il vous plaît entrez votre objet");
    }
    if (!isset($contenuForm) ){                         //si le contenu est vide alors il affiche ce message
      die("S'il vous plaît entrez votre message");
    }  

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO questions (objetForm, contenuForm, nomForm, emailForm) VALUES(?, ?, ?, ?)"); 
 //     $statement = $mysqli->prepare("INSERT INTO questions (nomForm, emailForm) SELECT nomindividu, mailindividu FROM abonne"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ssss', $objet, $contenuForm, $nomForm, $emailForm); 
    
    if($statement->execute()){
      print "Votre message concernant " . $objet . "! a bien été envoyé pour cette question: ". $contenuForm;
    }else{
      print $mysqli->error; 
    }
    
    }
  
  }
?>
