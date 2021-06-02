<?php
$conn=mysqli_connect("localhost","root","","aromafeeds");
if(!$conn){
    die("Database successfully connected");
}
$sql="SELECT City FROM cities WHERE States=?";

$city="";
$stmt= $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
//$stmt->store_result();
$stmt->bind_result($city);
//$result=$stmt->get_result();
//while($city=$result-> fetch_array(MYSQLI_ASSOC){
//    print $city[0]."<br>\n";
//}
    
echo "<option>Choose..</option>";
while($stmt->fetch()){
    echo "<option>".$city."</option>";
}
$stmt->close();


?>
/*$result=mysqli_query($conn, $sql);
$city[]="";
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
        $city[]=$row['City'];
    }
}
foreach($city as $c){
    echo $c;
}
$q=$_REQUEST["q"];
*/

/*
$city[]="";
$stmt=mysqli_prepare($conn, $sql);
if($stmt){
    mysqli_stmt_bind_param($stmt, "s", $c);
    $c=trim($_POST['state']);
    //Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)>0){
            while($row=mysqli_stmt_fetch($stmt)){
                $city[]=$row['City'];
            }
        }
        else{
            echo "City Data not available";
        }
        foreach($city as $ci){
        echo $ci;
        }
    }
    else{
        echo "Something went wrong";
    }
}

mysqli_stmt_close($stmt);
*/

<!--
    <form action="" method="post">
        <input type="text" name='state'>
        <input type="submit">
    </form>