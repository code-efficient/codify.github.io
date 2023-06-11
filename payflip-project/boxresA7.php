<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA7"] = "yes";
      header("Location: boxA7.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
