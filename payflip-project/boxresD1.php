<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["winD1"] = "yes";
      header("Location: boxD1.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
