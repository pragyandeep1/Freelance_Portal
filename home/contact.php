<?php
    session_start();
    require_once "config.php";

      $statusMsg = '';

    if(!empty($_POST["send"])) {
        $name = $_POST["userName"];
        $email = $_POST["userEmail"];
        $phone = $_POST["userPhone"];
        $subject = $_POST["subject"];
        $content = $_POST["content"];

            $sql = 'INSERT INTO contact (user_name, user_email, user_phone, subject, content) VALUES (?,?,?,?,?)';
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$name, $email, $phone, $subject, $content]);

            require_once "alert-mail.php";

            if ($stmtinsert->rowCount()>0) {
           
             $statusMsg = "<script>
                alert('You wrote a message to us successfully. A notification e-mail is sent to your registered e-mail address.');
              </script>";
            echo $statusMsg;
          }
          else{
            $statusMsg = "<script>
                alert('File uploading failed. Please try again.');
              </script>";
              echo $statusMsg;
          }
        }
?><title>Contact Us</title>
<?php include_once "views/header1.php" ?>

    <link rel="stylesheet" type="text/css" href="../css/styleContact.css">
    <div class="form-container text-danger mx-5">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div id="divConfirmation" style="display: none">
                    <div class="module_callout callout-small callout-success">
                        <h4 class="callout-title">Thank you for contacting support!</h4>
                        <p class="callout-body">
                            Your case number is :<label for="casnum" style="vertical-align: middle"></label>
                        </p>
                    </div>

                    <div class="module_box">
                        <h2 class="primaryHeading">What Next?</h2>
                        <a href="index.php?Ref=login.php">Freelance Home</a>
                        <br>
                        <br>
                        <a href="help.php">Help Center</a>
                    </div>
                </div>
                <div id="divPostError" style="display: none">
                    <div class="module_callout callout-small callout-warning">
                        <h4 class="callout-title">There was an error submitting your request.</h4>
                    </div>
                </div>

                <div id="divContact">
                    <h2 class="primaryHeading">Send us a Message</h2>
                    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateContactForm()">
                      <div class="mb-3">
                            <label class="fcg-label" for="name" id="nameLabel">
                                <strong>Name <span id="userName-info" class="info">*</span></strong>
                            </label>
                            <input type="text" class="form-control text-uppercase" name="userName" id="userName" placeholder="Enter your name" required/>
                        </div>
                        <div class="mb-3">
                            <label class="fcg-label" for="email" id="emailLabel">
                                <strong>Email <span id="userEmail-info" class="info">*</span></strong>
                            </label>
                            <input class="form-control" type="email" id="userEmail" name="userEmail" placeholder="Enter your email address" required/>
                        </div>
                        <div class="mb-3">
                            <label class="fcg-label" for="phone" id="phoneLabel">
                                <strong>Phone <span id="contact-info" class="info">*</span></strong>
                            </label>
                            <input class="form-control" type="tel" id="userPhone" name="userPhone" placeholder="Enter your phone number" required/>
                        </div>
                        <div class="mb-3">
                            <label class="fcg-label" for="subject" id="subjectLabel">
                                <strong>Subject<span id="subject-info" class="info">*</span></strong>
                            </label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject" required/>
                        </div>

                        <div class="mb-3">
                            <label class="fcg-label" for="message" id="messageLabel">
                                <strong>Enter Message <span id="userMessage-info" class="info">*</span></strong>
                            </label>
                            <textarea class="input-field" id="content" name="content" cols="55" rows="6"></textarea>
                        </div>
                        <div>
                        <input type="submit" name="send" value="Send Message" id="contactBtn1" class="btn-submit" style="position: absolute; float: left"/>
                    </div>
                </form>
                </div>
            </div>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var userPhone = $("#userPhone").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userPhone == "") {
                $("#contact-info").html("Required.");
                $("#userPhone").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

            <div class="right-col">
                <div class="rhythmMargin">
                    <iframe class="w-100 mt-5 mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.050895105439!2d85.82061901405469!3d20.298160386398614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909c15bc1e9b7%3A0x256d3cb09fede2f1!2sOdisha+Knowledge+Corporation+Limited!5e0!3m2!1sen!2sin!4v1537348722210" width="200" height="250" frameborder="0" style="border:0; display: block;" allowfullscreen=""></iframe>
                </div>
                <address itemprop="address" itemtype="https://schema.org/PostalAddress" class="text-center">
                    <span itemprop="streetAddress">Jayadev Vihar,</span>
                    <span itemprop="addressLocality">Bhubaneswar,</span>
                    <span itemprop="addressRegion">Odisha,</span>
                    <span itemprop="postalCode">751013</span>
                </address>
                <p class="text-center">
                    Phone: <a href="tel:+91-674-236-1594" itemprop="telephone">0674-236-1594</a>
                </p>
                <p class="text-center">Monday - Friday 9:30 AM - 6 PM IST</p>
            </div>
        </div>
    </div>
    <?php include_once "views/footer.php" ?>