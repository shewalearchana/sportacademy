
<html>
<head>
  <title>MINI WEB</title>
  <link rel="stylesheet" type="text/css" href="style/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="style/style.css"/>
  
</head>
<body class="responsive">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> SPORTS ACADEMY,Nasik</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
      <ul class="nav navbar-nav navbar-right">
        <li>
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <!--button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button-->
    </form></li>
    <li>&nbsp&nbsp</li>
        <li><a href="index.html">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container"><br/><br/></div>
      <div class="container">
      <center>
        <h2><b>Student Database</b></h2>
      <table class="table table-striped table-hover">
        <thead>
        <tr class="danger">
          <th>Student Name</th>
          <th>Email Id</th>
          <th>Contact no.</th>
          <th>Gender</th>
          <th>Birth date</th>
          <th>Games</th>
          <th>Mother Name</th>
          <th>Action</th>        
        </tr>
        </thead>
        
    <tbody>
    <?php
    include_once("db.php");
    $sql="select id,studName,mail,scontact,gender,bday,games,motherName from student";
    $r=mysql_query($sql);
    $i=0;?>
    <?php
    while($row = mysql_fetch_array($r)):   
    ?>
    <tr>
   
    <td><?php echo $row['studName'];?></td>
    <td><?php echo $row['mail'];?></td>
    <td><?php echo $row['scontact'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['bday']; ?></td>
    <td><?php echo $row['games'];?></td>
    <td><?php echo $row['motherName'];?></td>
    <td><button type="button" class="btn btn-outline-danger"><a href="delete.php?ide=<?php echo $row['id'] ?>)">Delete file</a></button></td>
    <!--td><a href="update.php?ide=<?php echo $row['id']; ?>">Edit</a></td-->
    </tr>
    
    <?php endwhile;?>
    </tbody>
      </table>
      </center>
    </div>
    </body>
  </html>
