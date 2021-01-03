<?php session_start(); ?>
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>La voix du renard | Accueil</title>
        <link rel="stylesheet" href="../css/cssGen.css">
        <link rel="shortcut icon" href="../img/icone.ico" type="image/x-icon">
    </head>

    <body>
        <header class="bandeau">
            <nav>
                <img id="logoETIQ" src="../img/LogoAnimateurETIQ.png" alt="Le logo de l'Etiq">
                    
                <ul>
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li><a href="podcasts.php">Podcasts</a></li>
                    <li><a href="questionForm.php">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.php">Se connecter</a></li>
                </ul>
            </nav>
        </header>

        <h1>Bienvenue sur le site de la radio de l'ETIQ: La voix du renard</h1>

        <div class="corps">
            <section class="presentation">
                <p>
                    La voix du renard est la radio de l'ETIQ, l'association étudiante du département informatique de l'IUT de Dijon-Auxerre. Elle est tirée d'une idée originale de M Coulon ainsi que Malo
                    Kerneis qui voulaient créer une radio étudiante afin de pouvoir divertir les gens et partager les passions de chacun comme le cinéma, ou encore les jeux-vidéos pour ne citer qu'eux. Vous
                    pouvez retrouver notre radio sur <a href="https://www.youtube.com/channel/UCuV7bSM7ztpKlEwG2Ccco-Q" target="blank">Youtube</a>, elle se veut accessible à tout le monde.
                </p>
            </section>
        </div>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=radiovoixdurenard;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }


        $reponse = $bdd->query('SELECT * FROM podcast ORDER BY datePodcast DESC LIMIT 5');

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
