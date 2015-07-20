<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<?php 
	$title = "Services";
	include("header.php")
?>
<style type="text/css">
#header .container {
	background:url(images/websiteimage.jpg) no-repeat 100% 100%;
	height:473px;
}
</style>

</HEAD>
<?php 
	$headerPage = 'subpage/sub-services-header.php'; 
	$activeMenu = "services_menu";
	$pageTitle= "Services";
	$contentPage = "subpage/sub-services-content.php";
	include("container.php") 
?>
</HTML>
