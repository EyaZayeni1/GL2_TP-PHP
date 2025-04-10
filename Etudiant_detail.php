<?php
include "connexionBD.php";
$db=connexionBD::getInstance();
$id=$_GET['id'];
if (!isset($id)){
    header('location: liste des etudiants.php');
}
$query="select * from Student where id= '$id' ";
$reponse=$db->query($query);
$etudiant=$reponse->fetch(PDO::FETCH_OBJ);
if (!($etudiant)){
    header('location: liste des etudiants.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <class class="container">
    <strong>  DETAILS ETUDIANT </strong> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col" colspan="2">Date OF Birth</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" ><?= $etudiant->id ?></th>
      <td colspan ="2"><?= $etudiant->name ?></td>
      <td><?= $etudiant->date_birth ?></td>
    </tr>
  </tbody>
</table>
</class>
</body>
</html>