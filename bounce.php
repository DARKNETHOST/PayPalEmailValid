<?php 
error_reporting(0);
use Darknethost\Neverbounce;
$a = new Neverbounce();

if($_SERVER['REQUEST_METHOD'] == "GET"){
	echo $a->checkEmail($_REQUEST['email']);
}