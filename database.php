<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="login";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    

    $Name = $_POST['n4'];
    $Email = $_POST['n1'];
    $Phone = $_POST['n3'];
    $password = $_POST['n2'];

$sql = "INSERT INTO `social` (`email`, `password`,`phone no.`,`Name`) VALUES ('$Email', '$password', '$Phone', '$Name')";
$rs = mysqli_query($conn, $sql);

if($rs>0)
{
	echo "YOU HAVE REGISTERED SUCCESSFULLY";
}

?>