// JavaScript Document

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
		
			