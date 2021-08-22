/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  var $simpleCarousel = document.querySelector(".js-carousel--simple");

  new Glider($simpleCarousel, {
    slidesToShow: 2,
    slidesToScroll: 2,
    draggable: true,
    dots: ".js-carousel--simple-dots",
    arrows: {
      prev: ".js-carousel--simple-prev",
      next: ".js-carousel--simple-next",
    },
  });
  

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