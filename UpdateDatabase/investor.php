<?php
    include 'config.php';

/*// Upload configs.
define('UPLOAD_DIR', 'investor-images');
define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
//@changed_2018-02-17_14.28
define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
*/
$investor_image=$investor_name="";
$imageErr=$investor_name_error="";



    if(isset($_POST['insert-investors'])){
        if(empty($_POST['i-investor-name'])){
            $investor_name_error="Name cannot be empty";
        }
        else if(isset($_POST['i-investor-name'])){
        if (!preg_match("/^[A-Za-z _]+$/", $_POST['i-investor-name'])) {
                $investor_name_error="Only letters and spaces are allowed";
            }
            else{
                $investor_name=trim($_POST['i-investor-name']);
            }
        }
     if(isset($_POST['i-investor-image'])){
        $investor_image=$_POST['i-investor-image'];
    }
$image=$_FILES['i-investor-image']['name'];
$target="investor-images/".basename($image);
//$imgMove=move_uploaded_file($_FILES['i-investor-image']['tmp_name'], $target);

if(empty($investor_name_error)){
$sql="INSERT INTO investors VALUES ('',?,?,current_timestamp())";
$stmt=$conn->prepare($sql);

    $imgMove=move_uploaded_file($_FILES['i-investor-image']['tmp_name'], $target);
    if(!$imgMove){
        $imageErr="Not able to upload";
    }
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss",$param_name, $param_target);
        $param_name=$investor_name;
        $param_target=$target;
		
 if($stmt->execute()){
     echo "Investor details Inserted";
    }
    else{
        echo "Some Error";
    }
}

$stmt->close();

}
}

if(isset($_POST['update-investors'])){
    if(empty($_POST['i-investor-name'])){
        $investor_name_error="Name cannot be empty";
    }
    else if(isset($_POST['i-investor-name'])){
    if (!preg_match("/^[A-Za-z _]+$/", $_POST['i-investor-name'])) {
            $investor_name_error="Only letters and spaces are allowed";
        }
        else{
            $investor_name=trim($_POST['u-investor-name']);
        }
    }
 if(isset($_POST['u-investor-image'])){
    $investor_image=$_POST['u-investor-image'];
}
$new_image=$_FILES['u-investor-image']['name'];
$new_target="investor-images/".basename($new_simage);
$imgMove=move_uploaded_file($_FILES['u-investor-image']['tmp_name'], $target);

if($imgMove!=true){
$imageErr="Not able to upload";
}
if(empty($investor_name_error) && empty($imageErr)){
$sql="UPDATE investors SET InvestorName='$investor_name' AND InvestorLogo='$new_target' AND UpdateTime=current_timestamp()";
$stmt=$conn->prepare($sql);

if($stmt){
if($stmt->execute()){
 echo "Investor details Updated";
}
else{
 echo "Error! Not able to update data";
}

}
}
}





?>
<h2>Insert Investor Database</h2>
<form action="" name="insert-investors" method="post" enctype="multipart/form-data">
    Investor Name:
    <input type="text" name="i-investor-name">
    InvestorImage:
    <input type="file" name="i-investor-image">

    <input type="submit" name="insert-investors" id="insert-investors">
</form>
<h2>Update Investor Database</h2>
<form action="" name="update-investors" method="post" enctype="multipart/form-data">
    Investor Name:
    <input type="text" name="u-investor-name" id="investor-name">
    InvestorImage:
    <input type="file" name="u-investor-image" id="investor-image">

    <input type="submit" name="update-investors" id="update-investors">
</form>