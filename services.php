<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />

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
      <a href="index.php" class="nav__logo">AGU</a>
        <ul class="nav__items">
          <li><a href="blog.php">Blog</a></li>
          <li><a href="#about">Catergories</a></li>
          <li><a href="contact.php">Contact</a></li> 
          <li><a href="signin.php">Sign In</a></li>
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/Skull.jpg" />
            </div>
            <ul>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="logout.html">LogOut</a></li>
            </ul>
          </li>
        </ul>

        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times"></i></button>
      </div>
    </nav>

    <section class="empty__page">
      <h1>Services Page</h1>
    </section>

    <footer>
      <div class="footer__socials">
        <a href="https://instagram.com/" target="_blank"
          ><i class="uil uil-instagram-alt"></i
        ></a>
        <a href="https://youtube.com/" target="_blank"
          ><i class="uil uil-youtube"></i
        ></a>

        <a href="https://twitter.com/" target="_blank"
          ><i class="uil uil-twitter"></i
        ></a>

        <a href="https://github.com/" target="_blank"
          ><i class="uil uil-github"></i
        ></a>
        <a href="https://linkedin.com/" target="_blank"
          ><i class="uil uil-linkedin"></i
        ></a>
      </div>

      <div class="container footer__container">
        <article>
          <h4>Catergories</h4>
          <ul>
            <li><a href="">wild life</a></li>
            <li><a href="">art</a></li>
            <li><a href="">travel</a></li>
            <li><a href="">food</a></li>
            <li><a href="">music</a></li>
            <li><a href="">scieince and technology</a></li>
          </ul>
        </article>

        <article>
          <h4>Support</h4>
          <ul>
            <li><a href="">Online support</a></li>
            <li><a href="">call Numbers</a></li>
            <li><a href="">Emails</a></li>
            <li><a href="">Social Support</a></li>
            <li><a href="">Location</a></li>
          </ul>
        </article>
        <article>
          <h4>Blog</h4>
          <ul>
            <li><a href="">wild life</a></li>
            <li><a href="">art</a></li>
            <li><a href="">travel</a></li>
            <li><a href="">food</a></li>
            <li><a href="">music</a></li>
            <li><a href="">scieince and technology</a></li>
          </ul>
        </article>
        <article>
          <h4>Permalinks</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">contact</a></li>
          </ul>
        </article>
      </div>
      <div class="footer__copyright">
        <small>Copyright &copy; MccGrey 2023</small>
      </div>
    </footer>

    <script src="main.js"></script>
  </body>
</html>
