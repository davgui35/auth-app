<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    die;
}

$input_email = $_POST['email'];
$input_password = $_POST['password'];
$cnx = new PDO("mysql:host=localhost;dbname=test_auth", 'root', 'root');
if (!$cnx) {
    echo "La connexion à la db a échouée";
    die;
}

$request = $cnx->prepare('SELECT password FROM users where email = :email');
$request->bindValue(':email', $input_email, PDO::PARAM_STR);
$request->execute();
$result = $request->fetchAll(PDO::FETCH_OBJ);

if (password_verify($input_password, $result[0]->password)) {
    $_SESSION['connected'] = 1;
    $_SESSION['email'] = $input_email;
    header('Location: admin.php');
} else {
    header('Location: index.php?login_error=TRUE');
}

$cnx=null;