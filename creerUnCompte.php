<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La voix du renard | Créer un compte</title>
        <link rel="stylesheet" href="../css/cssGen.css">
        <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
    </head>

    <body>

    <?php
    
    /* page: inscription.php */
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

//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['pseudoAbonne'],$_POST['nomIndividu'],$_POST['prenomIndividu'],$_POST['emailIndividu'],$_POST['mdpAbonne'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['pseudoAbonne'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Pseudo est vide.";
    } elseif(strlen($_POST['pseudoAbonne'])>25){//le pseudo est trop long, il dépasse 25 caractères
        echo "Le pseudo est trop long, il dépasse 25 caractères.";
    } elseif(empty($_POST['mdpAbonne'])){//le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";
    } elseif(empty($_POST['nomIndividu'])){
        echo "Le champ NomAbonne est vide";
    } elseif(empty($_POST['prenomIndividu'])){
        echo "Le champ NomAbonne est vide";
    } elseif(empty($_POST["emailIndividu"])){
        echo "le champ email est vide";
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT pseudoAbonne FROM personne WHERE pseudoAbonne='".$_POST['pseudoAbonne']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Ce pseudo est déjà utilisé.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
        if(!mysqli_query($mysqli,"INSERT INTO personne SET 
        pseudoAbonne='".$_POST['pseudoAbonne']."',prenomIndividu='".$_POST['prenomIndividu']."',nomIndividu='".$_POST['nomIndividu']."',emailIndividu='".$_POST['emailIndividu']."', mdpAbonne='".md5($_POST['mdpAbonne'])."'"))
        {//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else {
            echo "Vous êtes inscrit avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==1){
    ?>
            <form action="creerUnCompte.php" method="POST" class="formInscri">
                <fieldset> <legend>S'inscrire</legend>
                    <p>
                        <label for="nomIndividu">Nom:<span class="requis">*</span> </label>
                        <input type="text"  name="nomIndividu" required>
                    </p>

                    <p>
                        <label for="nomIndividu">Prénom:<span class="requis">*</span> </label>
                        <input type="text"  name="prenomIndividu" required>
                    </p>

                    <p>
                        <label for="pseudoAbonne">Pseudo:<span class="requis">*</span> </label>
                        <input type="text"  name="pseudoAbonne" required>
                    </p>

                    <p>
                        <label for="emailIndividu">Adresse e-mail:<span class="requis">*</span> </label>
                        <input type="text" name="emailIndividu" required>
                    </p>

                    <p>
                        <label for="mdpAbonne">Mot de passe:<span class="requis">*</span> </label>
                        <input type="password"  name="mdpAbonne" required>
                    </p>

                    <p>
                        <input type="checkbox" id="politConfid" name="politiqueDeConfidentialite" required>
                        <label for="politConfid">En cochant cette case, vous acceptez notre <a href="politiqueConfid.html" target="blank">politique de confidentialité</a></label>              
                    </p>

                    <p>
                        <input type="submit" id="submit" name="submit" value="Valider">
                    </p>

                    <p>
                        Les champs annotés d'un <span class="requis">*</span> sont obligatoires.
                    </p>
                </fieldset>
            </form>
            <?php
        }
        ?>

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
