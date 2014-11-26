<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'taskmodel.php';
$item_name = $_POST['itemname'];
$item_category = $_POST['itemcategory'];
$item_date = $_POST['itemdate'];
$is_complete = 0;
addItem($item_name, $item_category, $item_date, $is_complete);
header('Location: index.php');
?>

