<?php
include_once '../fragments/header.php';
include_once '../config/database.php';
include_once '../class/user.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    
    if ($identifiedUser = $user->authenticate($username, $email)) {
        $_SESSION['user_id'] = $identifiedUser['id']; 
        $_SESSION['username'] = $identifiedUser['username']; 
        $_SESSION['role'] = $identifiedUser['role'];
        header("Location:home.php");
        exit();
    } else {
        echo '<div class="alert alert-danger">Identifiants incorrects.</div>';
    }
}
?>

<h2>Connexion</h2>
<form method="POST">
    <div class="mb-3">
        <label class="form-label">Nom d'utilisateur</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php include_once '../fragments/footer.php'; ?>