<?php
require_once dirname(__FILE__).'/../../config.php';
session_start();
session_destroy();
header("Location: "._APP_ROOT);
?>

