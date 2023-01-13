<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <link rel="icon" href="../img/favicons/okcl-logo.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
  
    <link href="../css/navbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/small.css">
    <link rel="stylesheet" type="text/css" href="../css/style_add_on.css">
    <link rel="stylesheet" type="text/css" href="../css/style_login.css">
    <link rel="stylesheet" type="text/css" href="../css/style_forgot.css">
    <link rel="stylesheet" type="text/css" href="../css/styles_postjob.css">

     <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- //jquery -->

      <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript" src="tinymce/tinymce.min.js"></script>

	<div class="banner bg-success">
	<img src="../img/favicons/okcl-logo.png" alt="logo" class="rounded float-left h-25" style="padding-top: 2rem;">
	<h2 class="text-light text-uppercase pt-5">post new job here</h2>
	<!-- <p class="text-light text-center">Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p> -->
	<marquee behavior="scroll" class="text-warning" direction="left"><b>Find A Job at India's No.1 Freelance Site. Best Places to Work, Search Jobs on the Go!!	Get best matched jobs directly in your mail. Tell us what kind of a job you are looking out for and stay updated with latest opportunities.
		</b></marquee>
</div>

	<!-- <form class=""> -->
<div class="content w-60 bg-light" style="position: absolute; top: 15rem; left: 10rem; border: 1px dotted gray; padding:3rem; border-radius: 0.5rem;">	
    <form action="/action_page.php">
    	<i class="fas fa-briefcase"></i>
	    <label for="jtitle">Job title</label>
	    <input type="text" id="jtitle" name="jobtitle" placeholder="eg. Build an android game." required>
	    <div>
	    	<a type="button" tabindex="-1" class="link_btn module_btn u-copyBlue rhythmMarginSmall" style="outline: none; text-shadow: none;" onclick="show()"><strong>Examples</strong> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	    	 <ul id="hide" class="module_list no-border bullet rhythmMarginSmall u-copyBlue" style="display: none;">
	    	 	<li><p class="copy small rhythmMarginSmall">
						Developer required for WordPress theme
					</p></li> <li><p class="copy small rhythmMarginSmall">
						Need designer for company logo and assets
					</p></li> <li><p class="copy small rhythmMarginSmall">
						Require video editor to add sound effect
					</p></li></ul>
				</div>
	
	<div class="texteditor-container">
	    <label for="subject">Brief Description about the job</label>
		<textarea id="editor" name="subject" required></textarea>
		<input type="file" id="myFile">
		<p>You can drag and drop your file here (Max file size: 25 MB)</p>
	</div>
	
	<div id="display-post" style="width:44rem;" ></div><br><br>
	
	 <div class="d-flex">
	    <i class="fas fa-tools"></i>
	    <p class="text-uppercase" style="font-family: 'Staatliches', cursive;">What Job do you need to be get done?</p>
	  </div>
	  <div class="categorySelect">
	  	
<div class="container">
	<div class="row">
  <div class="col">
    <a type="button" class="module_box" href="#!">Programming &amp; Development</a>
    <a type="button" class="module_box" href="#!">Design &amp; Art</a>
    <a type="button" class="module_box" href="#!">Writing &amp; Translation</a>
  </div>
  </div>
  <div class="row">
  
  <div class="col">
    <a type="button" class="module_box" href="#!">Insurance &amp; Health</a>
    <a type="button" class="module_box" href="#!">Business &amp; Finance</a>
    <a type="button" class="module_box" href="#!">Sales &amp; Marketing</a>
  </div>
  </div>

  <div class="row">
 
  <div class="col">
    <a type="button" class="module_box" href="#!">Engineering &amp; Architecture</a>
    <a type="button" class="module_box" href="#!">Legal &amp; Security</a>
    <a type="button" class="module_box" href="#!">Education &amp; Training</a>
  </div>
  </div>
</div>

<!-- <label for="subCatRadio_10" class="columnSelection__label">Industry Specific Expertise</label> -->



	   <div style="text-align: left; margin-left: 5px;">
	   	<a type="button" class="link_btn">
				My category is not listed.
			</a>
		</div> <!----> <!---->
	</div>
	    <input type="submit" value="Submit">
  </form>
</div>

<link rel="stylesheet" type="text/css" href="../css/styles_postjob.css">



<div id="scrolltop" style="display:none;">
  <i class="fa fa-angle-up"></i>
</div>
<link rel="stylesheet" type="text/css" href="../css/style_scrolltop.css">
<script>
	/*$(".rotate").click(function () {
    $(this).toggleClass("down");
})*/

function show(){
	var x = document.getElementById('hide');

	if (x.style.display==="block") {
		x.style.display = "none";
	}
	else{
		x.style.display = "block";
	}
}

	tinymce.init({
	  selector: 'textarea#editor',  //Change this value according to your HTML
	  auto_focus: 'element1',
	  width: "700",
	  height: "200"
	});
	
	$( document ).ready(function() {
	
		$('#buttonpost').on("click", function(){
			tinyMCE.triggerSave();
			var value = $("textarea#editor").val();		
			$("#display-post").html(value);
			$(".texteditor-container").hide();
			return false;
		});
	
	});

</script>