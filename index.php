<h1>Connexion</h1>
<?php
    session_start();
    if (isset($_GET['login_error']) && $_GET['login_error'] == 'TRUE') {
        echo "<p style='color:red;'>Email ou mot de passe invalide !</p>";
    }
    if (isset($_SESSION['connected'])) {
        header('Location: admin.php');
    }
?>
<form method="post" action="auth.php">
    <p>Email: <input type="email" name="email"></p>
    <p>Mot de passe: <input type="password" name="password"></p>
    <input type="submit" name="submit" value="Se connecter">
</form>
