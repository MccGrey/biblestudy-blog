<?php

require 'config/database.php';

if(isset($_GET['id'])) {
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
//fetch user from database
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);

//make sure we get back oly one user
if(mysqli_num_rows($result) == 1) {
    $avatar_name = $user['avatar'];
    $avatar_path = '../images' . $avatar_name;

    // delete image if image exists
    if($avatar_path) {
        unlink($avatar_path);
    }
}


//FOR LATER
//FETCH ALL THUMBNAILS OF USERS POST AND DELETE THEM







}