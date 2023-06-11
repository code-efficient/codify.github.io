<?php
$nameB = "david";

    if($nameB === "david") {
      session_start();
      $_SESSION["userB"] = "yes";
      header("Location: boxB.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
