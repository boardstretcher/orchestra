<?php
	session_start();
	if(!session_is_registered(myusername)){
		header("location:login.php");
	}
?>

<!DOCTYPE html>

<html lang="en">
<head>	  
	<meta charset="utf-8">
	<meta name="description" content="orchestra script server">
	<meta name="author" content="boardstretcher@gmail.com">
	<meta name="project" content="https://github.com/boardstretcher/orchestra">

	<!-- http://getbootstrap.com/2.3.2/ -->

	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Orchestra</title>

	<style>
	html, body {height: 100%;}
        footer {color: #666;background: #222;padding: 17px 0 18px 0;border-top: 1px solid #000;}
        footer a {color: #999;}
        footer a:hover {color: #efefef;}
        .wrapper {min-height: 100%;height: auto !important;height: 100%;margin: 0 auto -63px;}
        .push {height: 63px;}
        .wrapper > .container {padding-top: 60px;}
	</style>
</head>

<body>
<?php include "navbar.php"; ?>

