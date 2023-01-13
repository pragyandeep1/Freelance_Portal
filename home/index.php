<?php
    if (isset($_POST['registration'])) {
      $user = $_POST['firstname'];
      echo "Welcome " .$user;
    }
?>

<?php
    if (isset($_SESSION['userlogin'])) {
      header("location:login.php");
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION);
        header("location: login.php");
    }
?>
<?php include("./views/header.php")?>



<main>

<!-- Carousel starts -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="../img/slides/img15.jpg"  class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Graphics Designing</h1>
            <p>Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/Lighthouse.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Mobile App Development</h1>
            <p>People who are crazy enough to think they can change the world, are the ones who do.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/productive-day-at-home.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Search Engine Optimization</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/mobile-app-development.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Go Next</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/graphic-design.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/seo.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="width:5%;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="width:5%;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<!-- Carousel ends -->

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-md-12">
          
          <div class="page-wrapper" style="text-align: center;">
            <div class="post-slider">
              <div class="post-wrapper">
                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a1.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
                          <h5 class="text-light">Watson Colombus</h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a2.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>Our products keep getting better when people see volume of transactions recorded with you.</p>
                          <h5 class="text-light">Collin Webber</h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a3.png"alt="photo" class="bd-placeholder-img rounded-circle mt-2" style="height:6rem; width:6rem;">
                      <p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
                          <h5 class="text-light">Fienna Adolf</h5>
                </div>
                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a4.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>I wanted to thank you on behalf of all of us for being a valued and faithful customer for years.</p>
                          <h5 class="text-light">Frank Atkinson</h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a5.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>Thank you for placing your trust in our company and we will provide excellent service.</p>
                          <h5 class="text-light">Senaco Charles</h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a6.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>Please accept our gratitude for your relationship with us joy and makes what we do worthwhile.</p>
                          <h5 class="text-light">Helena David</h5>
                </div>
                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a7.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
                          <h5 class="text-light">Adam Bernacki</h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a8.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p> Thank you for taking the time to attend our recent event. It was a pleasure to talk with you.</p>
                          <h5 class="text-light">Solomon Sunga </h5>
                </div>

                <div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
                        <img src="../img/photos/a9.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
                      <p> Thank you for your recent evaluation. We are excited to learn the results of your review of us.</p>
                          <h5 class="text-light">Olivia Davis</h5>
                </div>
            </div>
      </div>
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <!-- Page Wrapper Starts -->
    <div class="page-wrapper" style="overflow: auto;">
        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>

            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="../img/images/img_lights_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info mx-auto">
                        <h4>
                          <a href="#" style="text-decoration: none;">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_mountains_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info mx-auto">
                        <h4><a href="#" style="text-decoration: none;">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Nelson Mandela</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_nature_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info mx-auto">
                        <h4><a href="#" style="text-decoration: none;">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_snow_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info mx-auto">
                        <h4><a href="#" style="text-decoration: none;">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_lights_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info mx-auto">
                        <h4><a href="#" style="text-decoration: none;">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Post Slider -->
    </div>
    <!-- Page Wrapper Ends -->


    <hr class="featurette-divider">

    <div class="grid-programs row isotope" style="position: relative; overflow: hidden; height: 220px;">
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp pp eedup isotope-item" style="position: absolute; left: 4rem; top: 0px; transform: translate3d(0px, 0px, 0px);">
               
               <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/algorithm.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    <p>Learn role based career skills and be an expert!</p>
                  </div>
                </div>
              </div>
           </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp eedup isotope-item" style="position: absolute; left: 6rem; top: 0px; transform: translate3d(285px, 0px, 0px);">
              
               <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/university.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    <p>Empowering teachers to make effective use of Information Technology.</p>
                  </div>
                </div>
              </div>
           </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp eedup isotope-item" style="position: absolute; left: 8rem; top: 0px; transform: translate3d(570px, 0px, 0px);">
                              <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/office.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    
                    <p>An end to end solution for online admission and recruitment.</p>
                  </div>
                </div>
              </div>
           </div>
       </div>

    <div class="grid-programs row isotope" style="position: relative; overflow: hidden; height: 220px;">
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp pp eedup isotope-item" style="position: absolute; left: 4rem; top: 0px; transform: translate3d(0px, 0px, 0px);">
               
               <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/studio.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    <p>Our mission is to offer high-quality life-long learning.</p>
                  </div>
                </div>
              </div>
           </div>
           
           <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp eedup isotope-item" style="position: absolute; left: 6rem; top: 0px; transform: translate3d(285px, 0px, 0px);">
              
               <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/office.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    
                    <p>Bridge the digital divide and to bring the real fruits of Information technology to the masses.</p>
                  </div>
                </div>
              </div>
           </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3 enp eedup isotope-item" style="position: absolute; left: 8rem; top: 0px; transform: translate3d(570px, 0px, 0px);">
                              <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../img/programs/pitches.jpg" alt="Paris" style="width:300px;height:200px">
                  </div>
                  <div class="flip-box-back pt-5 text-center">
                    <p>Qualitative and best talents from the relevant industry</p>
                  </div>
                </div>
              </div>
           </div>
       </div>
