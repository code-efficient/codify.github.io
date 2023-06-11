<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA6"] = "yes";
      header("Location: boxA6.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
