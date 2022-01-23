// slides--------------------------------------------------------

       let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
  let slides = document.getElementsByClassName('slides');
  let dots = document.getElementsByClassName('dot');
  
  if(n > slides.length) { slideIndex = 1 }
  
  if(n < 1 ) { slideIndex = slides.length }
  

  for(let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  

  for(let i = 0; i < dots.length; i++) {
    dots[i].classList.remove('active');
  }
  

  slides[slideIndex - 1].style.display = 'block';
  
  dots[slideIndex - 1].classList.add('active');
}



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

      