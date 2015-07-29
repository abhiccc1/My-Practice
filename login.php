<html>
<body>
<?php
$conn=new mysqli("localhost","root","","abhinav");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="select * from users";

$result=$conn->query($sql);

$row=$result->fetch_assoc();

if($_POST["uname"]===$row["username"] && $_POST["upass"]===$row["password"])

{
echo "Welcome ".$row["username"]."!";
}

else {

echo "Wrong username or password.<br>Try again.";
}

?>
</body>
</html>