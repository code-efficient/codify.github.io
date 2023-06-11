<?php
$boxa1= "2222";

    if($boxa1 === "2222") {
      session_start();
      $_SESSION["winA1"] = "yes";
      header("Location: boxA1.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
