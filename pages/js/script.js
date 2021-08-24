/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

    

  /* -- SLIDE -- */

  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  


/* 
    function slide1(){
    document.getElementById('id').src="http://localhost/20013148-5_EdenilsonF.Santos/pages/images/doce-sagu.jpg";
    setTimeout("slide2()", 3000)
    document.getElementById('aId').href="http://localhost/20013148-5_EdenilsonF.Santos/pages/localizacao.php"
    }
    
    function slide2(){
    document.getElementById('id').src="http://localhost/20013148-5_EdenilsonF.Santos/pages/images/doce-de-leite-cremoso2.jpg";
    setTimeout("slide3()", 3000)
    document.getElementById('aId').href="link2.html"
    }
    
    function slide3(){
    document.getElementById('id').src="http://localhost/20013148-5_EdenilsonF.Santos/pages/images/goiabada_cremosa1.jpg";
    setTimeout("slide1()", 3000)
    document.getElementById('aId').href="link3.html"
    }
*/