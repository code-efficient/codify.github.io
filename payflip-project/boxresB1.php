<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winB1"] = "yes";
      header("Location: boxB1.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
