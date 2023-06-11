<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winB4"] = "yes";
      header("Location: boxB4.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
