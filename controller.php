  
<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "radiovoixdurenard";
    
    $objet = $_POST["objetForm"];
    $contenuForm = $_POST["contenuForm"];
    // Verifie si la session utilisateur est bien active  
    if(isset($_SESSION['personne']) AND !empty($_SESSION['personne'])) {
		if(isset($plxMotor->aUsers[$_SESSION['personne']]['nomindividu'])) {
    
        $nomindividu = $plxMotor->aUsers[$_SESSION['personne']]['nomindividu']; //$nomindividu prend la valeurs du nom du compte de la session en cours
        

    if (!isset($objet)){
      die("S'il vous plaît entrez votre objet");
    }
    if (!isset($contenuForm) ){
      die("S'il vous plaît entrez votre message");
    }  

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO formulaire (objetForm, contenuForm, nomform) VALUES(?, ?, ?)");  
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ss', $objet, $contenuForm, $nomindividu); 
    
    if($statement->execute()){
      print "Votre message concernant " . $objet . "!, a bien été envoyé pour cette question: ". $contenuForm;
    }else{
      print $mysqli->error; 
    }
    
            
    }
    }
      else{ print "Vous devez creer un compte ou vous connecter." ;} // si la session n'a pas été trouvé 
  }
?>
