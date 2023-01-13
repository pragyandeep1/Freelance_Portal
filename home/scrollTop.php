<style>
#scrolltop {
  display: none;
  position: fixed;
  bottom: 1rem;
  right: 2rem;
  z-index: 99;
  font-size: 1rem;
  border: none;
  outline: none;
  background-color: tomato;
  color: white;
  cursor: pointer;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  border-radius: 30%;
}

#scrolltop:hover {
  background-color: #555;
}
</style>
<div onclick="topFunction()" id="scrolltop">
  <i class="fas fa-angle-up"></i>
</div>

<script>
//Get the button
var mybutton = document.getElementById("scrolltop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>