<?php
include_once("db.php");
if(isset($_POST['save']))

{
    //if($_POST['pass']==$_POST['cpass'])
    //  {
            $name=$_POST['studName'];
            $address=$_POST['address'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            
            $pin=$_POST['pin'];
            $gender=$_POST['gender'];
            $dob=$_POST['bday'];
             $games=$_POST['games'];
            $email=$_POST['mail'];
            $contact=$_POST['scontact'];
            //echo $gen;
            $father=$_POST['fatherName'];
            $mother = $_POST['motherName'];


            $sql="INSERT INTO student(studName,address,city,state,pin,gender,bday,games,mail,scontact,fatherName,motherName)
            VALUES('$name','$address','$city','$state','$pin','$gender','$dob','$games','$email','$contact','$father','$mother')";
            

            $res=mysql_query($sql) or die(mysql_error());


            if(!$res)
            {
              echo "sorry";
            }
            else
            {
              echo "success";
            }

            header("location:index.html");
     /* }
      else
      {
        echo "password not match";
      }*/
  
}
?> 
