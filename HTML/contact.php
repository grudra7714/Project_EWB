<!DOCTYPE html>
<html><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<title>Contact Us</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
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
                    
<style type="text/css">
body{
   font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
   font-size:12px;
 }

</style>                    
                    

</head>

<body>
	<div class="wrapper">	
                     <a href="index.html" id="logo"><img src="img/logo.gif" alt="something" /></a>
                   
                   <!--These are just samples, use your own icons. If you use larger ones, make sure too change the css-file to fit them in-->
                    <div class="social">
                    <a href="https://www.facebook.com/groups/192878690763922/" title="facebook"><img src="img/facebook.png" width="20" height="20" alt="facebook" /></a>
                    <a href="#" title="twitter"><img src="img/twitter.png" width="20" height="20" alt="twitter"></a>
                    </div>
                 
                    
                    <ul id="nav" class="main">
                        <li><a href="index.html">Home<!--<span>Die Startseite</span>--></a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                		<li><a href="niceforms.php">MEMBERSHIP</a></li>
                        <li><a href="contact.html" class="active">Contact</a></li>
                		<li><a href="blood_database.php">Donate Blood</a></li>
                        <li><a href="SliderGallery/gallery.html">Gallery</a></li>
                    </ul>
                        
        </div><!--end of wrapper div--> 
           
	<div class="clear"></div>    

     <div class="wrapper">
    
    		<div class="grids top">

                <div class="grid-6 grid">
                            <h2>Contact Us</h2>
                             <div>   
                                <p class="bottom">
                                Vishal Dandge - 8109083352<br />
                                Ankit Vaidhya - 9893688157<br />
                                Naman Jain - 9827441260<br />
                              </p>
                             </div>
                             <div class="green bottom">   
                                <h3>New torchbearers of EWB-IET:</h3>
                                 <p>President: Naman Jain</p>
                	             <p>Secretary: Ashwini Tokekar</p>
                                 <p>Treasurer: Somya Jain</p>
                                 <p>Vice President: Anurag Gupta</p>
                             </div>    
                             
						</div> 		
                
<!--===============================================================  Contact form =====================================================================================-->                 
                  <div class="grid-10 grid">
                           <h2>Any question.....</h2>

					<!--An example for a contact form from formalize.me, table in use.</h6>-->
                                  
                       <form  action="contact_php.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
                              <table class="form">
                                <tr>
                                  <th>
                                    <label for="name">
                                      Name
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="Fname" name="name" required="required" />
                        
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                                    <label for="email">
                                      Email
                                    </label>
                                  </th>
                                  <td>
                        
                                    <input class="input_full" type="email" id="email" name="email" required="required" />
                                  </td>
                                </tr>
                               
                                <tr>
                        
                                  <th>
                                    <label for="tel">
                                      Phone
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="mobile" name="tel" required="required" />
                                  </td>
                                </tr>
                        
                                <tr>
                                  <th>
                                    <label for="subject">
                                      Subject
                                    </label>
                                  </th>
                                  <td>
                                    <select class="input_full" id="subject" name="subject">
                        
                                      <option value="">Choose subject...</option>
                                      
                                        <option value="1k_2k">Question</option>
                                        <option value="2k_3k">Project</option>
                                        <option value="3k_4k">Feedback</option>
                                        <option value="4k_5k">Other</option>
                        
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                        
                                    <label for="description">
                                      Your<br />
                                      message
                                    </label>
                                  </th>
                                  <td>
                                    <textarea id="comments" name="comment" rows="8" required="required" placeholder="Please write your message here."></textarea>
                                  </td>
                        
                                </tr>
                              </table>
                        
                              <p align="center">
                                <input type="submit" value="Send" class="float_left" />
                              </p>
                            </form>
                            
                </div><!--end of grid-10--> 
			</div><!--end of grids-->
           
	</div><!--end of wrapper-->

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

        	<script type="text/javascript"> <!--Outdated browsers warning/message and link to Browser-Update. Comment or delete it if you don´t want to use it-->
						var $buoop = {} 
						$buoop.ol = window.onload; 
						window.onload=function(){ 
						 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
						 var e = document.createElement("script"); 
						 e.setAttribute("type", "text/javascript"); 
						 e.setAttribute("src", "http://browser-update.org/update.js"); 
						 document.body.appendChild(e); 
						} 
			</script> 
            
</body>
</html>


<?php
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$subject = $_POST['subject'];
		$comment = stripcslashes($_POST['comment']);
		if($name == "" || $email == "" || $mobile == ""){
			echo "<script type='text/javascript'>alert('Please fill all the details')</script>";
		}
		else{
			$con = mysql_connect("localhost","root","");
			if($con)
			{
				mysql_select_db("ewb",$con);
				mysql_query("insert into contact values('$name','$email','$mobile','$subject','$comment')");
				echo "<script type='text/javascript'>alert('We will soon respond to your query...Keep visiting')</script>";
			}
		}
	}
?>	