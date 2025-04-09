<?php
include_once 'Class.php';
$etud1 = new Etudiant('Aymen', array(11, 13, 18, 7, 10, 13, 2, 5, 1));
$etud2 = new Etudiant('Skander', array(15, 9, 8, 16));
$moy1=$etud1->CalculMoy();
$moy2=$etud2->CalculMoy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="etudiant">
            <p class="nom"> <?= $etud1->nom ?></p>
            <?php $etud1->affichenotes(); ?>
            <div class="moyenne">
                <p class="moy">votre moyenne est <?= $moy1; ?></p>
            </div>
        </div>   
        <div class="etudiant">
            <p class="nom"> <?=$etud2->nom; ?></p>
            <?php $etud2->affichenotes(); ?>
            <div class="moyenne">
                <p class="moy">votre moyenne est <?= $moy2; ?></p>
            </div>
        </div> 
    </div>
</body>
</html>



