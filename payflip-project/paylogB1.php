<?php
session_start();
session_destroy();
header("Location: processB1.php");
?>