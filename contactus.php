<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML>
<HEAD>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAABQUKul-fLpL_Hs9xMhUlRRhduPWv144Y_aeqzjgRTlukmVSwRRX3l2Y-hnbsR4rGOCI59Gf9nXRUA" type="text/javascript"></script>

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
<script>
function validate_form() {
	if (document.getElementById("titlebox").selectedIndex == 0) {
		alert("Please fill in the 'Title' box");
		return false;
	}
	
	if (document.getElementById("firstnamebox").value == "") {
		alert("Please fill in the 'First Name' box");
		return false;
	}
	
	if (document.getElementById("surnamebox").value == "") {
		alert("Please fill in the 'Last Name' box");
		return false;
	}
	
	if (document.getElementById("originbox").selectedIndex == 0) {
		alert("Please fill in the 'How did you find us' box");
		return false;
	}
	
	if (document.getElementById("recaptcha_response_field").value == "") {
		alert("Please fill in the 'Security code' box");
		return false;
	}
	
	if (document.getElementById("emailbox").value == "" &&
	    document.getElementById("phonebox").value == "") {
		alert("Please fill in either the 'E-mail' or the 'Phone' box");
		return false;
	}
	
	return true;
}
</script>
</HEAD>
<?php 
	$headerPage = 'subpage/sub-contactus-header.php'; 
	$contentPage = 'subpage/sub-contactus-content.php'; 
	$activeMenu = "contactus_menu";
	$pageTitle = "Contact Us";
	include("container.php") 
?>

</HTML>