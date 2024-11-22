<?php
$host='localhost';
$user='root';
$pass='';
$db='course';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$cna=$_POST['cna'];
$cfe=$_POST['cfe'];

$sql="insert into course_det(cname,cfee) values('$cna','$cfe')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>