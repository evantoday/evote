<?php
defined('BASEPATH') or die("No access direct allowed");

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'voteosis';

$con  = new mysqli($host, $user, $pass, $db) or die(mysqli_error());

?>
