<?php
session_start();
if (!isset($_SESSION['connected'])) {
  header('Location: index.php');
} else { ?>
  <p>Bonjour à vous <?php echo $_SESSION['email'] ?> !<p>
  <a href='auth.php?logout=TRUE'><p>Se déconnecter</p></a>
<?php
}
