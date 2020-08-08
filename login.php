

<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="login-css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	<title>form</title>
	<h1 style="text-align: center;">Assigment To Do List </h1>
</head>
<body>
	<script>
		function check(form)
		{
			var a=form.name.value;
			if(a=="" || a!=Nan())
			{
				alert("Please Enter your name correctly");
			}
			var b=form.username.value;
			var len=b.length();
			if(b==null || len<5)
			{
				alert("Please Enter your usermame correctly");
			}
			var c=form.email.value;
			if(c==null || c!=Nan())
			{
				alert("Please Enter your email correctly");
			}
			var d=form.password.value;
			if(a==null || a==Nan())
			{
				alert("Please Enter your password correctly");
			}
		}
		 function checkPassword(form) { 

                password1 = form.password1.value; 

                password2 = form.password2.value; 

  

                // If password not entered 

                if (password1 == '') 

                    alert ("Please enter Password"); 

                      

                // If confirm password not entered 

                else if (password2 == '') 

                    alert ("Please enter confirm password"); 

                      

                // If Not same return False.     

                else if (password1 != password2) { 

                    alert ("\nPassword did not match: Please try again...") 

                    return false; 

                } 

  

                // If same return True. 

                else{ 

                    alert("welcome") 

                    return true; 

                } 

            }
	</script>
	<form onSubmit="return checkPassword(this)" method="post">	
		<label>
    		<p class="label-txt"></p>	
			<input type="text" name="name" class="input" placeholder="Enter Your Name" onkeypress="return (event.charCode > 64 && 
    		event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
    		<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
    		   <div class="input-group">
   				<div class="input-group-addon">
				<i class="fa fa-envelope-o"></i> 
   			</div>

    	</label>

		<label>
			<input type="text" name="username" class="input" placeholder="Enter your username" onkeypress="return (event.charCode > 64 && 
	    	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
	    	<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
    	</label>

    	<label>
			<input type="email" name="email" class ="input"placeholder="Enter Your email" >
			<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
		</label>

		<label>		
			<input type="password" name="password"  class ="input" placeholder="Create  password"  id="password1" >
			<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
		</label>
		<label>
			<input type="password" name="password2" class="input" placeholder="Confirm password"  id="password2">
			<div class="line-box">
	      		<div class="line">
	      		</div>
	    		</div>
	    </label>
		<!--<input type="button" value="Submit" onclick="check(this.form);"><br><br>-->
		<div class="form-group">
        <button type="submit" name="submit" class="button" onclick="check(this.form);"> Create Account  </button>
    </div>
    <p class="text-center">Have an account? <a href="alreadyaccount.php">Log In</a> </p>

	</form>


	<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not found";
}

if(!mysqli_select_db($con,'yagna'))
{
	echo"database not found";
}

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT INTO registration(id,name,username,email,password,status) VALUES('','$name','$username','$email','$password','1')";
	$query=mysqli_query($con,$sql);
}

?>
	

</body>
</html>