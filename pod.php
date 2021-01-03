<?php session_start(); ?>
<!DOCTYPE html>

<?php
    if (isset($_GET["ID"]) && $_GET["ID"]!=""){

        $lid = $_GET["ID"];
        
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=radiovoixdurenard;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        $requete = $bdd ->query('SELECT * FROM podcast WHERE idPodcast =' . $lid);

    }

?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La voix du renard | Podcasts</title>
        <link rel="stylesheet" href="../css/cssGen.css">
        <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
    </head>

    <body>
        <header class="bandeau">
            <nav>
                <img id="logoETIQ" src="../img/LogoAnimateurETIQ.png" alt="Le logo de l'Etiq">
                    
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li class="active"><a href="podcasts.php">Podcasts</a></li>
                    <li><a href="questionForm.php">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <?php
            while ($donnees = $requete->fetch())
            {
        ?>
            <div id="unitPodcast">
                <iframe class="cadreVideo" width="560" height="315" src="<?php echo $donnees['lienYT']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p><?php echo $donnees['descPodcast']; ?></p>  
                <p><?php echo $donnees['nbLikes']; ?> <button>Ajouter à mes favoris</button></p>                           

                <form class="postCommentaire" action="" method="POST">
                    <input type="text" placeholder="Commentaire" required>
                    <input type="submit" value="Poster">
                    <hr>

                </form>
            </div>

         <?php

            }         
            $requete->closeCursor();
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
