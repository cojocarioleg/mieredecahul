 function viewTh() {             
    var item = document.getElementById("products-grid");
    item.classList.remove("product-list");
    item.classList.add("product-th");
  }
  function viewList() {
    var item = document.getElementById("products-grid");
    item.classList.remove("product-th");
    item.classList.add("product-list");
}

 function pageGridDrpdn() {
  document.getElementById("myDropdown-grid").classList.toggle("show-grid");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn-grid')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-grid");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-grid')) {
        openDropdown.classList.remove('show-grid');
      }
    }
  }
}

var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if(n > slides.length) {
    slideIndex = 1
  }

  if(n < 1) {
    slideIndex = slides.length
  }

  for(i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  for(i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function stars5(){
  document.getElementById('review-star-rating').innerText = "5";
}

function stars4(){
  document.getElementById('review-star-rating').innerText = "4";
}

function stars3(){
  document.getElementById('review-star-rating').innerText = "3";
}

function stars2(){
  document.getElementById('review-star-rating').innerText = "2";
}

function stars1(){
  document.getElementById('review-star-rating').innerText = "1";
}