<?php
session_start();
session_destroy();
header("Location: processA2.php");
?>