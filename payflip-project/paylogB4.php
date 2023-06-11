<?php
session_start();
session_destroy();
header("Location: processB4.php");
?>