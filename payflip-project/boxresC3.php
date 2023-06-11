<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winC3"] = "yes";
      header("Location: boxC3.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
