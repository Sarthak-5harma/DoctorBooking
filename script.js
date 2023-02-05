/*top sticky js*/
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
document.getElementById("myOverlay").style.display = "none";
}
/*global sticky jsscript*/
function openFormgs() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeFormgs() {
    document.getElementById("myForm").style.display = "none";
  }
/*automatic slideshow jsscript*/
var responsiveSlider = function() {

  var slider = document.getElementById("slider");
  var sliderWidth = slider.offsetWidth;
  var slideList = document.getElementById("slideWrap");
  var count = 1;
  var items = slideList.querySelectorAll("li").length;
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");
  
  window.addEventListener('resize', function() {
    sliderWidth = slider.offsetWidth;
  });
  
  var prevSlide = function() {
    if(count > 1) {
      count = count - 2;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if(count = 1) {
      count = items - 1;
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
  };
  
  var nextSlide = function() {
    if(count < items) {
      slideList.style.left = "-" + count * sliderWidth + "px";
      count++;
    }
    else if(count = items) {
      slideList.style.left = "0px";
      count = 1;
    }
  };
  
  next.addEventListener("click", function() {
    nextSlide();
  });
  
  prev.addEventListener("click", function() {
    prevSlide();
  });
  
  setInterval(function() {
    nextSlide()
  }, 30000);
  
  };
  
  window.onload = function() {
  responsiveSlider();  
  }
  /*dark mode*/
  function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
 }
;
 /*extra code*/


                                          