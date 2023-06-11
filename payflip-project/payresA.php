
<?php
$nameA = "jhon";

    if($nameA === "jhon") {
      session_start();
      $_SESSION["userA"] = "yes";
      header("Location: boxA.php");
      die();
    }
    else{
      echo("wrong password");
    }
?>
