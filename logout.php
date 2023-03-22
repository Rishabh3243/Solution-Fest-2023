<?php
session_start();

if(!isset($_SESSION['id']) && !isset($_SESSION['email']))
{
	header("location: login.html");
}
else
{
	session_destroy();
	header("location: login.html");
}