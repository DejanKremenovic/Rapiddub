<?php 
session_start(); 

session_destroy(); 

echo "<script>window.open('login.php?logged_out=Uspjesno ste se odjavili!','_self')</script>";




?> 