<?php
include 'main.php';

$prop_type=$prop_error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['property-type'])){
    $sql="SELECT PropertyType FROM selectoptions WHERE PropertyType=?";
    $stmt=mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_prop_type);

            $param_prop_type=trim($_POST['property-type']);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $prop_error="This Property type already exists";
                }
                else{
                    $prop_type=trim($_POST['property-type']);
                }
            }
            mysqli_stmt_close($stmt);		
        }
}
if(empty($prop_error)){
$sql="INSERT INTO `selectoptions` (`SlNo`, `PropertyType`) VALUES (NULL, '$prop_type')";
if(mysqli_query($conn, $sql)==true){
    echo "Property type added successfully";
}
else{
    echo "Property type not added". mysqli_error($conn);
}
}
}

?>

<div>
    <form action="" method="post">
        Add Property Type:
    <input type="text" name="property-type" id="property-type">
    <div class="error"><?php echo $prop_error; ?></div>

    <input type="submit" name="submit" id="submit">

    </form>
</div>