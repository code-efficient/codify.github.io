<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winB6"] = "yes";
      header("Location: boxB6.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
