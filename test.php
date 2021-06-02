<?php
include 'main.php';
$hash_password=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
// See the password_hash() example to see where this came from.
$sql = "SELECT Password FROM basicreglogin WHERE Email='sumant130201@gmail.com'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==1){
    while($row=mysqli_fetch_assoc($result)){
        $hash_password=$row['Password'];
    }
}
echo $hash_password."<br>";
//if(isset($_POST['l-password'])){
  //  $password=$_POST['l-password'];}
$password="sumant@13";
$hashed_password=password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password."<br>";
if (password_verify($password, $hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
}
?>
