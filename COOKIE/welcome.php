<?php
  if(isset($_COOKIE['nama'])) {
    echo "Welcome, " . $_COOKIE['nama'];
  } else {
    header("location: index.php");
  }
?>

<br><br>

<a href="delete.php">Delete Cookie</a>
