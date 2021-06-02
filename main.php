<?php
$server="localhost";
$user="root";
$password="";
$db="realestatekings";
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("Error! Connection unsuccessfull");
}

 

/*$sql="UPDATE loginform SET UserID=CONCAT('U00000',id)";

if(mysqli_query($conn, $sql)){
    echo "Table Updated";
}
else{
    echo "Error". mysqli_error($conn);
}*/
?>