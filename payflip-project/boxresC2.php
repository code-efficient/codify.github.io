<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winC2"] = "yes";
      header("Location: boxC2.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
