<?php
session_start();
session_destroy();
header("Location: processA7.php");
?>