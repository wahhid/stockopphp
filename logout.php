<?php
ob_start();
session_start();
session_destroy();
echo '{success:true,Message:""}';
?>