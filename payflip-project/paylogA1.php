<?php
session_start();
session_destroy();
header("Location: processA1.php");
?>