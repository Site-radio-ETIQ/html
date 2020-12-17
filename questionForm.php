

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
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="podcasts.html">Podcasts</a></li>
                    <li class="active"><a href="questionForm.html">Questions</a></li>
                    <li><a href="monCompte.html">Mon compte</a></li>
                    <li><a href="connexion.html">Se connecter</a></li>
                </ul>
            </nav>
        </header>
        
        <form action="controller.php" method="POST" class="questionForm">
            <fieldset> <legend>Posez nous vos questions ici</legend>
                <p>
                    <label for="objetForm">Objet de la question/proposition: </label>
                    <input type="text" id="objetForm" name="objet"  value=" <?php echo $objetForm; ?> ">
                </p>

                <p>
                    <textarea name="contenuForm" id="contenu" placeholder="Écrivez ici le contenu de votre question/proposition"  value=" <?php echo $contenuForm; ?> "></textarea>
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

        <script>
            alert("Seule la version statique de cette page est terminée!");
        </script>
    </body>
</html>
