<?php
session_start();
session_destroy();
header("Location: processD1.php");
?>