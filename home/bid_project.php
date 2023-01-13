<?php 
    require_once "config.php";
    if (isset($_GET['project_id'])) {
        $main = $_GET['project_id'];
        $query = "SELECT * FROM job_posting  WHERE project_id='$main'";
        $update = $db->prepare($query);
        $update->execute();
      }
?>
<?php include_once "views/header1.php" ?>

	<div class="container">
        <h3 class="text-uppercase text-success mt-5"><u>Project Title</u></h3>
            <h3><b><?php echo $_GET['project_description'] ?></b></h3>
            <p>
                <?php echo "Project Description: ".$_GET['project_description'] ?>
            </p>
            <div class="form-group">
                  <button id="mbtn" class="btn btn-primary turned-button">Apply Bid</button>
                </div>

    </div> 

    <div id="modalDialog" class="modal w-25" style="position: absolute; margin-left: 30%; margin-top: 5%;">
    <div class="modal-content animate-top">
        <div class="modal-header">
            <h5 class="modal-title text-success mx-auto text-uppercase bg-light" style="border-radius: 1rem;">Bid</h5>
            <button type="button" class="close text-danger bg-light" style="border: 1px dotted orange;" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="awardBid.php" method="POST" id="contactFrm">
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
            
            <!-- Contact form -->
            <div class="form-group d-flex">
                <label>Amount:&emsp;&ensp;</label>
                <input type="text" name="amount" id="amount" class="form-control ms-2" placeholder="Enter amount" required="">
            </div>
            <div class="form-group d-flex mt-2">
                <label>Completion Time:</label>
                <input type="number" name="number" id="number" class="form-control ms-2" required="">
                <select class="bg-light h-25 mt-2 ms-2" style="border: 1px dotted gray;">  
                  <option value="days">days</option>  
                  <option value="months">months</option>  
                </select>
            </div>
            <div class="form-group d-flex mt-2">
                <label>Description:</label>
                <textarea name="message" id="message" class="form-control ms-2" placeholder="Your message here" rows="6"></textarea>
            </div>
        </div>
        <div class="modal-footer" style="padding-right: 40%;">
            <!-- Submit button -->
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" onclick="form_submit()">
        </div>
        </form>
    </div>

    </div>

    <script>
  function form_submit() {
    document.getElementById("contactFrm").submit();
     e.preventDefault();
        $('.modal-body').css('opacity', '0.5');
        $('.btn').prop('disabled', true);
        
        $form = $(this);
        $.ajax({
            type: "POST",
            url: 'ajax_submit.php',
            data: 'submit=1&'+$form.serialize(),
            dataType: 'json',
            success: function(response){
                if(response.status == 1){
                    $('#contactFrm')[0].reset();
                    $('.response').html('<div class="alert alert-success">'+response.message+'</div>');
                }else{
                    $('.response').html('<div class="alert alert-danger">'+response.message+'</div>');
                }
                $('.modal-body').css('opacity', '');
                $('.btn').prop('disabled', false);
            }
        });
   }  

        var modal = $('#modalDialog'); // get modal
        var btn = $('#mbtn'); // get button that opens modal
        var span = $('.close'); // get span element

        $(document).ready(function(){
            btn.on('click', function(){ // open modal when user clicks button
                modal.show();
            });

            span.on('click', function(){ // when user clicks on x, close modal
                modal.hide();
            });
        });

        $('body').bind('click', function(e){
            if ($(e.target).hasClass('modal')) {
                modal.hide();
            }
        });

    </script>


<?php include_once "views/footer1.php" ?>