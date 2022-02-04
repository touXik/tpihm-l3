
$(document).ready(function(){
    var typed = new Typed(".texte", {
        strings: ["adopte-le .", "aime-le ."," et protège-le ."],
        typeSpeed: 80,
        backSpeed: 60,
        loop: true
    });
});


//bouton__partage -------------------------------------------------------------

const toggle = document.querySelector('.toggle');

toggle.addEventListener('click', () => {
  const shareBtn = document.querySelector('.share');
  shareBtn.classList.toggle('activee');
});

//------------------------------------------------------------------------------

const burgerContainer = document.querySelector('.burger-container');
        const navLinks = document.querySelector('.nav-links');

        burgerContainer.addEventListener('click', () => {
            burgerContainer.classList.toggle('active');
            navLinks.classList.toggle('active');
        })
      