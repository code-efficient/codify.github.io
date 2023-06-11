<?php
session_start();
session_destroy();
header("Location: processB2.php");
?>