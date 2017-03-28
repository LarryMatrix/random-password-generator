<?php
//load the session id from php session
if(!isset($_SESSION["SESSION-ID"])){
	echo"<script>window.location='../login/'</script>";
	exit;
}
if(!isset($_SESSION["cookie_name"])){
	echo"<script>window.location='../login/'</script>";
	exit;
}else{
	$cookie_value=$_SESSION["SESSION-ID"];
	$cookie_name=$_SESSION["cookie_name"];
}
//compare the session id from php session with session id in cookie
if(!isset($_COOKIE[$cookie_name])) {
   echo"<script>window.location='../login/'</script>";
   exit;
}
else if($_COOKIE[$cookie_name]!= $_SESSION["SESSION-ID"]) {
   echo"<script>window.location='../login/'</script>";
   exit;
}
?>