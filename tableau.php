<?php
    include "abonne.php";

    session_start();
        

    if (isset($_SESSION["listeAbonne"])){

    }else{
        $_SESSION["listeAbonne"]=[''];
    }
    $abonne = new abonne;
    $abonne->DonneeAbonne($abonne);

    array_push($_SESSION['listeAbonne'], $abonne);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>CANAL SAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <div> 
        <?php include("include/entete.php")  ?> 
    </div>
</header>
<body>
    
    <div>
        <table>
            <thead> 
                <tr>
                    <?php
                        foreach($abonne as $Abonne=> $Abonne ) {
                            echo "<th>$Abonne</th>";
                        }
                    ?>
                </tr>                          
            </thead>
            <tbody>  
                
                    <?php
                        
                        foreach($_SESSION['listeAbonne'] as $Abonne){
                            echo '<tr>';
                            foreach($Abonne as $Abonne2){
                                echo'<td>' .$Abonne2.'</td>'; 
                            }
                            echo '</tr>';
                        }

                    ?> 
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://http://localhost/devoir/inscription"> Ajouter</a>
    </div>
    <div><?php include("include/footer.php") ?></div>
</body>
</html>
