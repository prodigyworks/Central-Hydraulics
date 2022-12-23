<div class="wrapper">
	<div class="mainContent contact">
		<div class="article services">
		<h2>For all enquiries<em>please contact Steve by phone/email or fill in your contact details in the form below.</em></h2>
		<hr>

		
		<FORM action="contactsend.php" method="post" id="contactForm" name="contactForm" onSubmit="return validate_form ();">
			<TABLE
				style="BORDER-COLLAPSE: collapse; BACKGROUND: none transparent scroll repeat 0% 0%"
				border="0" cellSpacing="1" borderColor="#ffffff"
				cellPadding="1">
				<TBODY>
					<TR>
						<TD>Title<span class="mandatoryField">&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<select id="titlebox" name="titlebox">
								<option value="Select" selected> Select </option>
								<option value="Mr" >Mr</option>
								<option value="Mrs">Mrs</option>
								<option value="Ms">Ms</option>
								<option value="Miss">Miss</option>
								<option value="Dr">Dr</option>
								<option value="Prof">Prof</option>
							</select>
						</TD>
					</TR>
					<TR>
						<TD>First Name<span class="mandatoryField">&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<input class="contactInfoTextBox" name="firstnamebox" id="firstnamebox" length=50 type="text"></input>
						</TD>
					</TR>
					<TR>
						<TD>Last Name<span class="mandatoryField">&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<input class="contactInfoTextBox" name="surnamebox" id="surnamebox" length=40 type="text"></input>
						</TD>
					</TR>
					<TR>
						<TD>Phone<span class="optionalField">&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<input class="contactInfoTextBox" name="phonebox" id="phonebox" length=40 type="text"></input>
						</TD>
					</TR>
					<TR>
						<TD>E-mail<span class="optionalField">&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<input class="contactInfoTextBox" name="emailbox" id="emailbox" length=40 type="text"></input>
						</TD>
					</TR>
					<TR>
						<TD nowrap>How did you find us ?<span class=mandatoryField>&nbsp;*</span></TD>
						<TD width="2">
						</TD>
						<TD>
							<select id="originbox" name="originbox">
								<option value="Select" selected> Select </option>
								<option value="Leaflet" >Leaflet</option>
								<option value="Retail advertisement" >Retail advertisement</option>
								<option value="Recommendation">Recommendation</option>
								<option value="Web search">Web search</option>
								<option value="Local business web portal">Local business web portal</option>
								<option value="Other">Other</option>
							</select>
						</TD>
					</TR>
					<TR>
						<TD>Message</TD>
						<TD width="2">
						</TD>
						<TD>
							<textarea name="messagebox" id="messagebox" cols=50 rows=8></textarea>
						</TD>
					</TR>
					<TR>
						<TD>&nbsp;</TD>
					</TR>
					<TR>
						<TD>Security code<span class="mandatoryField">&nbsp;*</span></TD>
						<TD width="2"></TD>
						<TD>
						<img src="imagebuilder.php" border="1">
						<br>
						
				        <input MAXLENGTH=8 SIZE=8 name="userstring" type="text" value="">
						</TD>
					</TR>
					<TR>
						<TD></TD>
						<TD width="2">
						</TD>
						<TD>
						<br>
							<input type="submit" value="Send" />
							<input type="button" value="Clear" onClick="document.getElementById('contactForm').reset();" />
							<span>&nbsp;&nbsp;</span>
							<span><span class="mandatoryField">&nbsp;*</span> Mandatory fields, please fill in.&nbsp;&nbsp<span class="optionalField">&nbsp;*</span> One field required within a group.</span> 
						</TD>
					</TR>
				</TBODY>
			</TABLE>
		</FORM>
		
		<hr />
		
		<TABLE>
			<TR>
				<TD>
					<TABLE
						style="BORDER-COLLAPSE: collapse; BACKGROUND: none transparent scroll repeat 0% 0%"
						border="0" cellSpacing="0"  cellPadding="0">
						<TBODY>
							<TR>
								<TD
									style="BACKGROUND: none transparent scroll repeat 0% 0%; PADDING-TOP: 4px"
									vAlign="top" align="left">
									
									
									
								<TABLE
									style="BORDER-COLLAPSE: collapse; BACKGROUND: none transparent scroll repeat 0% 0%"
									border="0" cellSpacing="0"
									width="100%">
									<TBODY>
										<TR>
											<TD vAlign="top" align="left"><IMG
												style="WIDTH: 46px; HEIGHT: 45px"
												src="images/photo_11728_20100119.jpg" width="400" height="398"
												alt=""></TD>
											<TD
												style="BACKGROUND: none transparent scroll repeat 0% 0%"
												vAlign="center" align="left"><STRONG><FONT
												color="#f7941d">07749 684244</FONT></STRONG>
											</TD>
										</TR>
										<TR>
											<TD vAlign="top" align="left"><IMG
												style="WIDTH: 50px; HEIGHT: 55px"
												src="images/photo_22462_20101105.jpg" width="398" height="301"
												alt=""></TD>
											<TD
												style="BACKGROUND: none transparent scroll repeat 0% 0%"
												vAlign="center" align="left"><A
												href="mailto:chukltd@yahoo.co.uk"><STRONG><FONT
												color="#f7941d">chukltd@yahoo.co.uk</FONT></STRONG></A>
											</TD>
										</TR>
									</TBODY>
								</TABLE>
								</TD>
							</TR>
						</TBODY>
					</TABLE>
				</TD>
				<TD width="40x">
				</TD>
				<TD>
		           <div class="mapouter"><div class="gmap_canvas"><iframe width="450" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Uttoxeter,Staffs&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:450px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:450px;}</style></div>
				</TD>
			</TR>
		</TABLE>
		
		
						
				<?php include("sub-links.php") ?>
		
		
		 

		
	</div>					
</div>					
		

