<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winB3"] = "yes";
      header("Location: boxB3.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
