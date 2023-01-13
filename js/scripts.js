window.addEventListener("load", function(){
  const loader_container = document.querySelector(".loader-container");
  // loader_container.className += " loader-hidden"; //  class loader-container hidden
});

document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {  
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end

$(document).ready(function(){
  $('.menu-toggle').on('click',function(){
    $('.nav').toggleClass('showing');
    $('.nav ul').toggleClass('showing');
  });


    $('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),

    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });

});

function myFunction() {
  var x = document.getElementById("myLinks");
  var y = document.getElementById("traverse");
  var z = document.getElementById("search");
  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "block";
  } else {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  }
}

$(document).ready(function() {
  var timer;
  
  // when the button and button menu are hovered
  $('.dropdown button, .dropdown-menu').hover(function() {
    clearTimeout(timer);
    // Add the class .open and show the menu
    $('.dropdown').addClass('open');
    
  }, function() {
    
    // Sets the timer variable to run the timeout delay
    timer = setTimeout(function() {
      // remove the class .open and hide the submenu
      $('.dropdown').removeClass("open");
    }, 500);
    
  });
});


$(function(){
  $("#loginBtn").click(function(){
    window.location.href = '/login';
  });
});

$("header").clone().appendTo("#fading-header");

// Get the header height
var headerHeight = $("header").outerHeight();

// Scrolling down it slides down/up the fixed header
$(window).on('scroll', function() {
  if ($(this).scrollTop() > headerHeight) {
    $("#fading-header").slideDown(); // or fade in with .fadeIn()
  } else {
    $("#fading-header").slideUp(); // or fade out with .fadeIn
  }
});