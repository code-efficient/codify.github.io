<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winA5"] = "yes";
      header("Location: boxA5.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
