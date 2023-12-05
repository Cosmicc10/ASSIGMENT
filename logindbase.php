<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="login";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    $Email = $_POST['l1'];
    $password = $_POST['l2'];

$ak="SELECT * FROM social where email = '$Email' ";
$ras = mysqli_query($conn, $ak);

$row = mysqli_fetch_array($ras);
//echo ($row['password']);

 if($row['password'] == $password){
     echo"<p style='color:green;'>YOU HAVE SUCCESSFULLY LOGED IN</p>";
 }
 else{
    echo"<p style='color:red;'>LOGIN FAILED:INCORRECT CREDENTIAL</p>";
 }

?>