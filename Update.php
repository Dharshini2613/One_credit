<?php
$host='localhost';
$user='root';
$pass='';
$db='course';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['cid'];
$cna=$_POST['cna'];
$cfe=$_POST['cfe'];

$sql="update course_det set cname='$cna',cfee='$cfe' where cid='$id'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>