<?php
session_start();
session_destroy();
header("Location: processC4.php");
?>