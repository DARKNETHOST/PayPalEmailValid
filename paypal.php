<?php 
error_reporting(0);
use Darknethost\PayPalValidator;
$a = new PayPalValidator();

if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo $a->getStatus($_REQUEST['email']);
}