<style>

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}
</style>

    <hr class="featurette-divider">

    <div class="container">
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 col-sm-6 slide me-5" style="margin-left: 2rem">
          <div class="card" id="card" style="width: 18rem;">
            <div class="card-body pt-5">
              <i class="fas fa-search-plus" style="color:skyblue; font-size: xx-large;"></i>
                  <h1 class="title">Recruiting</h1>
                  <div class="slideInBottom">
                  <div class="msg">
                    <p>In recruiting, there are no good or bad experiences – just learning experiences. No job is too big or too small.</p>
                    <a href="careers.php"><i class="fas fa-arrow-right text-light"></i></a>
                  </div>
                  
                </div>
            
          </div>
</div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 slide me-5" style="margin-left: 2rem">
          <div class="card" id="card" style="width: 18rem;">
  <div class="card-body pt-5">
    <i class="fas fa-users" style="color:skyblue; font-size: xx-large;"></i>
            <h1 class="title">Outsourcing</h1>
            <div class="slideInUp">
            <div class="msg">
              <p>Outsourcing and globalization of manufacturing allows companies to reduce costs, benefits consumers with lower cost goods and services.</p>
              <a href="outsourcing.php"><i class="fas fa-arrow-right text-light"></i></a>
            </div>
            
          </div>
            
  </div>
</div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 slide me-5" style="margin-left: 2rem">
          <div class="card" id="card" style="width: 18rem;">
  <div class="card-body pt-5">
    <i class="fas fa-sitemap" style="color:skyblue; font-size: xx-large;"></i>
            <h1 class="title">Consulting</h1>
            <div class="slideInLeft">
            <div class="msg">
              <p>The best way to predict the future is to create it. Our talented team of recruiters can help you find the best freelancer for the job.</p>
              <a href="consulting.php"><i class="fas fa-arrow-right text-light"></i></a>
            </div>
            
          </div>
            
  </div>
</div>
        </div>
      </div>
    </div>
<style>
#card {
  display: block;
  height: 15rem;
  border:1px dotted aliceblue;
}
.slideInBottom {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.slide:hover .slideInBottom {
  bottom: 0;
  height: 100%;
}

.msg {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.slideInUp {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.slide:hover .slideInUp {
  height: 100%;
}
.slideInLeft {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.slide:hover .slideInLeft {
  width: 100%;
  left: 0;
}
</style>

    <hr class="featurette-divider">


    <div class="container" style="text-align: center;">
  <div class="row">
    <div class="col-sm-4 mr-auto" id="pic">
      <a href="#!" title="Hr Services">
        <span class="middle">
          
          <div class="text">
            <i class="fas fa-link" style="color:skyblue; font-size: xx-large;"></i>
            Hr<br>Services
          </div>
        </span>
        <img src="../img/office/hr.jpg" class="image" width="300" alt="Hr Services">
        </a>
    </div>
    <div class="col-sm-4" id="pic">
      <a href="#!" title="Software Training">
        <span class="middle">
          
          <div class="text">
            <i class="fas fa-link" style="color:skyblue; font-size: xx-large;"></i>
            Software<br>Training
          </div>
          </span>
          <img src="../img/office/training.jpg" class="image" width="300" alt="Software Training">
        </a>
    </div>
    <div class="col-sm-4" id="pic">
      <a href="#!" title="Call Center Training">
        <span class="middle">
          
          <div class="text">
            <i class="fas fa-link" style="color:skyblue; font-size: xx-large;"></i>
            Call Center<br>Training
          </div>
        </span>
        <img src="../img/office/callcenter.jpg" class="image" width="300" alt="Call Center Training"></a>
    </div>
  </div>
</div>

<style>
#pic {
  position: relative;
}

.image {
  opacity: 1;
  display: block;
  height: 12rem;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

#pic:hover .image {
  opacity: 0.3;
}

#pic:hover .middle {
  opacity: 1;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 1rem;
  padding: 1rem 2rem;
}
</style>

<hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
</div>
</div>
  </div><!-- /.container -->
  <div class="bubbles" style=" opacity: 0.1;">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
    <img src="../img/images/flower.png">
</div>

<link rel="stylesheet" type="text/css" href="../css/croc.css">
 <script src="../js/slides.js"></script>
</main>
<?php include("./views/footer.php")?>