<?php
include "connexionBD.php";
$db=connexionBD::getInstance();
$query="select * from Student";
$reponse=$db->query($query);
$etudiants=$reponse->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <class class="container">
    <strong>  DETAILS DES ETUDIANTS  </strong> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col" colspan="2">Date OF Birth</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($etudiants as $etudiant): ?>
    <tr>
      <th scope="row" ><?= $etudiant->id ?></th>
      <td colspan ="2"><?= $etudiant->name ?></td>
      <td><?= $etudiant->date_birth ?></td>
      <td>
        <a href="Etudiant_detail.php?id=<?= $etudiant->id ?>" class="info-icon">
              <i class="bi bi-info-circle-fill"></i>
        </a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</class>
</body>
</html>