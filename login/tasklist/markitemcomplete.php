<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
	
include_once 'taskmodel.php';
$id = $_GET['id'];
markItemComplete($id);
header('Location: index.php');
?>
