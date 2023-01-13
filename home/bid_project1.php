<?php include_once "views/header1.php" ?>
<?php
    $min_range = 1000;
    $max_range = 5000;
?>
<?php

    error_reporting(0);
    require_once('config.php');
    /*if (!session_id()) {
        session_start();
    }*/

    $sql = "SELECT * FROM project_bidding WHERE price BETWEEN '".$_POST["min_range"]."' AND '".$_POST["max_range"]."' ORDER BY price ASC";
    $stmt = $db->prepare($sql);
    $count = $stmt->execute();
    /*$result = $stmt->fetchAll();
    $total_row = $stmt->rowCount();
*/    
    $out = '<h4 align="center">Total Item - '.$total_row.'</h4>
    <div class="row">';

    if ($total_row > 0) {
        foreach ($result as $row) {
            $out .= '<div class="col-md-2">
                <img src="img/'.$row["image"].'" class="img-responsive img-thumbnail img-circle">
                <h4 align="center">'.$row["name"].'</h4>
                <h3 align="center" class="text-danger">'.$row["price"].'</h3>
            </div>';
        }
    }
    else{
        $out .='<h3 align="center">No Product Found.</h3>'; 
    }

    $out .='</div>'; 
    echo $out;
    
    // require_once 'controllers/authController.php';
    if (isset($_POST['bidding'])) {
        if (!empty($_POST["user_email"])) {
            $email = trim($_POST["user_email"]);
        }
        else{
            $error_message = "<li>Your Email is required</li>";
        }
        if (empty($error_message)) {
            $query = $db->prepare("SELECT * FROM users WHERE email = ?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
 ?>


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
<script type="text/javascript" src="../js/app.min.js"></script>

	<div id="wrapper" class="pt-5 mt-5" id="center">
        <div id="loginContainer" class="mx-auto">
            <form id="bidding" name="bidding" method="post" action="" enctype="multipart/form-data" class="text-center">

               <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend mt-1">
                    <span class="input-group-text rounded-0"><i class="fas fa-briefcase fa-lg fa-fw my-2"></i></span>
                  </div>
                  <input type="text" id="jtitle" name="jtitle" class="form-control rounded-0" placeholder="Job Title" required />
                </div>

                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="fas fa-user fa-lg fa-fw my-2"></i></span>
                  </div>
                  <input type="text" id="bidder" name="bidder" class="form-control rounded-0" placeholder="Bidder's Name" required />
                </div><br>

                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="fas fa-comment-dollar fa-lg fa-fw my-2"></i></span>
                  </div>
                  <input type="text" id="min_range" name="min_range" class="form-control" value="<?php echo $min_range; ?>">
                <div id="price-range"></div>
                <input type="text" id="max_range" name="max_range" class="form-control" value="<?php echo $max_range; ?>">
                </div><br><div id="load_product"></div>
                
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0"><i class="far fa-calendar-alt fa-lg fa-fw my-2"></i></span>
                  </div>
                  <input type="date" id="postdate" name="postdate" class="form-control rounded-0" placeholder="Date Posted" required />
                </div>

               

                <div class="form-group">
                  <div id="passError" class="text-danger font-weight-bolder"></div>
                </div>
                <div class="form-group">
                  <input type="submit" id="register-btn" value="Place Bid" class="btn btn-primary btn-lg btn-block myBtn" />
                </div>
            </form>
        </div>
    </div>

	<div id="wrapper" class="mt-5">
		<main id="main" role="main" class="hp2019">

        <section class="c-hero c-hero--tight c-hero--isCenterAligned">
            <div class="o-container">

                <div class="c-hero__main u-margin-bottom--xlarge">
                    <header class="c-hero__headings">
                        <h1 class="c-hero__title">Unlock Opportunities With Freelancing
                        </h1>

                        <h3 class="c-hero__copy">Increase your chances of getting hired for the best freelance jobs by
                            upgrading your membership.
                        </h3>
                    </header>
                </div>

                <!-- <div class="u-center">
                    <div class="c-toggleLinks">
                        <a class="c-toggleLinks__link" href="postjob.php">Employers</a>
                        <a class="c-toggleLinks__link  c-toggleLinks__link--active" href="#pricing_freelancer">Freelancers</a>
                    </div>
                </div> -->
            </div>
        </section>

 
      

        
    </main>
		
	</div>
    <?php include_once "views/footer.php" ?>
    
    <script>
        $(document).ready(function(){

            $('#price_range').slider({
                range:true,
                min:1000,
                max:5000,
                values:[<?php echo $min_range; ?>, <?php echo $max_range; ?>],
                slide:function(event,ui){
                    $('#min_range').val(ui.values[0]);
                    $('#max_range').val(ui.values[1]);
                    load_product(ui.values[0], ui.values[1]);
                }
            });

            load_product(<?php echo $min_range; ?>, <?php echo $max_range; ?>);
            function load_product(min_range,max_range){
                $.ajax({
                    url:"bid_project.php",
                    method:"POST",
                    data:{min_range:min_range, max_range:max_range},
                    success:function(data){
                        $('#load_product').html(data);
                    }
                });
            }
        });
    </script>


<script type="text/javascript" src="../js/bid_script.js"></script>