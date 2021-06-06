<?php

session_start();
$name = $email = $mobile = $password = $confirm_password = $msg = "";
$name_error = $email_error = $mobile_error = $password_error = $confirm_password_error = "";
$p_email = $p_mobile = $p_password = $p_confirm_password = "";

$_SESSION['r-name'] = $_POST['r-name'];
$_SESSION['r-email'] = $_POST['r-email'];
$_SESSION['r-mobile'] = $_POST['r-mobile'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['c-pass'] = $_POST['c-pass'];


if (empty($_POST['r-name'])) {
    $name_error = "Name cannot be empty";
} else if (isset($_POST['r-name'])) {
    if (!preg_match("/^[A-Za-z _]+$/", $_POST['r-name'])) {
        $name_error = "Only letters and spaces are allowed";
    } else {
        $name = trim($_POST['r-name']);
    }
}

if (empty($_POST['r-email'])) {
    $email_error = "Email cannot be empty";
} else if (isset($_POST['r-email'])) {
    if (filter_var($_POST['r-email'], FILTER_VALIDATE_EMAIL)) {
        $sql = "SELECT UserID FROM basicreglogin WHERE Email=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $p_email);

            $p_email = trim($_POST['r-email']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_error = "This email ID is alredy registered with us. Kindly LOGIN to continue";
                } else {
                    $email = $_POST['r-email'];
                }
            }

            mysqli_stmt_close($stmt);
        }
    } else {
        $email_error = "Please enter a valid email ID";
    }
}

if (empty($_POST['r-mobile'])) {
    $mobile_error = "Mobile field cacnot be empty";
} else if (isset($_POST['r-mobile'])) {
    if (preg_match("/^[0-9]/", $_POST['r-mobile'])) {
        if (strlen($_POST['r-mobile']) >= 10 && strlen($_POST['r-mobile']) <= 12) {
            $sql = "SELECT UserID FROM basicreglogin WHERE Contact=?";
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "s", $p_mobile);

                $p_mobile = trim($_POST['r-mobile']);

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        $mobile_error = "This Mobile Number  is alredy registered with us. Kindly LOGIN to continue";
                    } else {
                        $mobile = trim($_POST['r-mobile']);
                    }
                }
                mysqli_stmt_close($stmt);
            }
        } else {
            $mobile_error = "Please enter a valid Mobile Number";
        }
    } else {
        $mobile_error = "Please enter only numbers";
    }
}

if (empty($_POST['pass'])) {
    $password_error = "Password canot be empty";
} else if (isset($_POST['pass'])) {
    if (strlen($_POST['pass']) >= 8 && strlen($_POST['pass']) <= 16) {
        $password = trim($_POST['pass']);
    } else {
        $password_error = "Password must be between 8-16 characters";
    }
}
if (isset($_POST['c-pass'])) {
    if (trim($_POST['c-pass']) != trim($_POST['pass'])) {
        $confirm_password_error = "Passwords should match";
    }
}

if (empty($name_error) && empty($email_error) && empty($mobile_error) && empty($password_error) && empty($confirm_password_error)) {
    $sql = "INSERT INTO basicreglogin VALUES (NULL,?,?,?,?,current_timestamp())";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_mobile, $param_password);
        $param_name = $name;
        $param_email = $email;
        $param_mobile = $mobile;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        if (mysqli_stmt_execute($stmt)) {
            session_start();
            $_SESSION["loggedin"] = true;
            echo "<script>alert('User registered successfully')</script>";
            $secondsWait = 0;
            header("Refresh:$secondsWait");
        } else {
            echo "<script>alert('User could not be registered')</script>";
        }
    }

    mysqli_stmt_close($stmt);
}
