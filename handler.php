<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )
 */
/* This below vaildates the fields*/
$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);
/* This below sends the query to Kevins email */
$pp->sendEmailTo('kevinbdonovan@gmail.com'); // ← My personal email

echo $pp->process($_POST);