/*hamburger*/ 

var open = document.getElementById('hamburger');
var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});




/*search button */



const searchBtn=document.querySelector(".search-btn");
const searchOverlay=document.querySelector(".search-overlay");
const searchPopup=document.querySelector(".search-popup");

searchBtn.addEventListener("click",()=>{
    searchOverlay.classList.add("active");
    searchPopup.classList.add("active");
});


searchOverlay.addEventListener("click",(event)=>{
    if(event.target == searchOverlay){
        searchOverlay.classList.remove("active");
        searchPopup.classList.remove("active");
    }
});


/* slider*/

var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        })
      })

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    };

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();


/*slider 2*/

let fotot = document.getElementsByClassName('foto-slider-foto');
let slider = document.getElementById('slider');

let buttonRight = document.getElementById('slide-right');
let buttonLeft = document.getElementById('slide-left');

buttonLeft.addEventListener('click', function(){
    slider.scrollLeft -= 150;
})

buttonRight.addEventListener('click', function(){
    slider.scrollLeft += 150;
})

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
// alert(maxScrollLeft);
// alert("Left Scroll:" + slider.scrollLeft);

//AUTO PLAY THE SLIDER 
function autoPlay() {
    if (slider.scrollLeft > (maxScrollLeft - 1)) {
        slider.scrollLeft -= maxScrollLeft;
    } else {
        slider.scrollLeft += 1;
    }
}
let play = setInterval(autoPlay, 50);

// PAUSE THE SLIDE ON HOVER
for (var i=0; i < fotot.length; i++){

fotot[i].addEventListener('mouseover', function() {
    clearInterval(play);
});

fotot[i].addEventListener('mouseout', function() {
    return play = setInterval(autoPlay, 50);
});
}


/*navbar on scroll*/

var navbar = document.querySelector('nav');

window.onscroll = function() {

  // navbar and top button 
  if (window.pageYOffset > 0) {
    navbar.classList.add('nav-active');
    topButton.style.display = "block";

  } else {
    navbar.classList.remove('nav-active');
    topButton.style.display = "none";
  }
}
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

/* button top */

const topButton = document.getElementById("top");

topButton.addEventListener("click", function (){
  window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"

  });
});

/* Shopping cart  */

var i = document.getElementById("cart_total").innerText;

function addtocart() {
  localStorage.setItem('shopping-cart', ++i);
  document.getElementById("cart_total").innerHTML = localStorage.getItem('shopping-cart');
}

/* navbar active item jquery */

$("li").click(function(){
            
  // remove the class i.e. selectednav from all li
  $('.nav-items li').removeClass("active-nav-item");
  // apply selectednav class to the current item
  $(this).addClass("active-nav-item");
});








      
          

    
    





