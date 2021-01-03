<?php session_start(); ?>
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
                    <li class="active"><a href="podcasts.html">Podcasts</a></li>
                    <li><a href="questionForm.php">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <h1>Nos podcasts</h1>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=radiovoixdurenard;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }


        $reponse = $bdd->query('SELECT * FROM podcast ORDER BY datePodcast DESC');

        while ($donnees = $reponse->fetch())
        {
        ?>
            <section class="podcastSec">
            <img src="<?php echo $donnees['imgPodcast']; ?>" alt="Miniature du podcast" class="miniaturePodcast" width="25%">   
            
            <article class="podDeux">
                <h2 class="titrePodcast"><a href='pod.php?ID=<?php echo $donnees['idPodcast']; ?>'><?php echo $donnees['titrePodcast']; ?></a></h2>
                <p class="detailPodcast"><?php echo $donnees['datePodcast']; ?> | <?php echo $donnees['descPodcast']; ?></p>
            </article>
            </section>

            <hr>
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
