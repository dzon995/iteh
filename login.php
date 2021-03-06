<!DOCTYPE html>
<html lang="en">
<html lang="sr">

<head>
  <meta charset="utf-8">
  <title>PetPROTECTORS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo1.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/RegCss.css" rel="stylesheet">

  
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <h3><a href="#hero">PetProtectors</a></h3>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="http://localhost/iteh/index.php">Početna strana</a></li>
          <li><a href="#about">O portalu</a></li>
           <li><a href="#team">Tim</a></li>
          <li><a href="#services">Usluge</a></li>
          <li><a href="#call-to-action">Oglasi korisnika</a></li>
         
          <li class="menu-active"><a href="#registracija">Registruj se</a>  
            <li><a href="#contact">Kontaktirajte nas</a></li>
          <li class="menu-has-children"><a href="">Nalog</a>

            <ul>
              <li><a href="http://localhost/iteh/mojprofil.php">Vaš nalog</a></li>
              <li><a href="http://localhost/iteh/login.php">Ulogujte se</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
               
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
    <div class="container wow fadeInUp">
<div class="container">
  <div class="row">
        <div class="col-md-6">
            <form action="" method="post" id="fileForm" role="form">
            <legend class="text-center">Uneti podatke za logovanje</legend>

            
  

            <div class="form-group">
                <label for="username"><span class="req"> </span> Username:</label> 
                    <input class="form-control" type="text" name="user_username" id = "txt" onkeyup = "Validate(this)" placeholder="Username" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="Password"><span class="req"> </span> Password:</label> 
                    <input class="form-control" type="text" name="user_password" id = "pass1"  placeholder="Password" required />  
                        <div id="errLast"></div>
            </div>
            
            
 

            

            <!-- ends register form -->

        </div><!-- ends col-6 -->
   
            

  </div>
</div>


    </div>




      
      <input type="submit" name="nastavi" class="btn-get-started">Ulogujte se</a>

    </form>
    </div>
<?php
$f="";
if(isset($_POST["nastavi"])==true){
if(isset($_POST["user_username"])== true && $_POST["user_username"]==$f &&  isset($_POST["user_password"])==true && $_POST["user_password"]==$f){
?>

<script>
  
alert("Morate popuniti sva polja.");
window.location="http://localhost/iteh/login.php";

</script>


<?php


}


else{


include "konekcija.php";
$sql="SELECT username, password FROM novikorisnik";
if (!$q=$mysqli->query($sql)){
echo "<p>Nastala je greska pri izvodenju upita</p>" . $mysqli->query();
die();
}
if (mysqli_num_rows($q)==0){
?>

<script>
alert("Morate se registrovati");
window.location="http://localhost/iteh/index.php#registracija";


</script>
<?php
} 
else {
  $_SESSION["username"] = $_POST["user_username"];
   $_SESSION["password"] = $_POST["user_password"];
  


 
while ($red=mysqli_fetch_array($q)){

if($red["username"]==$_POST["user_username"] && $red["password"] != $_POST['user_password']){
?>
  <script>
    
    alert("Uneli ste pogrešan password.");
    window.location="http://localhost/iteh/index.php";
  </script>
  <?php

  break;


}
if($red["username"]==$_POST["user_username"] && $red["password"] == $_POST['user_password']){
 
  ?>
  <script>
    
    alert("Uspesno ste se ulogovali.");
    window.location="http://localhost/iteh/mojprofil.php";
  </script>
  <?php

  break;
}

}
if($red["username"]!=$_POST["user_username"] && $red["password"] != $_POST['user_password']){
?>
<script >
alert("Ne postojite u bazi. Morate se registrovati");
window.location="http://localhost/iteh/index.php#registracija";
</script>
<?php
}
}
?>
<?php
}
$mysqli->close();

}






?>






  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    

    <!--==========================


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Usluge</h3>
          <p class="section-description"> Šta nudimo da bismo zaštitili one koje volimo?</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Prijava nestanka</a></h4>
              <p class="description">Sekcija prijave nasilja nad životinjama</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Prijava pronalaska</a></h4>
              <p class="description">Sekcija prijave pronađenog ljubimca</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Prijava nasilja</a></h4>
              <p class="description">Sekcija prijave nasilja nad životinjama</p>
            </div>
          </div>

        

      </div>
    </section><!-- #services -->
         
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Statistika prijava </h3>
          <p class="section-description"></p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Broj registrovanih korisnika</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Broj oglasa nestanka</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Broj prijava nasilja nad životinjama</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Broj slučajeva vraćenih ljubimaca vlasnicima</p>
          </div>

        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Postojanje uznemirujućeg sadržaja</h3>
            <h3 class="cta-title"> UPOZORENJE!<br> Sadržaj u nastavku može biti osetljivog karaktera</h3>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#portfolio">Nastavi</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
     <div id="divSample" class="hideClass">

        <div class="section-header">
          <h3 class="section-title">Oglasi korisnika</h3>
          <p class="section-description">Skorašnji oglasi koji su korisnici postavljali</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Svi oglasi</li>
              <li data-filter=".filter-app">Nestanak </li>
              <li data-filter=".filter-card">Nasilje</li>
              
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>
</div>
      </div>

    </section><!-- #portfolio -->

   

    <!--==========================
      Team Section
    ============================-->
    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kontakt</h3>
          <p class="section-description">Prijavu možete izvršiti i lično! Pronađite nas u samom srcu Beograda.</p>
        </div>
      </div>

      <div id="google-map" data-latitude="44.797356" data-longitude="20.465999"></div>

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Svetosavska 5<br>Beograd</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>petprotectors@hotmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+381655583538</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="http://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Pošaljite pitanje/poruku. Odgovorićemo u što skorijem periodu. Hvala!</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>petPROTECTORS</strong>.Sva prava zadržana
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"> Povratak na početak. <i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script type="js/RegJS.js"></script>

</body>
</html>
