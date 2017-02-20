<?php
session_start();
if(isset($_SESSION['userid'])) 
echo 'Bienvenid@ <B>'.$_SESSION['userid'].'</B>';
else
header("location: error.html");
?>