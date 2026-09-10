<?php
session_start();
session_unset();
session_destroy();

header("Location: ../views/v_login.php");
exit();
?>