<?php
  session_start();
  if(! $_SESSION['email']  ) {
      header('Location:html/login.html');
  }
 

 
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="images/png" href="images/log2.jpeg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Sweet-tails</title>


</head>

<body>
<!--- header  --->
 <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>sweet</span>Tails </a>

        <nav class="navbar">
            <a href="#">accueil</a>
            <a href="#a-propos">à propos</a>
            <a href="#services">services</a>
            <a href="html/contact.php">contact</a>
            <a href="back/logout.php">deconnexion</a>
            
        </nav>

    <div id="login-btn">
           
    </div>

</header> 

<!--- bg du site --->
<div class="home" id="home">
    <img data-speed="5" class="home-parallax" src="images/babash.jpg" alt="background du site">
</div>

<!--- slider vers le bas --->
<div class="landing" align="center">
    <a href="#categories" class="delivery-link">
       
        <i class="scroll-icon fas fa-angle-down"></i> <br>
        <span class="scroll-text" data-text="Categories"></span>
    </a>
</div>

<!--- categories --->
<section class="categories" id="categories">

   <!--  <h1 class="heading">nos <span>categories</span> </h1> -->

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <a href="back/affichec_adopt/chats.php"><img src="images/amcic.PNG" alt=""></a>
                <div class="content">
                    <h3>chats</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <a href="back/affichec_adopt/chiens.php"><img src="images/aqjun.PNG" alt=""></a>
                <div class="content">
                    <h3>chiens</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <a href="back/affichec_adopt/equide.php"><img src="images/awtul.jpg" alt=""></a>
                <div class="content">
                    <h3>équidés</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <a href="back/affichec_adopt/rogneur.php"><img src="images/awtul.jpg" alt=""></a>
                <div class="content">
                    <h3>rongeurs</h3>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!--- sevices  --->

<section class="services" id="services">

    <h1 class="heading">nos <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-bone"></i>
            <h3>fournitures animaux</h3>
            <p>tous types de nourriture pour les animaux du refuge.</p>
          
        </div>


        <div class="box">
            <i class="fas fa-home"></i>
            <h3>refuges gratuits</h3>
            <p>refuges gratuits rien que pour les animaux rescués.</p>
           
        </div>

        <div class="box">
            <i class="fas fa-user-nurse"></i>
            <h3>gardes animaux</h3>
            <p>disponibilités des volontaires gardes animaux spécialites.</p>
            
        </div>
    </div>

</section>

<!--- a propos --->
<section class="a-propos" id="a-propos">
  <h1 class="heading">à <span>propos</span></h1>

  <h1 align="center" class="h1">
    Bonjour, nous espérons que ce message vous trouve en bonne santé.<br><br>
        Nous sommes une organisation qui tend à aider les animaux de compagnie sans abri,<br> Nous les récupérons et prenons soin d'eux <a href="#services">(voir nos services)</a> <br> jusqu'à ce que nous leur trouvions une bonne famille qui les adoptent.<br><br> S'il vous plait
        n'hésitez pas à <a href="html/contact.html">nous contacter</a> ou faire un <a href="#">don</a> si possible,<br> nous vous en serons très reconnaissants. merci,<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; à bientôt!!
       
  </h1>   
</section>

<!--- boutons partages  --->
<section  id="bouton_partage">
  <div class="share">
    <ol>
      <li><a target="-_blank" href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a></li> 
      <li><a target="_blank" href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i></a></li>
      <li><a target="_blank" href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a></li>
    </ol>
    <div class="toggle"></div>
  </div>
</section>

<!--- footer --->
<footer id="footer" class="footer"> 
  <span class="copyrights">&copy; 2022 - Sweet tails</span>
  <a href="#" class="conditions">Condition générales d'adoption</a>
</footer>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<!--- js --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

<script type="text/javascript" src="js/js.js"></script>
<script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>


<!---- ---->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html> 