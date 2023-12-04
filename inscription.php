<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <title>CANAL SAT</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="index.js"></script>
</head>
<header>
    <div> 
        <?php include("include/entete.php")  ?> 
    </div>
</header>
<body>

    <div>
        <form action="tableau.php" method="post">
            <div class="container">
                <fieldset>  
                    
                    <legend><h1>Abonnée CANAL SAT</h1></legend> 

                        <div class="input-control">
                            <label form="nom">Nom :</label>
                            <input type="text" name="nom" id="idName" placeholder="Entrez le nom" required>
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" id="idName" placeholder="Entrez le Prénom" required>
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="">Numéro de Téléphone:</label>
                            <input type="tel" name="tel" id="idtel" placeholder="Entrez votre numéro de téléphone ">
                            <div class="error"></div>
                        </div>

                        <div class="input-control">
                            <label for="">Email :</label>
                            <input type="email" name="Email" id="idEmail" placeholder="Entrez votre email">
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="tel">Numéro de Réabonnement :</label>
                            <input type="tel" name="telr" id="idPassword" placeholder="Entrez votre numéro de réeabonnement" required>
                            <div class="error"></div>
                        </div>

                        <div class="input-control">
                            <label for="mdp">Mot de passe:</label>
                            <input id="password"name="mdp" type="password">
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <label for="mdp">confirmer le mot de passe:</label>
                            <input type="password" name="mdp2" id="idPassword" placeholder="Confirmer le mot de passe" required>
                            <div class="error"></div>
                        </div>
                            
                        <div>
                            <label for="">Ville</label>
                            <select name="ville" id="">
                                <option value="France">DOUALA</option>
                                <option value="Cameroun">YAOUNDE</option>
                                <option value="Portugal">BAFOUSSAM</option>
                                <option value="Italie">KRIBI</option>
                            </select>
                        </div>
                            
                        <div>
                            <input type="submit" value="Envoyer">
                            <input type="reset" value="Annuler">
                        </div>
                </fieldset>
            </div>
        </form>
    </div>
    <div> <?php include("include/footer.php") ?> </div>  
</body>
</html>