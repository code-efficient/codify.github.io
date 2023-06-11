<?php
session_start();
session_destroy();
header("Location: processB5.php");
?>