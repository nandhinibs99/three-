<?php
$con=new mysqli("localhost","root","","books");
if($con->connect_error){
    die("connection failed:".$con->connect_error );
}
$name=$_POST["name"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$pno=$_POST["pno"];
$add=$_POST["add"];
$bname=$_POST["bname"];

$sql="INSERT INTO bookreg (name,age,dob,pno,add,bname) values('$name','$age','$dob','$pno','$add','$bname')";
if($con->query($sql)==TRUE){
    echo "new record created";
}
else
{
    echo "error". $sql . "<br>" .$con->error; 
}
$con->close();
