<?php
require 'config/database.php';

// FETCH CURRENT USER FROM DATABASE

if (isset($_SESSION['user-id'])) {
  $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT avatar FROM users WHERE id=$id";
  $result = mysqli_query($connection, $query);
  $avatar = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">

    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <title>Blog Website</title>
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="<?php echo ROOT_URL ?>" class="nav__logo">AGU</a>
        <ul class="nav__items">
          <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
          <li><a href="#about">Catergories</a></li>
          <li><a href="<?php echo ROOT_URL ?>profile.php">About</a></li>
          <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li> 
          <?php if(isset($_SESSION['user-id'])) : ?>
            <li class="nav__profile">
          <div class="avatar">
              <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>" />
            </div>    
            <ul>
              <li><a href="<?php echo ROOT_URL ?>admin/index.php">Dashboard</a></li>
              <li><a href="<?php echo ROOT_URL ?>logout.php">LogOut</a></li>
            </ul>
          </li>
          <?php else : ?>
          <li><a href="<?php echo ROOT_URL ?>signin.php">Sign In</a></li>
          <?php endif ?>
        </ul>

        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times"></i></button>
      </div>
    </nav>