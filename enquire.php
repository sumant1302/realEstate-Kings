<?php
    include 'main.php';

    $name=$email=$mobile=$msg=$lookingfor=$enquiry_msg="";
    $name_error=$email_error=$mobile_error="";
    $p_email=$p_mobile="";

    $_SESSION["msg"]="";
    
    if(empty($_POST['e-name'])){
		$name_error="Name cannot be empty";
	}
	else if(isset($_POST['e-name'])){
	if (!preg_match("/^[A-Za-z _]+$/", $_POST['e-name'])) {
			$name_error="Only letters and spaces are allowed";
		}
		else{
			$name=trim($_POST['e-name']);
		}
	}
	
	if(empty($_POST['e-email'])){
		$email_error="Email cannot be empty";
	}
	else if(isset($_POST['e-email'])){
		if(filter_var($_POST['e-email'], FILTER_VALIDATE_EMAIL)){

						$email=$_POST['e-email'];
        }
		else{
			$email_error="Please enter a valid email ID";
		}
	}
	
	if(empty($_POST['e-mobile'])){
		$mobile_error="Mobile field cacnot be empty";
	}
	else if(isset($_POST['e-mobile'])){
		if(preg_match("/^[0-9]/",$_POST['e-mobile'])){
			if(strlen($_POST['e-mobile'])>=10 && strlen($_POST['e-mobile'])<=12){
						$mobile=trim($_POST['e-mobile']);
            }	
		else{
			$mobile_error="Please enter a valid Mobile Number";
		}
	}
		else{
			$mobile_error="Please enter numbers only";
		}
	}
    if(isset($_POST['property-type'])){
        $lookingfor=$_POST['property-type'];
    }
	if(isset($_POST['enquiry-msg'])){
        $enquiry_msg=$_POST['enquiry-msg'];
    }

if(empty($name_error) && empty($email_error) && empty($mobile_error)){
    $sql="INSERT INTO `enquirycontact` (`SlNo`, `Name`, `ContactNumber`, `Email`, `Query`, `LookingFor`, `Date-Time`) VALUES (NULL,?, ?, ?, '$enquiry_msg', '$lookingfor', current_timestamp())";
    $stmt=mysqli_prepare($conn, $sql);
    
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sss",$param_name, $param_mobile, $param_email);
        $param_name=$name;
        $param_email=$email;
        $param_mobile=$mobile;

        if(mysqli_stmt_execute($stmt)){
            echo "alert('Your enquiry has been sent. We will contact you shortly')";
            //header("location: login-reg.php");
        }
        else{
            echo "Something went wrong!! Please try again.";
        }
    }
    
    mysqli_stmt_close($stmt);

}



    /*$sql="UPDATE EnquiryContact SET `Name`=CONCAT(`FirstName`,`LastName`)";
    if(mysqli_query($conn, $sql)){
        echo "Table created";
    }
    else{
        echo "Not Created". mysqli_error($conn);
    }*/
?>
<!--<link rel="stylesheet" type="text/css" href="rsk-web.css">
	<link rel="icon" type="image/png" href="images/rsk-icon.png"/>	
    
<div class="enquiry">
		<div class="enquiry-left">
			<img src="images/real-estate8.png" alt="real-estate-kings">
		</div>
		<div class="enquiry-right">
			<h2 style="color: blanchedalmond; text-align: center;">Enquire With Us</h2>
			<form name="enquiry" class="enquiry-form" action="" method="post" onsubmit="return validateEnquiryForm()">
				<div class="form-name">
				<input type="text" name="f-name" id="f-name" placeholder="First Name">
				<input type="text" name="l-name" id="l-name" placeholder="Last Name">
                <div id="message"></div>
				</div>
				<input type="phone" name="mobile" id="mobile" placeholder="Mobile Number">
				<input type="email" name="email" id="email" placeholder="Email">
				<textarea name="query" id="query" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
				<input type="submit" name="submit" id="submit" value="Submit">
				
			</form>
		</div>
	</div>
    <script>
        function validateEnquiryForm(){
        var fname=document.forms["enquiry"]["f-name"].value;
        var lname=document.forms["enquiry"]["l-name"].value;
        var pass=document.forms["enquiry"]["pass"].value;
        var msg=document.getElementById("message");
        if(fname == "" || lname==""){
            alert("Name required");
        }
        if(!isNaN(fname) || !isNaN(lname)){
            msg.innerHTML="Only characters allowed";
            return false;
        }
        if(pass==""){
            msg.innerHTML="Password cannot be left blank";
            return false;
        }
        
        if(pass.includes(fname)){
            msg.innerHTML="Password cannot include name";
            return false;
        }
        if(pass.length<8){
            msg.innerHTML="Password must not be less than 8 characters";
            return false;
        }
        
        if(pass.length>16){
            msg="Password must not be more than 16 characters";
            return false;
        }
        }
    </script>-->
