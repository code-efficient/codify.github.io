<?php
$nameC = "david";

    if($nameC === "david") {
      session_start();
      $_SESSION["userC"] = "yes";
      header("Location: boxC.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
