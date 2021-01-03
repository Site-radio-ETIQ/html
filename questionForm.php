<?php 
session_start();

//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "";
$BDD['db'] = "radiovoixdurenard";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La voix du renard | Questions</title>
        <link rel="stylesheet" href="../css/cssGen.css">
        <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
    </head>

    <body>
        <header class="bandeau">
            <nav>
                <img id="logoETIQ" src="../img/LogoAnimateurETIQ.png" alt="Le logo de l'Etiq">
                    
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="podcasts.php">Podcasts</a></li>
                    <li class="active"><a href="questionForm.php">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>
        
        <form action="controller.php" method="POST" class="questionForm">
            <fieldset> <legend>Posez nous vos questions ici</legend>
                <p>
                    <label for="objetForm">Objet de la question/proposition: </label>
                    <input type="text" id="objetForm" name="objet"  value=" <?php $_POST["objetForm"]; ?> ">
                </p>

                <p>
                    <textarea name="contenuForm" id="contenu" placeholder="Écrivez ici le contenu de votre question/proposition"  value=" <?php $_POST["contenuForm"]; ?> "></textarea>
                </p>

                <p>
                    <input type="submit" id="submit" name="submit" value="Valider">
                </p>

                <p>
                    Vous recevrez un e-mail sur la boîte de votre compte lorsque la question aura été traitée. <br>
                    Si vous n'avez pas de compte, vous pouvez en créer un ici: <a href="creerUnCompte.html">Créer un compte</a>
                </p>
            </fieldset>
        </form>

        <footer class="footer">
            <nav>
                <ul>
                    <li><a href="mentionsLegales.html">Mentions légales</a></li>
                    <li><a href="politiqueConfid.html">Politique de confidentialité</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
