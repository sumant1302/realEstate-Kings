<?php
    include 'config.php';

/*// Upload configs.
define('UPLOAD_DIR', 'investor-images');
define('UPLOAD_MAX_FILE_SIZE', 10485760); // 10MB.
//@changed_2018-02-17_14.28
define('UPLOAD_ALLOWED_MIME_TYPES', 'image/jpeg,image/png,image/gif');
*/
$investor_image=$member_name=$designation=$target=$about="";
$imageErr=$member_name_error="";


    if(isset($_POST['insert-team'])){
        if(empty($_POST['i-member-name'])){
            $member_name_error="Name cannot be empty";
        }
        else if(isset($_POST['i-member-name'])){
        if (!preg_match("/^[A-Za-z _]+$/", $_POST['i-member-name'])) {
                $member_name_error="Only letters and spaces are allowed";
            }
            else{
                $member_name=trim($_POST['i-member-name']);
            }
        }
     if(isset($_POST['i-member-image'])){
        $investor_image=$_POST['i-member-image'];
    }
$image=$_FILES['i-member-image']['name'];
$target="uploaded-images/team-images/".basename($image);

if(empty($member_name_error)){
$sql="INSERT INTO our_team VALUES ('', '$member_name','$designation','$target','$about',current_timestamp())";
$stmt=$conn->prepare($sql);

if($stmt){
    $imgMove=move_uploaded_file($_FILES['i-member-image']['tmp_name'], $target);
    if($imgMove!=true){
        $imageErr="Not able to upload";
    }
    
 if($stmt->execute()){
     echo "Team details Inserted";
     echo $imageError;
 }
 else{
     echo "Error! Not able to insert data";
 }

}
    $stmt->close();
}
}


if(isset($_POST['update-team'])){
    if(empty($_POST['i-member-name'])){
        $member_name_error="Name cannot be empty";
    }
    else if(isset($_POST['i-member-name'])){
    if (!preg_match("/^[A-Za-z _]+$/", $_POST['i-member-name'])) {
            $member_name_error="Only letters and spaces are allowed";
        }
        else{
            $member_name=trim($_POST['u-member-name']);
        }
    }
 if(isset($_POST['u-member-image'])){
    $investor_image=$_POST['u-member-image'];
}
$new_image=$_FILES['u-member-image']['name'];
$new_target="investor-images/".basename($new_simage);
$imgMove=move_uploaded_file($_FILES['u-member-image']['tmp_name'], $target);

if($imgMove!=true){
$imageErr="Not able to upload";
}
if(empty($member_name_error) && empty($imageErr)){
$sql="UPDATE our_team SET Name='$member_name' AND Image='$new_target' AND UpdatedAt=current_timestamp()";
$stmt=$conn->prepare($sql);

if($stmt){
if($stmt->execute()){
 echo "Team details Updated";
}
else{
 echo "Error! Not able to update data";
}

}
$stmt->close();
}
}





?>
<h2>Insert Team Database</h2>
<form action="" name="insert-team" method="post" enctype="multipart/form-data">
    Team Member Name:
    <input type="text" name="i-member-name">
    Designation:
    <input type="text" name="i-member-designation">
    About:
    <textarea name="i-about-member" id="about-member" cols="30" rows="10" placeholder="About Member"></textarea>
    
    Team Member Image:
    <input type="file" name="i-member-image">

    <input type="submit" name="insert-team" id="insert-team">
</form>
<h2>Update Investor Database</h2>
<form action="" name="update-team" method="post" enctype="multipart/form-data">
    Investor Name:
    <input type="text" name="u-member-name" id="investor-name">
    InvestorImage:
    <input type="file" name="u-member-image" id="investor-image">

    <input type="submit" name="update-member" id="update-member">
</form>