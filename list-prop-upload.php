<?php
include 'main.php';
$propID="";
$userID=$name=$uploader=$upldFor=$email=$mobile=$ptype=$pLocality=$pcity=$exclusivity=$wagreement=$target=$pimage="";
$name_error=$mobile_error=$email_error="";
$userID=$_SESSION['id'];
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(isset($_POST['list-prop-upload-1'])){

if(isset($_POST['uploader-type'])){
	$uploader=$_POST['uploader-type'];
}

	

    if(empty($_POST['p-name'])){
		$name_error="Name cannot be empty";
	}
	else if(isset($_POST['p-name'])){
	if (!preg_match("/^[A-Za-z _]+$/", $_POST['p-name'])) {
			$name_error="Only letters and spaces are allowed";
		}
		else{
			$name=trim($_POST['p-name']);
		}
	}
	
	if(empty($_POST['p-email'])){
		$email_error="Email cannot be empty";
	}
	else if(isset($_POST['p-email'])){
		if(filter_var($_POST['p-email'], FILTER_VALIDATE_EMAIL)){
						$email=$_POST['p-email'];
					}
		else{
			$email_error="Please enter a valid email ID";
		}
	}
	
	if(empty($_POST['p-mobile'])){
		$mobile_error="Mobile field cacnot be empty";
	}
	else if(isset($_POST['p-mobile'])){
		if(preg_match("/^[0-9]/",$_POST['p-mobile'])){
			if(strlen($_POST['p-mobile'])>=10 && strlen($_POST['p-mobile'])<=12){
						$mobile=trim($_POST['p-mobile']);
					}
		else{
			$mobile_error="Please enter a valid Mobile Number";
		}
	}
		else{
			$mobile_error="Please enter only numbers";
		}
	}
	

	if(isset($_POST['upload-for'])){
		$upldFor=$_POST['upload-for'];
	}
	if(isset($_POST['property-type'])){
		$ptype=$_POST['property-type'];
	}

	if(isset($_POST['property-city'])){
		$pcity=$_POST['property-city'];
	}
	if(isset($_POST['property-locality'])){
		$pLocality=$_POST['property-locality'];
	}


	/*if(move_uploaded_file($_FILES['upload-img']['tmp-name'], $target)){
		echo "Your File is successfully uploaded";
	}
	else{
		echo "Image not uploaded";
	}*/

if(isset($_POST['rsk-exclusivity'])){
	$exclusivity=$_POST['rsk-exclusivity'];
}


if(isset($_POST['agree-whatsapp'])){
	$wagreement=$_POST['agree-whatsapp'];
}
//if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	//$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

	// image file directory
	$target = "images/".basename($image);

	//$sql = "INSERT INTO listproperty (Images) VALUES ('$image')";
	// execute query
	//mysqli_query($conn, $sql);

	
//}

if(empty($name_error) && empty($email_error) && empty($mobile_error) && empty($password_error) && empty($confirm_password_error)){
	
    $sql="INSERT INTO `listproperty` (`PropertyID`, `UserID`, `Iam`, `Name`, `Mobile`, `Email`, `PropertyFor`, `PropertyType`, `City`, `Locality`, `Images`, `RSK_exclusivity`, `Wcontactagreement`, `Message`, `UploadTime`)
	 VALUES ('','$userID', '$uploader', ?, ?, ?, '$upldFor', '$ptype', '$pcity', '$pLocality', '$image', '$exclusivity', '$wagreement', '', current_timestamp())";
    $stmt=mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sss",$param_name, $param_mobile, $param_email);
        $param_name=$name;
        $param_email=$email;
        $param_mobile=$mobile;
		$imgMove=move_uploaded_file($_FILES['image']['tmp_name'], $target);

        if(mysqli_stmt_execute($stmt)){
            echo "Please login to continue";
			$_SESSION['basic-uploaded']=true;
			$_SESSION['propID']=$stmt->insert_id;
			
		}
        else{
            echo "Something went wrong!! Please try again.";
        }
		mysqli_stmt_close($stmt);
    }
	else{
		echo "Something went wrong".mysqli_error($conn);
	}
    
    

}
}

$price=$title=$buildArea=$config=$posession=$facing=$carpetArea="";
$bathrooms=$balcony=$bedrooms=$parking=$about_prop="";
$title_err=$price_err="";
//Details of the property
if(isset($_POST['list-prop-continue-2'])){

	if(empty($_POST['prop-price'])){
		$price_err="Property price cannot be empty";
	}
	else if(isset($_POST['prop-price'])){
		if (!preg_match("/^[0-9 _]+$/", $_POST['prop-price'])) {
			$peice_err="Only letters and spaces are allowed";
		}
		else{
		$price=trim($_POST['prop-price']);
		}
	}

	

    if(empty($_POST['prop-title'])){
		$title_err="Property Title cannot be empty";
	}
	else if(isset($_POST['prop-title'])){
	if (!preg_match("/^[A-Za-z0-9 _]+$/", $_POST['prop-title'])) {
			$title_err="Only letters and spaces are allowed";
		}
		else{
			$title=trim($_POST['prop-title']);
		}
	}
	

	if(isset($_POST['prop-buildup-area'])){
		$buildArea=trim($_POST['prop-buildup-area']);
	}

	if(isset($_POST['prop-config'])){
		$config=trim($_POST['prop-config']);
}
if(isset($_POST['prop-facing'])){
	$facing=trim($_POST['prop-facing']);
}
if(isset($_POST['prop-carpet-area'])){
	$carpetArea=trim($_POST['prop-carpet-area']);
}
if(isset($_POST['prop-bathrooms'])){
	$bathrooms=trim($_POST['prop-bathrooms']);
}
if(isset($_POST['prop-balcony'])){
	$balcony=trim($_POST['prop-balcony']);
}
if(isset($_POST['prop-bedrooms'])){
	$bedrooms=trim($_POST['prop-bedrooms']);
}
if(isset($_POST['prop-parking'])){
	$parking=trim($_POST['prop-parking']);
}
if(isset($_POST['about-property'])){
	$about_prop=trim($_POST['about-property']);
}
	
if(empty($price_err) && empty($title_err)){
	
    $sql="INSERT INTO `property_details` (`PropertyID`, `PropTitle`, `PropPrice`, `BuildupArea`, `Configuration`, `PosessionStatus`, `Facing`, `CarpetArea`, `Bathrooms`, `Balcony`, `Bedrooms`, `Parking`, `About`, `UpdatedTime`) 
	VALUES (?, '$title', '$price', '$buildArea', '$config', '$posession', '$facing', '$carpetArea', '$bathrooms', '$balcony', '$bedrooms', '$parking', '$about_prop', current_timestamp())";
    $stmt=mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "s",$param_propID);
        $param_propID=$_SESSION['propID'];
        
        if(mysqli_stmt_execute($stmt)){
            $_SESSION['prop-uploaded']=true;
			echo "property Uploaded Successfully";
		}
        else{
            echo "Something went wrong!! Please try again.";
        }
		mysqli_stmt_close($stmt);
    }
	else{
		echo "Something went wrong".mysqli_error($conn);
	}
    

}



}
}

?>