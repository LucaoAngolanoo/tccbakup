<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['nome']);
header('Location: ../../cadastro.html');
die();
?>