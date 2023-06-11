<?php
session_start();
session_destroy();
header("Location: processB3.php");
?>