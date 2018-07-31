<?php
include_once 'db.php';
if(isset($_GET['ide']))
{
	$res=mysql_query("select * from student where id='{$_GET['ide']}'");
	$row=mysql_fetch_array($res);
	mysql_query("DELETE FROM student WHERE id='{$_GET['ide']}'");
	//unlink("upload/".$row['image']);
	header("Location: view.php");
}
?>