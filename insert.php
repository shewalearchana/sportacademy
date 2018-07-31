	<?php
   include_once("db.php");
   if(isset($_POST['save']))
   
   {
   		if($_POST['pass']==$_POST['cpass'])
   			{
   						$name=$_POST['name'];
   						$email=$_POST['email'];
   						$pass=$_POST['pass'];
   						$add=$_POST['add'];
   						$mob=$_POST['mob'];
   						$sal=$_POST['sal'];
   						$gen=$_POST['gen'];
   						echo $gen;
   						$dob=$_POST['dob'];
   						$JOD=$_POST['JOD'];
   						
   						$sql="INSERT INTO users(name,email,password,address,mobile,Salary,gender,dob,JOD)
   						VALUES('$name','$email','$pass','$add','$mob','$sal','$gen','$dob','$JOD')";
   						mysql_query($sql) or die(mysql_error());
   						header("location:index.php");
   			}
   			else
   			{
   				echo "password not match";
   			}
   	
   }
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>user insert</title>
   </head>
   <body>
      <div style="background-color: black;color: white;padding: 30px;">
         <h1>
            <b>
               <center>Employee Registration System</center>
            </b>
         </h1>
      </div>



      <div style="background-color: green;color: red;padding: 10px;"></div>
      <!DOCTYPE html>
         <html>
         <head>

         <style>
          .redtext{
                 color: red;
         }
         </style>
         </head>
         <body>
        	<h1 class="redtext">
         <i>
            <font size='3' ></font>
            <marquee bgcolor="grey">Please Enter Your Details Here</marquee> 
         <center> <center>
         </i> 
         </h1></body>
         </html>




     	<div class="container">
 		 <div class="row">
 		 	<div class="col-md-4 col-md-offset-4">
         <form role="form" class="class" action="" method="post" enctype="multipart/form-data">
            <table>
               <font size="40px">
                  <tr>
                     <td>Name :</td>
                     <td><input class="form-control" type="text" name="name" /></td>
                  </tr><br>
                  <tr>
                     <td>Email :</td>
                     <td><input class="form-control" type="text" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{0,9}" /></td>

                  </tr>
                  <tr>
                     <td>Password :</td>
                     <td><input class="form-control" type="password" name="pass"  /></td>
                  </tr>
                  <tr>
                     <td>Confirm Password :</td>
                     <td><input class="form-control" type="password" name="cpass"  /></td>
                  </tr>
                  <tr>
                     <td>Address :</td>
                     <td><input class="form-control" type="text" name="add"  /></td>
                  </tr>
                  <tr>
                     <td>Mobile :</td>
                     <td><input class="form-control" type="text" name="mob" pattern="{0,9}"  /></td>
                  </tr>
                  <tr>
                     <td>Salary :</td>
                     <td><input class="form-control" type="text" name="sal" pattern="{0,9}" /></td>
                  </tr>
                  <tr>
                     <td>Gender :</td>
                     <td>
                        <select class="form-control" name="gen">
                           <option value="male">MALE</option>
                           <option value="female">FEMALE</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td>Date Of Birth :</td>
                     <td><input type="text" class="form-control" name="dob" /></td>
                  </tr>
                  <tr>
                     <td>Joining Date  :</td>
                     <td><input type="text" class="form-control" name="JOD"  /></td>
                     
                  </tr>
                  <tr>
                  <td colspan="3" align="center"><input type="submit" name="save" <button type='button' class="btn btn-success">
                  </button/></td>
                  </tr>
               </font>
            </table>
         </form>
      </div>
     </div>
     </div>
   </body>
</html>
