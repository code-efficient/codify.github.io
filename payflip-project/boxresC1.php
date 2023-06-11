<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winC1"] = "yes";
      header("Location: boxC1.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
