<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>sign up</title>
	</head>
	<body>
	<h1 align="center">Register</h1>
	<hr/>
	 <form action="validate.php" method="post">
	   <table align="center">
	      <tr>
		      <td>Username:</td>
			  <td><input type="text" name="uname" required=""></td>
		  </tr>
		   <tr>
		      <td>Password:</td>
			  <td><input type="password" name="pass" required=""></td>
		  </tr>
		  <tr>
		      <td>Re-Password:</td>
			  <td><input type="password" name="rpass" required=""></td>
		  </tr>
		  <tr>
		      <td>Email:</td>
			  <td><input type="email" name="email" required=""></td>
		  </tr>
		  <tr>
		      <td>Phone:</td>
			  <td><input type="text" name="phone" required=""></td>
		  </tr>
		  <tr>
		      <td>Full Name:</td>
			  <td><input type="text" name="fname" required=""></td>
		  </tr>
		   <tr>
		      <td>Select Occupation:</td>
			  <td><select name="Occupation" required="">
                 <option value="Teacher">Teacher</option>
                 <option value="Student">Student</option>
                 </select></td>
		  </tr>
		  <tr>
		      <td></td>
			  <td><input type="submit" name="submit"></td>
			  <td><input type="reset" name="reset"></td>		  
		  </tr>	
	   </table>
	 </form>	 
   </body>
</html>