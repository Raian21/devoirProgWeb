<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
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
    
    <div class="container">
        <form id="form" action="/">
            <h1>formulaire de validation</h1>
            <div class="input-control">
                <label form="nom">Nom :</label>
                <input type="text" name="nom" id="idName" placeholder="Entrez le nom" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="">Email :</label>
                <input type="email" name="Email" id="idEmail" placeholder="Entrez votre email">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="mdp">Mot de passe:</label>
                <input id="password"name="mdp" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="mdp2">Confirmer le mot de passe :</label>
                <input id="mdp2"name="mdp2" type="password" required>
                <div class="error"></div>
            </div>
           
            <button type="submit">Soumettre</button>
        </form>
    </div>
    <div> <?php include("include/footer.php") ?> </div>
</body>
</html>