<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<?php 
	$title = "Contact Us";
	include("header.php")
?>
<style type="text/css">
#header .container {
	background:url(images/onsite.jpg) no-repeat 100% 100%;
	height:473px ! important;
}
</style>
</HEAD>
<?php 
	$headerPage = 'subpage/sub-contactsend-header.php'; 
	$contentPage = 'subpage/sub-contactsend-content.php'; 
	$activeMenu = "contactus_menu";
	include("container.php") 
?>
