<?php
  if(isset($_POST['submit'])) {
    if($_POST['username'] == "Ryan" && $_POST['password'] == 123) {
      setcookie('nama', 'Ryan', time() + (86400 * 30), "/");
      setcookie('username', 'Ryan', time() + (86400 * 30), "/");
      setcookie('tgl_lahir', '01-01-2000', time() + (86400 * 30), "/");

      if(isset($_POST['remember'])) {
        setcookie('remember', '1', time() + (86400 * 30), "/");
      } else {
        setcookie('remember', '0', time() + (86400 * 30), "/");
      }
    }
  }

  if(isset($_COOKIE['remember']) && $_COOKIE['remember'] == 1) {
    header("location: welcome.php");
  }
?>
