<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winC4"] = "yes";
      header("Location: boxC4.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
