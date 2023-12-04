<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
    <title>CANAL SAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        include("include/entete.php");
    ?>

    <div>
        <h1>Bienvenue a CANAL SAT</h1>

    </div>

    <div>
        <p>
            <h4>Vous avez déjà un compte CANAL +? 
            Saisissez l'identifiant email ou téléphone de votre compte CANAL +.</h4>
        </p>
        
        <a href="login.php"></a>
    </div>
    
    <div>
        <p>
            <h4>Vous n'avez pas encore de compte?</h4> 
        </p>
        <div><a href="inscription.php"></a> </div>
        
    </div>
    
    <div>
        <?php
        include("include/footer.php")
        ?>
    </div>
</body>
</html>