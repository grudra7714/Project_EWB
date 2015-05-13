<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check--><head>
	<title> EWB - IET DAVV Membership </title>
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="eve-styles.css" />
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
			<script src="js/respond-min.js" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
			<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
			<script src="js/jquery.formalize.min.js" type="text/javascript"></script>

            <link rel="stylesheet" href="css/flexslider.css" />
            <link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
            
            <script type="text/javascript">
				  $(window).load(function() {
					$('.flexslider').flexslider({
						  animation: "slide",
						  directionNav: false,
						  keyboardNav: true,
						  mousewheel: true
					});
				  });
				</script>
                
			<script type="text/javascript">
			function validate()
			{
				var Fname = document.getElementById("Fname").value;
				var Lname = document.getElementById("Lname").value;
				var x=document.getElementById("email").value;
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				var num = document.getElementById("mobile").value;
				var br = document.getElementById("select_branch").value;
				var sec = document.getElementById("select").value;
				var secs = "Select your Section";
				var com = document.getElementById("comments").value;
			
			
				if(!isNaN(Fname))
				{
					alert("First Name cannot be number");
					return false;
				}
				
				if(Fname == " " || Lname == " " || x == " " || num == " " || com == " ")
				{
					alert("Please fill all the details");
					return false;
				}
			
				if(!isNaN(Lname))
				{
					alert("Last Name cannot be number");
					return false;
				}
					
			
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
				{
					alert("Not a valid e-mail address");
					return false;
				}
					
				if(!isNaN(num))
				{
					if(num = "" || num.length != 10)
					{
						alert("Invalid mobile number");
						return false;
					}
				}
				else{
					alert("Invalid mobile number");
					return false;
				}
				
				
				if(br == brs)
				{
					alert("Please select your branch");
					return false;
				}
			
					
				if(com.length > 180)
				{
					alert("	Length of comment can't be greater than 180 words");
					return false;
				}
			
			return true;
			}		
		</script>
			                
<style type="text/css">
</style>                    
</head>

<body style="background-image:url(../images/light_grey.jpg)">
				<div class="logo1">
                </div>
                
    <div class="wrapper">	
                	
                    <div><a href="index.html" id="logo"><img src="img/logo.gif" alt="something"/></div>
                    <div class="social" style="margin-top:-100px;">
                    <a href="https://www.facebook.com/groups/192878690763922/" title="facebook"><img src="img/facebook.png" width="20" height="20" alt="facebook"></a>
                    <a href="#" title="twitter"><img src="img/twitter.png" width="20" height="20" alt="twitter"></a>
                    </div>
                 
                    <ul id="nav" class="main">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                		<li><a href="niceforms.php" class="active">MEMBERSHIP</a></li>
                        <li><a href="contact.php">Contact</a></li>
                		<li><a href="blood_database.php">Donate Blood</a></li>
                        <li><a href="SliderGallery/gallery.html">Gallery</a></li>
                    </ul>
            
        </div><!--end of wrapper div-->    <br  /> <br/> <br/>
                             <div style="width:350px; margin-top:100px;">   
                                <p class="message warning bottom">
                                <b>Note:</b>This membership form is for the record of EWB IET-DAVV chapter. Students applying will be called for filling the actual form.
                              </p>
                             </div>   

                             <div style="width:350px; margin-top:100px;">   
                                <p class="message warning bottom">
                                <b>Note:</b>Students must bring the membership fees along with 2 passport sized photographs.
                              </p>
                             </div>   


