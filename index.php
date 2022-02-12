<?php
  session_start();
  if(! $_SESSION['email'] ) {
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
    <title>Sweet-tails</title>


</head>

<body>

<!------------------------------------------------------------------------------------------------------>
    <section id="home" class="home-container">
        <header id="header" class="header">
            <img src="images/sweet-tails.jpg" alt="sweet-tails" class="logo" >
            <ul class="nav-links">
                <li>
                    <a href="#" data-text="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="#apropos" data-text="A-propos">A-propos</a>
                </li>
             
                 <li>
                    <a href="#contact" data-text="Contact">Contact</a>
                </li>
                 <li>
                    <a href="back/logout.php" data-text="Se déconecter">Se déconecter</a>
                </li>
                
            </ul>
            <div class="burger-container">
                <div class="burger"></div>
            </div>
        </header>
        <div class="landing">
            <h1 class="big-title">N'achetez pas votre <br> animal de compagnie,<br> <span class="texte"></span> </h1>
          
            <a href="#animeux" class="delivery-link">
            <span class="scroll-text" data-text="Animeux">Animeux</span>
            <i class="scroll-icon fas fa-angle-down"></i>
            </a>
           
            
          
        </div>
    </section>
<!------------------------------------------------------------------------------------------------------>

 <!-- ----------------------------------------------------------------------------------------------------------------------- -->
<section id="animeux" class="animeux-contener">
  
   <h1>Animeux</h1>
<div class="cards">
     
    <a href="back/affiche_categorie/chiens.php" class="card">
      <div class="card-background" style="background-image: url(images/categorie/chiens.jpg)"></div>
      <div class="card-content">
        <p>Catégorie</p>
        <h3>Chiens</h3>
      </div>
    </a>
  
    <a href="back/affiche_categorie/chats.php" class="card">
      <div class="card-background" style="background-image: url(images/categorie/chats.jpg)"></div>
      <div class="card-content">
        <p>Catégorie</p>
        <h3>Chats</h3>
      </div>
    </a>
  
    <a href="back/affiche_categorie/equide.php" class="card">
      <div class="card-background" style="background-image: url(images/categorie/équidés.jpeg)"></div>
      <div class="card-content">
        <p>Catégories</p>
        <h3>Equidès</h3>
      </div>
    </a>
  
    <a href="back/affiche_categorie/rogneur.php" class="card">
      <div class="card-background" style="background-image: url(images/categorie/rongeur.jpg)"></div>
      <div class="card-content">
        <p>Catégories</p>
        <h3>Rongeur</h3>
      </div>
    </a>
  </div>
</section>
<!------------------------------------------------------------------------------------------------------>
<section id="apropos" class="a-propos">
  <div class="apropos-texte">
  <h1>À propos de nous</h1>
<p >
    Bonjour, nous espérons que ce message vous trouvera en bonne santé.<br>
    Nous sommes une association qui tend à venir en aide aux animaux sans abri,<br> 
    Nous les récupérons et prenons soin d'eux (voir nos services)<br> 
    jusqu'à ce que nous leur trouvions une bonne famille qui les adopte.<br> 
    S'il vous plait
    n'hésitez pas à nous contacter ou à faire un don si possible,<br> 
    nous vous en serons très reconnaissants. Merci à bientôt!!
</p>
  </div>
</section>


<!------------------------------------------------------------------------------------------------------>
  
<!------------------------------------------------------------------------------------------------------>
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
<!------------------------------------------------------------------------------------------------------>
     <form id="contact" method="post"  action="back/espace admine/contact.php" > 
      <h1>Contactez-nous</h1>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Votre Nom et Prénom</label>
            <input type="text" name="Nom" autocomplete="off" required />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="email" name="email" autocomplete="off" required />
            <i class="fas fa-envelope"></i>
          </div>
         <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text" name="num" autocomplete="off" required />
            <i class="fas fa-mobile"></i>
          </div>
        </div> 

        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea name="message_pub" placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>

      <div class="pied-formulaire" align="center">
        <button type="submit" value="Envoiyer !" name="submit">Envoyer le message</button>
      </div>
    </form>
    <!-- ---------------------------------------------------------------------------------------------------- -->

<!------------------------------------------------------------------------------------------------------>
       <footer id="footer" class="footer"> 
        <span class="copyrights">&copy; 2022 - Sweet tails</span>
        <a href="#" class="conditions">Condition générales d'adoption</a>
    </footer>
    



  <!-- ------------------------------------------------------------- -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<!------------------------------------------------------------------------------------------------------>
   
    <script type="text/javascript" src="js/js.js"></script>
   <script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>

     

    

</body>

</html> 