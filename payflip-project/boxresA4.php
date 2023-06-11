<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA4"] = "yes";
      header("Location: boxA4.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
