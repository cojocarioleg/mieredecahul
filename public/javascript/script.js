  function langDrpdn() {
    document.getElementById("myDropdown-lang").classList.toggle("show-lang");
  }

  function cartDrpdn() {
    document.getElementById("myDropdown-cart").classList.toggle("show-cart");
  }
  
  window.onscroll = function() {scrollFunction()};
  
  var header = document.getElementById("myHeader");
  var content = document.getElementById("content")
  var sticky = header.offsetTop;
  
  function scrollFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      content.classList.add("downscroll");
    } else {
      header.classList.remove("sticky");
      content.classList.remove("downscroll");
    }
  }
  
  function myNav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "header-right-side") {
      x.className += " responsive";
    } else {
      x.className = "header-right-side";
    }
  }

  var coll = document.getElementsByClassName("collapsible");
 var i;

 for (i = 0; i < coll.length; i++) {
   coll[i].addEventListener("click", function() {
     this.classList.toggle("active");
     var content = this.nextElementSibling;
     if (content.style.display === "block") {
       content.style.display = "none";
     } else {
       content.style.display = "block";
     }
   });
 }
