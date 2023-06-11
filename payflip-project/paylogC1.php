<?php
session_start();
session_destroy();
header("Location: processC1.php");
?>