<?php
/*
Page: connexion.php
*/
session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['pseudoAbonne'])) {
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdpAbonne'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
            $Pseudo = htmlentities($_POST['pseudoAbonne'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $MotDePasse = htmlentities($_POST['mdpAbonne'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte à la base de données:
            $mysqli = mysqli_connect("localhost", "root", "", "radiovoixdurenard");
            //on vérifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                // on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM personne WHERE pseudoAbonne = '".$Pseudo."' AND mdpAbonne = '".md5($MotDePasse)."'");//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un résultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['pseudoAbonne'] = $Pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
                    header('Location: podcasts.php');
                    exit();
                }
            }
        }
    }
}
?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La voix du renard | Connexion</title>
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
                    <li><a href="questionForm.php">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li class="active"><a href="connexion.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <div class="corps">
            <h1 id="grandTitre">Bienvenue sur le site de la radio de l'IUT: La voix du Renard</h1>

            <section class="form">
                <form action="connexion.php" method="POST">
                    <fieldset> <legend>Se connecter</legend>

                    <p>
                        <label for="pseudoCo">Pseudo: </label>
                        <input type="text" id="pseudoCo" name="pseudoAbonne" required >

                        <label for="mdpco">Mot de passe: </label>
                        <input type="password" id="mdpco" name="mdpAbonne" required>
                    </p>

                    <P>
                        <input type="submit" name="connexion" value="Se connecter">
                    </P>

                    </fieldset>
                </form>

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
            <form action="connexion.php" method="POST" class="formInscri">
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
            </section>

            <section class="presentation">
                <div id="presRadio">
                    <h2>Une petite présentation:</h2>
                
                    <p>
                        La Voix du renard est la radio de l'ETIQ, l'association du département informatique de l'IUT de Dijon. Notre objectif principal avec cette radio est de pouvoir divertir les gens
                        ainsi que partager ses passions à travers cette dernière. Elle est d'autant plus importante pendant cette période de crise sanitaire car elle permet de garder un minimum de lien
                        social. Nos podcasts sont aussi disponibles sur <a href="https://www.youtube.com/channel/UCuV7bSM7ztpKlEwG2Ccco-Q" target="blank">Youtube</a> et nous en créons des nouveaux dès
                        que possible. Les sujets sont variés comme le cinéma, la musique, les jeux-vidéos, et encore d'autres sujets de ce genre, afin de pouvoir viser un public très large.
                    </p>                    
                </div>

                <div id="histRadio">
                    <h2>Un peu d'histoire:</h2>

                    <p>
                        La radio a été créée par M. Coulon et Malo Kerneis dans le but de créer une radio étudiante accessible à tout le monde.
                    </p>                   

                    <p>
                        Depuis le début, les sujets et le format sont restés à peu près les mêmes avec 1h30 à 2h de discussion avec un sujet d'actualité au début.
                    </p>
                </div>

                <div id="animRadio">
                    <h2>Qui Sommes nous?</h2>

                    <p>Nous sommes assez nombreux à apparaître sur la radio mais voici ceux qui gèrent cette dernière:</p>

                    <ul>
                        <li>M. Coulon</li>
                        <li>Malo Kerneis</li>
                        <li>Benoit Koos</li>
                        <li>Et bien d'autres que vous pourrez découvrir en écoutant nos podcasts</li>
                    </ul>
                </div>

                <div id="faireUnCpt">
                    <h2>Pourquoi créer un compte?</h2>

                    <p>
                        Créer un compte sur le site de la radio ne sera que du bénéfice. En effet sans compte, la seule fonctionnalité apporté par notre site est l'accès aux différents podcasts proposés par la radio ainsi que leur écoute.
                    </p>

                    <p>
                        En créant un compte, vous aurez accès a un espace compte personnel sur lequel sera enregistré tous vos podcasts favoris. Pour ajouter un podcast à ses favoris, cliquez sur le cœur en dessous du podcast.
                    </p> 
                    
                    <p>
                        En plus de cela, l'accès à un compte vous permet de poser des questions aux animateurs et leurs proposer de nouvelles idées pour leurs podcasts à venir. Génial non? 
                    </p>

                    <p>
                        Et cerise sur le gâteau, créer un compte est totalement gratuit
                        en allant sur le lien suivant: <a href="creerUnCompte.html">Créer un compte</a>.
                    </p>
                </div>
            </section>
        </div>

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
