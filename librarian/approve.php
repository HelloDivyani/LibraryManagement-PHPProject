<?php
$conn=mysqli_connect("localhost","root","root","lms") or die("The connection to the database has not been made");
$id=$_GET['id'];
$sql="UPDATE student_registeration SET status='yes' WHERE id='$id'";
$result=mysqli_query($conn,$sql) or die("Your query is not right");
header('Location:display_student_info.php');	
								
?>