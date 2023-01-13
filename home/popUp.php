<?php include "views/header.php" ?>
	<div class="container">
		<h3>Pop up Contact Form with Email</h3>
		<button id="mbtn" class="btn btn-primary turned-button">Contact Us</button>

		<!-- modal -->
		<div id="modalDialog" class="modal w-25" style="position: absolute; margin-left: 30%; margin-top: 5%;">
    <div class="modal-content animate-top">
        <div class="modal-header">
            <h5 class="modal-title">Contact Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="" method="POST" id="contactFrm">
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
			
            <!-- Contact form -->
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required="">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required="">
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea name="message" id="message" class="form-control" placeholder="Your message here" rows="6"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>

	</div>

	<script>
		$(document).ready(function(){
    $('#contactFrm').submit(function(e){
        e.preventDefault();
        $('.modal-body').css('opacity', '0.5');
        $('.btn').prop('disabled', true);
        
        $form = $(this);
        $.ajax({
            type: "POST",
            url: 'ajax_submit.php',
            data: 'contact_submit=1&'+$form.serialize(),
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
    });
});

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
	

<?php include "views/footer.php" ?>