<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<?php 
	$title = "Home";
	include("header.php")
?>
<style type="text/css">
#header .container {
	background:url(images/animation1.gif) no-repeat 100% 100%;
	height:473px ! important;
}
</style>

</HEAD>
<?php 
	$headerPage = 'subpage/sub-index-header.php'; 
	$activeMenu = "home_menu";
	$pageTitle= "Home";
	$contentPage = "subpage/sub-index-content.php";
	include("container.php") 
?>
</HTML>