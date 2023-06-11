<?php
session_start();
session_destroy();
header("Location: processC3.php");
?>