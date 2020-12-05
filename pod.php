<!DOCTYPE html>

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
                    <li><a href="questionForm.html">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.html">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=voixdurenard;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }


        $reponse = $bdd->query('SELECT * FROM podcasts');

        while ($donnees = $reponse->fetch())
        {
        ?>
        <section id="unitPodcast">
            <iframe width="560" height="315" src="<?php echo $donnees['lienYT']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <p class="infosPodcast">
                <div><?php echo $donnees['titrePodcast']; ?></div>
                <div><?php echo $donnees['presentateur']; ?></div>
                <div><?php echo $donnees['nbLikes']; ?>  Likes</div>
                <div><?php echo $donnees['nbEcoutes']; ?> Vues</div>
                <div><?php echo $donnees['descPodcast']; ?></div>   
                <div><?php echo $donnees['nbCommentaires']; ?> Commentaires</div>      
            </p>
        </section>

        <?php
        }

        $reponse->closeCursor(); 

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