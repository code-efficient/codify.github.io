<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winD2"] = "yes";
      header("Location: boxD2.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
