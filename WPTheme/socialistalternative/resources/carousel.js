let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}



function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("salt-articlepreview");
  if (n > slides.length) {
    slideIndex = 1; //makes you go back to the start when you click next on the last slide?
  }
  if (n < 1) {
    slideIndex = slides.length;//makes you go to last slide when you click previous on first?
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }


  slides[slideIndex - 1].classList.add("active");
  

}
