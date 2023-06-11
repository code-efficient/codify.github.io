<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winB5"] = "yes";
      header("Location: boxB5.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
