<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<title>GIVE BLOOD | GIVE LIFE...AN EWB IET INITIATIVE</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            <link rel="stylesheet" media="screen" type="text/css" href="blood.css" />
            
                <script type="text/javascript" src="membership_js.js"></script>
			    <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
            <script src="js/jquery.formalize.min.js" type="text/javascript"></script><!--include that only on pages with forms-->
				 
                 <!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
                  <!--[if lte IE 7]>
                    	<style>
                    		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
                            .grid-4{ width:22% }
                        </style>
                    <![endif]-->

</head>

<body>
	<div class="wrapper">	
                     <a href="index.html" id="logo"><img src="img/logo.gif" alt="EWB IET LOGO" /></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in-->
                    <div class="social">
                    <a href="https://www.facebook.com/groups/192878690763922/" title="facebook"><img src="img/facebook.png" width="20" height="20" alt="facebook"></a>
                    <a href="#" title="twitter"><img src="img/twitter.png" width="20" height="20" alt="twitter"></a>
                    </div>
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="index.html">Home<!--<span>Die Startseite</span>--></a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                		<li><a href="niceforms.php">MEMBERSHIP</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="SliderGallery/gallery.html">Gallery</a></li>
                    </ul>
                        
        </div><!--end of wrapper div--> 
        
                                     <div class="green bottom">   
                                <h3 align="center">Notice</h3>
                                <p>People who are interested in donating blood to needy ones can fill their details below</p>
                                <p>Registered people will be called when any blood camp is organised in IET campus</p>
                                <p>No private blood enquiries are taken</p>
                             </div>    

<h5><b>Fields in first form are necessary</b></h3>
<div id="stylized" class="myform">
              <h1>Enter Details</h1>
	<table>
	  <form id="form" name="form" method="post" action="" onSubmit="return validate()">

             
				<tr>
                	<td class="caption">Name</td>
        			<td><input type="text" name="name" id="Fname" /></td>
                </tr>
		                                 
        		<tr>
                	<td class="caption">Email</td>
                    <td><input type="text" name="email" id="email" /></td>
				</tr>                    
             
        		<tr>
                	<td class="caption">Mobile No.</td>
                    <td><input type="text" name="mobile" id="mobile" maxlength="10" /></td>
				</tr>                    
                
                <tr>
                	<td class="caption">Select your Blood Group </td>
                    <td> 
                    	<select name="select_blood" id="select_blood">
	                          <option value='' selected></option>
                              <option value="O +ve" >O +ve</option>
                              <option value="O -ve">O -ve</option>
                              <option value="A +ve">A +ve</option>
                              <option value="A -ve">A -ve</option>
                              <option value="B +ve">B +ve</option>
                              <option value="B -ve">B -ve</option>
                              <option value="AB +ve">AB +ve</option>
                              <option value="AB -ve">AB -ve</option>
                              <option value="A1 +ve">A1 +ve</option>
                              <option value="A1 -ve">A1 -ve</option>
                              <option value="A2 +ve">A2 +ve</option>
                              <option value="A2 -ve">A2 -ve</option>
                              <option value="A1B +ve">A1B +ve</option>
                              <option value="A1B -ve">A1B -ve</option>
                              <option value="A2B +ve">A2B +ve</option>
                              <option value="A2B -ve">A2B -ve</option>
                              
						</select>                              
					</td>
				</tr>                                            
                
             	<tr>
                	 <td> <button  type="submit" name="submit" id="submit">Donate Blood !!! </button></td>
				</tr>

             <div class="spacer"></div>
             
	 </form>
	</table>     
</div>


<div id="stylized" class="myform1" style="position:relative;top:20px;">
              <h1>Address Details</h1>
	<table>
	  <form id="form" name="form1" method="post" action="">

             
				<tr>
                	<td class="caption">House No. / Name</td>
        			<td><input type="text" name="hname" id="hno" /></td>
                </tr>
		                                 
        		<tr>
                	<td class="caption">Street</td>
                    <td><input type="text" name="haddress" id="street" /></td>
				</tr>                    
             
        		<tr>
                	<td class="caption">District</td>
                    <td><input type="text" name="district" id="district" class="district" maxlength="10" readonly="readonly" value="Indore"/></td>
				</tr>                    
                
        		<tr>
                	<td class="caption">Do you belong to some BLOOD organisations If Yes then MENTION else write NO.</td>
                    <td><input type="text" name="other" id="org" value="" /></td>
				</tr>                    


             <div class="spacer"></div>
             
	 </form>
	</table>     
</div>

		<div class="wrapper" align="left">
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
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$select_blood = $_POST['select_blood'];
		if($name == "" || $email == "" || $mobile == ""){
			echo "<script type='text/javascript'>alert('Please fill all the details')</script>";
		}
		else{
			$con = mysql_connect("localhost","root","");
			if($con)
			{
				mysql_select_db("ewb",$con);
				mysql_query("insert into blood values('$name','$email','$mobile','$select_blood')");
				echo "<script type='text/javascript'>alert('Thankyou for supporting.....Keep Donating Blood')</script>";
			}
		}
	}
?>	