<div class="" id="container" style="position:relative; top:-350px; left:100px;">        
<form action="" method="post" class="niceform" onsubmit="return validate()">
	<fieldset>
    	<legend>Personal Info</legend>
        <dl>
        	<dt><label for="Fname">First Name</label></dt>
            <dd><input type="text" name="Fname" id="Fname" size="32"/></dd>
        </dl>
        <dl>
        	<dt><label for="Lname">Last Name</label></dt>
            <dd><input type="text" name="Lname" id="Lname" size="32"/></dd>
        </dl>
        <dl>
        	<dt><label for="email">Email Address:</label></dt>
            <dd><input type="text" name="email" id="email" size="32"/></dd>
        </dl>
        <dl>
        	<dt><label for="mobile">Mobile Number</label></dt>
            <dd><input type="text" name="mobile" id="mobile" size="32" maxlength="10" /></dd>
        </dl>

        <dl>
        	<dt><label for="gender">Gender:</label></dt>
            <dd>
            	<select size="1" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
            	</select>
            </dd>
        </dl>
        <dl>
        	<dt><label for="dobMonth">Date of Birth:</label></dt>
            <dd>
            	<select size="1" name="dobMonth" id="dobMonth">
                	<option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select size="1" name="dobDay" id="dobDay">
                	<option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select size="1" name="dobYear" id="dobYear">
                	<option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
                </select>
            </dd>
        </dl>
    </fieldset>
    <fieldset>
    	<legend>BRANCH</legend>
        <dl>
        	<dt><label for="section">Section</label></dt>
            <dd>
            	<select size="1" name="section" id="section">
                    <option value="a">A</option>
                    <option value="b">B</option>
            	</select>
            </dd>
        </dl>

        <dl>
        	<dt><label for="selct_branch">Select Branch</label></dt>
            <dd>
            	<select class="selct_branch" name="select_branch" id="select_branch">
                    	<option>Select your branch</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="ElectronicsI">Electronics & Ins.</option>
                        <option value="ElectronicsTC">Electronics & TC</option>
                        <option value="Civil">Civil</option>
                    </select>            </dd>
        </dl>
    </fieldset>
    <fieldset>
    	<legend>Comments</legend>
        <dl>
        	<dt><label for="comments">WHY YOU WANT TO JOIN US !!!!!!</label></dt>
            <dd><textarea name="comments" id="comments" rows="5" cols="60"></textarea></dd>
        </dl>
    </fieldset>
    <fieldset class="action">
    	<input type="submit" name="submit" class="submit" id="submit" value="Submit"/>
    </fieldset>
</form>

</div>
		<div class="wrapper" style="margin-top:-300px;">
					<div id="footer">
            	
                
                			<div class="grids" style="width:800px;" align="center">
                                <div class="grid-6 grid text-center" align="center" style="width:450px;">
                                    <p> &copy; Copyright 2013,All Rights Reserved   Website Designed by Rudra Gupta</p>
                                </div>
                                
                                <div class="grid-5 grid text-center">
                                  <p>Contact me <a href="https://www.facebook.com/rudra.gupta.50" title="Contact me!">here</a></p>
                                </div>
                                
                           </div><!--end of grids-->
                   </div><!--end of footer-->
		   </div><!--end of wrapper-->

</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$con = mysql_connect("localhost","root","");
		if($con)
		{
			$fname = $_POST['Fname'];
			$lname = $_POST['Lname'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$gender = $_POST['gender'];
			$dob = $_POST['dobDay']." - ".$_POST['dobMonth']." - ".$_POST['dobYear'];
			$section = $_POST['section'];
			$branch = $_POST['select_branch'];
			$comment = stripslashes($_POST['comments']);
			
				if($fname == ""){echo "<script type='text/javascript'>Please fill all the fields;</script>"; }
				else if($lname == ""){echo "<script type='text/javascript'>Please fill all the fields;</script>"; }
				else if($email == ""){echo "<script type='text/javascript'>Please fill all the fields;</script>"; }
				else if($mobile == ""){echo "<script type='text/javascript'>Please fill all the fields;</script>"; }
				else if($comment == ""){echo "<script type='text/javascript'>Please fill all the fields;</script>"; }
	
				else{
						mysql_select_db("ewb",$con);
						mysql_query("insert into membership values('$fname','$lname','$email','$mobile','$gender','$dob','$section','$branch','$comment')");
						echo "<script type='text/javascript'>alert('Thankyou $name.....Welcome to EWB');</script>";
				}
			}
		}
		

?>
