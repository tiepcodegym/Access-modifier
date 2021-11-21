<?php
include 'EmployeeManager.php';
$key=$_REQUEST['index'];
$arr=EmployeeManager::loadData();
array_splice($arr,$key,1);
EmployeeManager::save($arr);
header('location:TABLE.php');



