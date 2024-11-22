<?php
$host='localhost';
$user='root';
$pass='';
$db='course';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['cid'];

$sql="delete from course_det where cid='$id'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>