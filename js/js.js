


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


      