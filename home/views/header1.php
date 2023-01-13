<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freelancer Site</title>
    
		<?php include "links.php" ?>
	
</head>
<body style="background:#f5f6fe;">
	<header class="s3 clearfix">
		<nav class="topnav navbar-expand-md navbar-dark bg-primary" id="nav">
		    <div class="container-fluid">
		    		<div class="navbar-header d-flex">
		    			<a class="navbar-brand" href="index.php">
				    			<img src="../img/favicons/okcl-logo.png" alt="logo" class="logo mh-100 mw-100" id="lgo">
				    		</a>
		    			<button class="navbar-toggler" type="button" onclick="myFunction()">
        				<span class="navbar-toggler-icon"></span>
        			<!-- <i class="material-icons">menu</i>-->
      			</button>

      			<!--  <button type="button" id="animated-navicon" class="navbar-toggler" data-toggle="collapse" data-target="#mobile-navbar-collapse" onclick="myFunction()">
      				<span class="sr-only">Toggle navigation</span>
      				<span class="navbar-toggler-icon"></span>
      				<span class="navbar-toggler-icon"></span>
      				<span class="navbar-toggler-icon"></span>
      			</button> -->

		       		<div class="collapse navbar-collapse mx-auto" id="myLinks">
		       		<ul class="navbar-nav ml-auto">
    					<li class="nav-item active" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Jobs</a>
      						<ul class="dropdown-menu">
        						<li><a class="dropdown-item text-dark" href="#">Graphic Design</a>
        							<ul class="submenu dropdown-menu">
        								<li><a class="dropdown-item text-dark" href="#">Logo Design</a></li>
										<li><a class="dropdown-item text-dark" href="#">Web Design</a></li>
										<li><a class="dropdown-item text-dark" href="#">Banner Design</a></li>
										<li><a class="dropdown-item text-dark" href="#">3D Modeling</a></li>
										<li><a class="dropdown-item text-dark" href="#">Photoshop</a></li>
										<li><a class="dropdown-item text-dark" href="#">Illustration</a></li>
										<li><a class="dropdown-item text-dark" href="#">2D Animation</a></li>
										<li><a class="dropdown-item text-dark" href="#">3D Animation</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Graphic Design</a></li>
        							</ul>
        						</li>
								<li><a class="dropdown-item text-dark" href="#">Website</a>
          							<ul class="submenu dropdown-menu">
							            <li><a class="dropdown-item text-dark" href="#">PHP</a></li>
										<li><a class="dropdown-item text-dark" href="#">Javascript</a></li>
										<li><a class="dropdown-item text-dark" href="#">HTML5</a></li>
										<li><a class="dropdown-item text-dark" href="#">CSS</a></li>
										<li><a class="dropdown-item text-dark" href="#">ASP.NET</a></li>
										<li><a class="dropdown-item text-dark" href="#">Wordpress</a></li>
										<li><a class="dropdown-item text-dark" href="#">AWS</a></li>
										<li><a class="dropdown-item text-dark" href="#">WIX</a></li>
										<li><a class="dropdown-item text-dark" href="#">Squarespace</a></li>
										<li><a class="dropdown-item text-dark" href="#">Database Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Shopify</a></li>
										<li><a class="dropdown-item text-dark" href="#">Magento</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Website</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Mobile App Development</a>
              						<ul class="submenu dropdown-menu">
						                <li><a class="dropdown-item text-dark" href="#">Android</a></li>
										<li><a class="dropdown-item text-dark" href="#">IOS</a></li>
										<li><a class="dropdown-item text-dark" href="#">Flutter</a></li>
										<li><a class="dropdown-item text-dark" href="#">PhoneGap</a></li>
										<li><a class="dropdown-item text-dark" href="#">Xamarine</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Mobile App Development</a></li>
									</ul>
								</li>
            					<li><a class="dropdown-item text-dark" href="#">Software Development</a>
            						<ul class="submenu dropdown-menu">
										<li><a class="dropdown-item text-dark" href="#">Java Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Python Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">C# Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">C++ Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Objective C Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Linux Software Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Ruby On RailsSoftware Development</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Software Development</a>
										</li>
									</ul>
								</li>
							<li><a class="dropdown-item text-dark" href="#">Internet Marketing</a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item text-dark" href="#">Social Media Marketing</a></li>
									<li><a class="dropdown-item text-dark" href="#">Other Marketing</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item text-dark" href="#">Data Entry</a></li>
							<li><a class="dropdown-item text-dark" href="#">SEO</a></li>
							<li><a class="dropdown-item text-dark" href="#">Writing</a>
								<ul class="submenu dropdown-menu">
									<li><a class="dropdown-item text-dark" href="#">Copy Writing</a></li>
									<li><a class="dropdown-item text-dark" href="#">Article Writing</a></li>
									<li><a class="dropdown-item text-dark" href="#">Ghost Writing</a></li>
									<li><a class="dropdown-item text-dark" href="#">Other Writing</a></li>
								</ul>
							</li>
							<li><a class="dropdown-item text-dark" href="#">Logistics</a></li>
							<li><a class="dropdown-item text-dark" href="#">Legal</a></li>
							<li><a class="dropdown-item text-dark" href="#">Finance</a></li>
							<li><a class="dropdown-item text-dark" href="#">Manufacturing</a></li>
							<li><a class="dropdown-item text-dark" href="#">Other</a></li>
						</ul>	
					</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Freelancers</a>
      						<ul class="dropdown-menu">
        						<li><a class="dropdown-item text-dark" href="#">Graphics Designers</a>
        							<ul class="submenu dropdown-menu">
        								<li><a class="dropdown-item text-dark" href="#">Photoshop Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Motion Graphics Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Illustrators</a></li>
										<li><a class="dropdown-item text-dark" href="#">Business Card Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">3D Animators</a></li>
										<li><a class="dropdown-item text-dark" href="#">2D Animators</a></li>
										<li><a class="dropdown-item text-dark" href="#">Stationery Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Tattoo Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Fashion Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Packaging Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Brochure Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">T-Shirts Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Graphics Designers</a></li>
        							</ul>
        						</li>
        						<li><a class="dropdown-item text-dark" href="#">Logo Designers</a>
								<li><a class="dropdown-item text-dark" href="#">3D Graphics Designers</a>
          							<ul class="submenu dropdown-menu">
          								<li><a class="dropdown-item text-dark" href="#">3D Renderers</a></li>
										<li><a class="dropdown-item text-dark" href="#">3D Modellers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other 3D Graphics Designers</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Web Designers</a>
          							<ul class="submenu dropdown-menu">
          								<li><a class="dropdown-item text-dark" href="#">Wordpress Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Squarespace Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Shoppify Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Magento Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Wix Designers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Web Designers</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Web Developers</a>
          							<ul class="submenu dropdown-menu">
							            <li><a class="dropdown-item text-dark" href="#">PHP Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Javascript Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">HTML5 Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">CSS Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">ASP.NET Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Wordpress Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">AWS Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">WIX Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Squarespace Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Database Development Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Shopify Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Magento Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Website Developers</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Mobile App Developers</a>
              						<ul class="submenu dropdown-menu">
						                <li><a class="dropdown-item text-dark" href="#">Android Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">IOS Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Flutter Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">PhoneGap Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Xamarine Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Mobile App Developers</a></li>
									</ul>
								</li>
            					<li><a class="dropdown-item text-dark" href="#">Writers</a>
            						<ul class="submenu dropdown-menu">
            							<li><a class="dropdown-item text-dark" href="#">Copy Writers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Article Writers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Ghost Writers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Writers</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Lawyers</a></li>
								<li><a class="dropdown-item text-dark" href="#">Translators</a>
            						<ul class="submenu dropdown-menu">
            							<li><a class="dropdown-item text-dark" href="#">Translators in English</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in French</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in Spanish</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in German</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in Russian</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in Portuguese</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in Hindi</a></li>
										<li><a class="dropdown-item text-dark" href="#">Translators in Other Languages</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Internet Marketing Specialists</a>
            						<ul class="submenu dropdown-menu">
            							<li><a class="dropdown-item text-dark" href="#">Social Media Marketing Experts</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Marketing Experts</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Financial Experts</a></li>
								<li><a class="dropdown-item text-dark" href="#">Virtual Assistants</a></li>
								<li><a class="dropdown-item text-dark" href="#">Data Entry Operators</a></li>
								<li><a class="dropdown-item text-dark" href="#">Logistic Experts</a></li>
								<li><a class="dropdown-item text-dark" href="#">Software Developers</a>
            						<ul class="submenu dropdown-menu">
            							<li><a class="dropdown-item text-dark" href="#">Java Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Python Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">C# Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">C++ Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Objective C Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Linux Software Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Ruby On RailsSoftware Developers</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Software Developers</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Manufacturers</a></li>
								<li><a class="dropdown-item text-dark" href="#">SEO Specialists</a></li>
								<li><a class="dropdown-item text-dark" href="#">Other Freelancers</a></li>
							</ul>	
					</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Technology</a>
      						<ul class="dropdown-menu">
        						<li><a class="dropdown-item text-dark" href="#">Web Technology</a>
									<ul class="submenu dropdown-menu">
										<li><a class="dropdown-item text-dark" href="#">PHP</a></li>
										<li><a class="dropdown-item text-dark" href="#">Java Script</a></li>
										<li><a class="dropdown-item text-dark" href="#">HTML5</a></li>
										<li><a class="dropdown-item text-dark" href="#">CSS</a></li>
										<li><a class="dropdown-item text-dark" href="#">Wordpress</a></li>
										<li><a class="dropdown-item text-dark" href="#">AWS</a></li>
										<li><a class="dropdown-item text-dark" href="#">WIX</a></li>
										<li><a class="dropdown-item text-dark" href="#">Squarespace</a></li>
										<li><a class="dropdown-item text-dark" href="#">MySQL</a></li>
										<li><a class="dropdown-item text-dark" href="#">Magento</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Web Technologies</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Mobile Technology</a>
									<ul class="submenu dropdown-menu">
										<li><a class="dropdown-item text-dark" href="#">Android</a></li>
										<li><a class="dropdown-item text-dark" href="#">IOS</a></li>
										<li><a class="dropdown-item text-dark" href="#">Flutter</a></li>
										<li><a class="dropdown-item text-dark" href="#">PhoneGap</a></li>
										<li><a class="dropdown-item text-dark" href="#">Xamarine</a></li>
										<li><a class="dropdown-item text-dark" href="#">Other Mobile Technologies</a></li>
									</ul>
								</li>
								<li><a class="dropdown-item text-dark" href="#">Other Technologies</a></li>
							</ul>
						</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Design</a>
      						<ul class="dropdown-menu">
        				<li><a class="dropdown-item text-dark" href="#">Logo Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Web Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Banner Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">3D Modeling</a></li>
								<li><a class="dropdown-item text-dark" href="#">Photoshop Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Illustration</a></li>
								<li><a class="dropdown-item text-dark" href="#">2D Animation</a></li>
								<li><a class="dropdown-item text-dark" href="#">3D Animation</a></li>
								<li><a class="dropdown-item text-dark" href="#">Motion Graphic Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Business Card Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Tattoo Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Stationery Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Fashion Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Package Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Brochure Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">T-shirt Design</a></li>
								<li><a class="dropdown-item text-dark" href="#">Other Graphic Design</a></li>
							</ul>
					</li>

					<li class="nav-item" id="myDropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Marketing</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item text-dark" href="#">Engine Marketing</a></li>
							<li><a class="dropdown-item text-dark" href="#">Content Marketing</a></li>
							<li><a class="dropdown-item text-dark" href="#">Social Media Marketing</a></li>
							<li><a class="dropdown-item text-dark" href="#">Email Marketing</a></li>
						</ul>
					</li>
				</ul>
		
					</div>
		  <!-- Profile button -->
<div class="entry d-flex">
	<form class="d-flex mx-auto" action="https://www.google.co.in/search" method="GET">
			   <input class="form-control mt-2" type="search" id="traverse" placeholder="What is in your mind..." aria-label="Search">
			   <button class="btn btn-success mt-2 ms-2 mb-3" type="submit" id="search">Search</button>
		 </form>
  <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="../img/photos/a5.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="profile.php">Account</a></li>
								<li><a class="dropdown-item" href="settings.php">Settings</a></li>
								<li><a class="dropdown-item" href="logout.php">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
<!-- //Profile button -->
		      </div>
		    </div>

		  </nav>
	<!-- nav ends -->

	</header>