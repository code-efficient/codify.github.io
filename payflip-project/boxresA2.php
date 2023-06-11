<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA2"] = "yes";
      header("Location: boxA2.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
