<?php
$nameD = "david";

    if($nameD === "david") {
      session_start();
      $_SESSION["userD"] = "yes";
      header("Location: boxD.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
