<?php

require 'config/database.php';

//GET THE SIGNUP FORM DATA IF SIGNUP BUTTON WAS CLICKED

if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // VALIDATE INPUT VALUES

    if(!$firstname) {
        $_SESSION['signup'] = "Please enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your Last Name";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your Username";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid email";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password  should be 8+ characters";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Please add avatar";
    } else {
        //CHECK IF PASSWORDS DONT MATCH

        if($createpassword !== $confirmpassword) {
            $_SESSION['signup'] = "Passwords do not match";
         } else {
            //HASH PASSWORD
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            

            // CHECK IF USERNAME OR EMAIL ALREADY EXISTS IN DATABASE
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result =mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Username or email already exists";
            } else {
                //WORK ON AVATAR
                //RENAME AVATAR
                $time = time(); //MAKE EACH IMAGE NAME UNIQUE USING CURRENT TIMESTAMP
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                //MAKE SURE FILE IS AN IMAGE
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);

                if(in_array($extension, $allowed_files)) {
                    // MAKE SURE IS NOT TOO LARGE (1MB)
                    if ($avatar['size'] < 1000000) {
                        //PROCEED TO UPLOAD AVATAR
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = "File size too big. should be less than 1mb";
                    }
                } else {
                    $_SESSION['signup'] = "File should png, jpg or jpeg";
                }
            }
         }
    }

    // REDIRECT TO AVATAR IF ENCOUNTER ANY ERROR
    if(isset($_SESSION['signup'])) {
        //PASS YOUR DATA BACK TO SIGN UP PAGE
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'signup.php');
        die();
    } else {
        // PROCEED TO INSERT NEW USER TO USER TABLE
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=0";

        $insert_user_result = mysqli_query($connection, $insert_user_query);


        if (!mysqli_errno($connection)) {
            // redirect to login page with success message
            $_SESSION['signup-success'] = "Registration successful, please log in";
            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    }

} else {
    //if button wasnt clicked bounce basck to signup
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}