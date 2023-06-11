<?php
session_start();
session_destroy();
header("Location: processB6.php");
?>