<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA8"] = "yes";
      header("Location: boxA8.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
