<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA3"] = "yes";
      header("Location: boxA3.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
