<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: gold;
        }

        #hd {
            background-color: maroon;
            color: silver;
        }
    </style>
</head>
<body>

 <div id="hd">
        <h3>Course Details
            <hr>
        </h3>

        <div id="nav">
       <a href="Home2.html">Home</a>
            <a href="New_Course.html">New Course</a>
            <a href="Update.html">Modify Course</a>
            <a href="Remove.html">Remove Course</a>
            <a href="Read.php">View Course</a>
        </div>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='course';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from course_det";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['cid'].'</td>';
      echo '<td>'.$row['cname'].'</td>';
      echo '<td>'.$row['cfee'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>