<?php 
include "Gestion.php";
$g=new Gestion();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>plateforme</title>
</head>
<body>
<class class="container">
   <?php 
    $nbrevisites=$g->GetNbre();
    if ($nbrevisites==1){ 
        echo "Bienvenu à notre plateforme";
     } 
    else{ 
        echo "Merci pour votre fidélité, c’est votre".$nbrevisites." éme visite.";
    }
    ?>
    <form method="post">
    <button type="submit" name="restart" class="btn btn-outline-info">Réinitialiser</button>
    <?php 
    if (isset($_POST['restart'])) {
    $g->Restart();
    header("Location: index.php");

} ?>
</class>
</body>
</html>