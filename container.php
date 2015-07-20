<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
<!-- .logo -->
		<div class="logo">
			<a href="index.html"><img src="images/logo.JPG" width=230 height=90 alt="" /></a>
		</div>
<!-- /.logo -->
		<form method="get" id="searchform" name="searchform" action="http://search.atomz.com/search/">
			<DIV id="searchBox">
				<input type="hidden" name="sp_a" value="sp100458f8">
				<input size="18" name="sp_q" class="text" value="Click here to search" onfocus="this.value = ''">
				<input type="hidden" name="sp_p" value="all">
				<input type="hidden" name="sp_f" value="UTF-8">
				<input type="submit" value="Search" class="submit" />
			</DIV>
		</form>

<!-- .nav -->
		<ul class="nav">
			<li><a href="index.php" id="home_menu" ><span>Home</span></a></li>
			<li><a href="services.php" id="services_menu"><span>Services</span></a></li>
			<li><a href="contactus.php" id="contactus_menu"><span>Contact Us</span></a></li>
		</ul>
		
        <script>
			document.getElementById("<?php echo $activeMenu ?>").className += " current";
		</script>
		
		<?php include($headerPage) ?>

	</div>
</div>
<!-- content -->
<div id="content"><div class="inner_copy"><div class="inner_copy">Find best premium and <a href="http://www.design4magento.com/free-magento-themes/" title="Magento themes"> free Magento themes</a> at Design4Magento.com</div></div>
	<div class="container">
		<?php include($contentPage) ?>
		
	</div>
</div>
<!-- footer -->
<div id="footer">
	<div class="container">
		Copyright � 2011 Central Hydraulics UK Ltd. Company Registration No: 6676886 - Company Registered in England.<br>
		<a href="http://www.prodigyworks.co.uk">Powered by Prodigy Works!</a>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
