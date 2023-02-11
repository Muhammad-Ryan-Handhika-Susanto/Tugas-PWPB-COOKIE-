<?php
  setcookie('nama', '', time() - 3600, "/");
  setcookie('username', '', time() - 3600, "/");
  setcookie('tgl_lahir', '', time() - 3600, "/");
  setcookie('remember', '', time() - 3600, "/");

  header("location: login.php");
?>
