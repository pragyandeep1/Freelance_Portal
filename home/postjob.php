<?php
session_start();
require_once "config.php";
error_reporting(0);


  $statusMsg = '';

  // file upload directory
  $targetDir = '../uploads/';

  if (isset($_POST['submit'])) {

    $project_title = $_POST['jobtitle'];
    $project_description = strip_tags($_POST['subject']);
    $price = $_POST['price'];
    // $type_work =$_POST['subcategory']);
    $type_work = $_POST['subcategory'];
    
    $uploaded_on = date('y-m-d h:i:s');
    $posted_by = $_SESSION['userlogin']['username'];
    //var_dump($_POST);

    if (!empty($_FILES['file']['name'])) {

      
      $filename = time().'-'.basename($_FILES['file']['name']);
      $targetFilePath = $targetDir.$filename;
      $fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
     

      // allowed file formats
      $allowType = array('jpg','png','jpeg','gif','docx','doc','pdf');

      if (in_array($fileType, $allowType)) {
        
        // upload file to server
       if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
       
          // insert image file name into database
          $sql = "INSERT INTO job_posting (project_title, project_description, file_name, type_work, price, uploaded_on, posted_by) VALUES (?,?,?,?,?,?,?);";
          $stmtinsert = $db->prepare($sql);
          $result = $stmtinsert->execute([$project_title, $project_description, $filename, $type_work, $price, $uploaded_on, $posted_by]);

          if ($stmtinsert->rowCount()>0) {
           
             $statusMsg = "<script>
                alert('You posted job successfully.');
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
        else{
          $statusMsg = "<script>
                alert('The file format is not allowed.');
              </script>";
              echo $statusMsg;
        }
      }
      else{
        $statusMsg = "<script>
                alert('Please select a file to upload.');
              </script>";
              echo $statusMsg;

      }
      
    }
    
  }

?>
<link rel="stylesheet" type="text/css" href="../css/styles_postjob.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script></script>
      <!-- //jquery -->

      <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>

<?php include "views/header1.php" ?>

    

	<div class="banner bg-success">
		<a href="index.php"><img src="../img/favicons/okcl-logo.png" alt="logo" class="rounded float-left h-25" style="padding-top: 2rem;"></a>
	
	<h2 class="text-light text-uppercase pt-5">post new job here</h2>
	<!-- <p class="text-light text-center">Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p> -->
	<marquee behavior="scroll" class="text-warning" direction="left"><b>Find A Job at India's No.1 Freelance Site. Best Places to Work, Search Jobs on the Go!!	Get best matched jobs directly in your mail. Tell us what kind of a job you are looking out for and stay updated with latest opportunities.
		</b></marquee>
</div>

	<!-- <form class=""> -->
<div class="content w-75 bg-light" style="position: absolute; top: 15rem; left: 10rem; border: 1px dotted gray; padding:3rem; border-radius: 0.5rem;">
	<?php if (!empty($statusMsg)) { ?>
		<p class="status-msg">
			<?php echo $statusMsg; ?>
		</p>
	<?php } ?>
    <form action="" method="POST" enctype="multipart/form-data">
    	<i class="fas fa-briefcase"></i>
	    <label for="jtitle">Job title</label><br>
	    <input class="w-75" type="text" id="jtitle" name="jobtitle" placeholder="eg. Build an android game." required>
	    <div>
	    	<a type="button" tabindex="-1" class="link_btn module_btn u-copyBlue rhythmMarginSmall" style="outline: none; text-shadow: none;" type="button" onclick="show()"><strong>Examples</strong> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	    	 <ul id="hide" class="module_list no-border bullet rhythmMarginSmall u-copyBlue" style="display: none;">
	    	 	<li><p class="copy small rhythmMarginSmall">
						Developer required for WordPress theme
					</p></li> <li><p class="copy small rhythmMarginSmall">
						Need designer for company logo and assets
					</p></li> <li><p class="copy small rhythmMarginSmall">
						Require video editor to add sound effect
					</p></li></ul>
				</div>
	<!-- file upload -->
	<div class="texteditor-container">
	    <label for="subject">Brief Description about the job</label>
		<textarea class="tinymce" id="editor" name="subject"></textarea>
		<br>
		<input type="file" name="file" id="myFile">
		<p>You can drag and drop your file here (Max file size: 25 MB)</p>
	</div>
<div id="display-post" style="width:44rem;" ></div><br><br>
<div class="mt-5">
<i class="fas fa-rupee-sign"></i>
	    <label for="jtitle">Price</label><br>
	    <input class="w-75" type="text" id="jtitle" name="price" required>
	</div>

	
	
	 <div class="d-flex">
	    <i class="fas fa-tools"></i>
	    <p class="text-uppercase" style="font-family: 'Times new roman', cursive;">Select this project's category</p>
	  </div>
	  <div class="categorySelect">
	
	<a href="#!" id="showNone" type="button" onclick="showNone();" style="position: absolute; right: 10rem; display: none;">
				Clear
			</a>  	
<div class="container clearfix">
	<div class="row">
  <div class="col d-flex">
    <button class="module_box module_box--white" type="button" onclick="boxClick('pd');">
				Programming &amp; Development
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('da');">
				Design &amp; Art
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('wt');">
				Writing &amp; Translation
			</button>
  </div>
  </div>
  <div class="row">
  
  <div class="col d-flex">
    <button class="module_box module_box--white" type="button" onclick="boxClick('as');">
				Administrative &amp; Secretarial
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('bf');">
				Business &amp; Finance
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('sm');">
				Sales &amp; Marketing
			</button>
  </div>
  </div>

  <div class="row">
 
  <div class="col d-flex">
    <button class="module_box module_box--white" type="button" onclick="boxClick('ea');">
				Engineering &amp; Architecture
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('l');">
				Legal
			</button>
			<button class="module_box module_box--white" type="button" onclick="boxClick('et');">
				Education &amp; Training
			</button>
  </div>
  </div>
</div>

<!-- <label for="subCatRadio_10" class="columnSelection__label">Industry Specific Expertise</label> -->

	<div id="pd" class="hide box-container" style="display:none;">
<ul class="module_list no-border tighter columnSelection"><!---->

	<li style="line-height: 18px;">
		<input id="checkbox_1" type="checkbox" name="subcategory" value="Web Development"> 
		<label for="checkbox_1" class="columnSelection__label">Web Development &amp; Design</label>
	</li>

	<li style="line-height: 18px;">
		<input id="checkbox_2" type="checkbox" name="subcategory" value="Programming"> 
		<label for="checkbox_2" class="columnSelection__label">Programming &amp; Software</label>
	</li>

		<li style="line-height: 18px;">
			<input id="checkbox_3" type="checkbox" name="subcategory" value="Apps"> 
			<label for="checkbox_3" class="columnSelection__label">Apps &amp; Mobile</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_4" type="checkbox" name="subcategory" value="Database Design"> 
			<label for="checkbox_4" class="columnSelection__label">Database Design &amp; Administration</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_5" type="checkbox" name="subcategory" value="Networking, Hardware"> 
			<label for="checkbox_5" class="columnSelection__label">Networking, Hardware &amp; System Admin</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_6" type="checkbox" name="subcategory" value="Math and Algorithms"> 
			<label for="checkbox_6" class="columnSelection__label">Math and Algorithms and Analytics</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_7" type="checkbox" name="subcategory" value="Digital Marketing"> 
			<label for="checkbox_7" class="columnSelection__label">Web and Digital Marketing</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_8" type="checkbox" name="subcategory" value="Management and Leadership and Training"> 
			<label for="checkbox_8" class="columnSelection__label">Management and Leadership and Training</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_9" type="checkbox" name="subcategory" value="Testing"> 
			<label for="checkbox_9" class="columnSelection__label">QA &amp; Testing</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_10" type="checkbox" name="subcategory" value="Industry Specific Expertise"> 
			<label for="checkbox_10" class="columnSelection__label">Industry Specific Expertise</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_11" type="checkbox" name="subcategory" value="Information Security"> 
			<label for="checkbox_11" class="columnSelection__label">Information Security</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_12" type="checkbox" name="subcategory" value="ERP and CRM and SCM"> 
			<label for="checkbox_12" class="columnSelection__label">ERP and CRM and SCM</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_13" type="checkbox" name="subcategory" value="Technical Support"> 
			<label for="checkbox_13" class="columnSelection__label">Technical Support</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_14" type="checkbox" name="subcategory" value="Documentation"> 
			<label for="checkbox_14" class="columnSelection__label">Concepts and Ideas and Documentation</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_15" type="checkbox" name="subcategory" value="Game Development"> 
			<label for="checkbox_15" class="columnSelection__label">Game Development</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_16" type="checkbox" name="subcategory" value="Telecommunications"> 
			<label for="checkbox_16" class="columnSelection__label">Telephony and Telecommunications</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_17" type="checkbox" name="subcategory" value="SAP"> 
			<label for="checkbox_17" class="columnSelection__label">SAP</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_18" type="checkbox" name="subcategory" value="Human-Computer Interaction"> 
			<label for="checkbox_18" class="columnSelection__label">Human-Computer Interaction (HCI)</label>
		</li></ul>
</div>

<!-- div2 -->
<div id="da" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="Graphic Design"> 
			<label for="checkbox_1" class="columnSelection__label">Graphic Design</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_2" type="checkbox" name="subcategory" value="General and Other Art"> 
			<label for="checkbox_2" class="columnSelection__label">General and Other Art</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_3" type="checkbox" name="subcategory" value="Illustration"> 
			<label for="checkbox_3" class="columnSelection__label">Illustration</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_4" type="checkbox" name="subcategory" value="Image Restoration"> 
			<label for="checkbox_4" class="columnSelection__label">Photo and Image Restoration &amp; Editing</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_5" type="checkbox" name="subcategory" value="Video and Film and TV and DVD"> 
			<label for="checkbox_5" class="columnSelection__label">Video and Film and TV and DVD</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_6" type="checkbox" name="subcategory" value="Animation"> 
			<label for="checkbox_6" class="columnSelection__label">Animation</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_7" type="checkbox" name="subcategory" value="Photography"> 
			<label for="checkbox_7" class="columnSelection__label">Photography</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_8" type="checkbox" name="subcategory" value="Audio and Sound"> 
			<label for="checkbox_8" class="columnSelection__label">Audio and Sound &amp; Music</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_9" type="checkbox" name="subcategory" value="Painting"> 
			<label for="checkbox_9" class="columnSelection__label">Painting</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_10" type="checkbox" name="subcategory" value="Concepts"> 
			<label for="checkbox_10" class="columnSelection__label">Concepts &amp; Direction</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_11" type="checkbox" name="subcategory" value="Modeling and Acting and Voice-Overs"> 
			<label for="checkbox_11" class="columnSelection__label">Modeling and Acting and Voice-Overs</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_12" type="checkbox" name="subcategory" value="Dance and Music and Performing Arts"> 
			<label for="checkbox_12" class="columnSelection__label">Dance and Music and Performing Arts</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_13" type="checkbox" name="subcategory" value="Cartoons and Comic Art"> 
			<label for="checkbox_13" class="columnSelection__label">Cartoons and Comic Art</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_14" type="checkbox" name="subcategory" value="Fashion Design"> 
			<label for="checkbox_14" class="columnSelection__label">Fashion Design</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_15" type="checkbox" name="subcategory" value="Interiors and Exteriors and Furniture"> 
			<label for="checkbox_15" class="columnSelection__label">Interiors and Exteriors and Furniture and Landscapes</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_16" type="checkbox" name="subcategory" value="Printing"> 
			<label for="checkbox_16" class="columnSelection__label">Printing &amp; Production</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_17" type="checkbox" name="subcategory" value="Sculpting"> 
			<label for="checkbox_17" class="columnSelection__label">Sculpting</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_18" type="checkbox" name="subcategory" value="Crafting"> 
			<label for="checkbox_18" class="columnSelection__label">Crafting</label>
		</li>
	</ul> <!----> <!---->
</div>

<!-- div3 -->
<div id="wt" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="General and Other Writing"> 
			<label for="checkbox_1" class="columnSelection__label">General and Other Writing</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="Translation"> 
				<label for="checkbox_2" class="columnSelection__label">Translation</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_3" type="checkbox" name="subcategory" value="Articles"> 
				<label for="checkbox_3" class="columnSelection__label">Articles &amp; News</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Proofreading"> 
				<label for="checkbox_4" class="columnSelection__label">Editing &amp; Proofreading</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_5" type="checkbox" name="subcategory" value="Web Content"> 
				<label for="checkbox_5" class="columnSelection__label">Web Content</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_6" type="checkbox" name="subcategory" value="Industry Specific Expertise"> 
				<label for="checkbox_6" class="columnSelection__label">Industry Specific Expertise</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_7" type="checkbox" name="subcategory" value="Books"> 
				<label for="checkbox_7" class="columnSelection__label">Books</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_8" type="checkbox" name="subcategory" value="Research"> 
				<label for="checkbox_8" class="columnSelection__label">Research</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_9" type="checkbox" name="subcategory" value="Copywriting"> 
				<label for="checkbox_9" class="columnSelection__label">Copywriting</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_10" type="checkbox" name="subcategory" value="Academic"> 
				<label for="checkbox_10" class="columnSelection__label">Academic</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_11" type="checkbox" name="subcategory" value="Transcription"> 
				<label for="checkbox_11" class="columnSelection__label">Transcription</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_12" type="checkbox" name="subcategory" value="Technical"> 
				<label for="checkbox_12" class="columnSelection__label">Technical</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_13" type="checkbox" name="subcategory" value="Scripts and Speeches and Storyboards"> 
				<label for="checkbox_13" class="columnSelection__label">Scripts and Speeches and Storyboards</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_14" type="checkbox" name="subcategory" value="Reviews"> 
				<label for="checkbox_14" class="columnSelection__label">Reviews &amp; Testimonials</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_15" type="checkbox" name="subcategory" value="Songs"> 
				<label for="checkbox_15" class="columnSelection__label">Songs &amp; Poems</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_16" type="checkbox" name="subcategory" value="Resumes"> 
				<label for="checkbox_16" class="columnSelection__label">Jobs and Resumes</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_17" type="checkbox" name="subcategory" value="Instructional Design"> 
				<label for="checkbox_17" class="columnSelection__label">Instructional Design and E-learning</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_18" type="checkbox" name="subcategory" value="Grants"> 
				<label for="checkbox_18" class="columnSelection__label">Grants &amp; Proposals</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_19" type="checkbox" name="subcategory" value="Concepts and Ideas and Direction"> 
				<label for="checkbox_19" class="columnSelection__label">Concepts and Ideas and Direction</label>
			</li>

		</ul> <!----> <!----></div>

<!-- div4 -->
<div id="as" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="Data Entry"> 
			<label for="checkbox_1" class="columnSelection__label">Data Entry</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_2" type="checkbox" name="subcategory" value="Microsoft Office Software"> 
			<label for="checkbox_2" class="columnSelection__label">Microsoft Office Software</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_3" type="checkbox" name="subcategory" value="Word Processing"> 
			<label for="checkbox_3" class="columnSelection__label">Word Processing &amp; Typing</label>
		</li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Personal and Virtual Assistance"> 
				<label for="checkbox_4" class="columnSelection__label">Personal and Virtual Assistance</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_5" type="checkbox" name="subcategory" value="Spreadsheets"> 
				<label for="checkbox_5" class="columnSelection__label">Spreadsheets &amp; Data Manipulation</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_6" type="checkbox" name="subcategory" value="Customer Service"> 
				<label for="checkbox_6" class="columnSelection__label">Customer Service</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_7" type="checkbox" name="subcategory" value="Web Research"> 
				<label for="checkbox_7" class="columnSelection__label">Web Research &amp; Posting</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_8" type="checkbox" name="subcategory" value="Presentation Design"> 
				<label for="checkbox_8" class="columnSelection__label">Presentation Design</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_9" type="checkbox" name="subcategory" value="Bookkeeping"> 
				<label for="checkbox_9" class="columnSelection__label">Bookkeeping &amp; Finance</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_10" type="checkbox" name="subcategory" value="Email and Chat and Conferencing"> 
				<label for="checkbox_10" class="columnSelection__label">Email and Chat and Conferencing</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_11" type="checkbox" name="subcategory" value="Transcription"> 
				<label for="checkbox_11" class="columnSelection__label">Transcription</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_12" type="checkbox" name="subcategory" value="Planning"> 
				<label for="checkbox_12" class="columnSelection__label">Planning &amp; Scheduling</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_13" type="checkbox" name="subcategory" value="Health"> 
				<label for="checkbox_13" class="columnSelection__label">Health &amp; Medical</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_14" type="checkbox" name="subcategory" value="Mailings"> 
				<label for="checkbox_14" class="columnSelection__label">Mailings &amp; Lists</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_15" type="checkbox" name="subcategory" value="Legal Assistance"> 
				<label for="checkbox_15" class="columnSelection__label">Legal Assistance</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_16" type="checkbox" name="subcategory" value="Insurance"> 
				<label for="checkbox_16" class="columnSelection__label">Insurance</label>
			</li>

		</ul> <!----> <!----></div>

<!-- div5 -->
<div id="bf" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="Accounting"> 
			<label for="checkbox_1" class="columnSelection__label">Accounting &amp; Finan
			ce</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="Business Consulting"> 
			<label for="checkbox_2" class="columnSelection__label">Business Consulting</label>
			</li>

			<li style="line-height: 
				18px;">
				<input id="checkbox_3" type="checkbox" name="subcategory" value="Data Science"> 
				<label for="checkbox_3" class="columnSelection__label">Data Science &amp; Analytics</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Industry Specific Expertise"> 
				<label for="checkbox_4" class="columnSelection__label">Industry Specific Expertise</label></li>


			<li style="line-height: 18px;">
				<input id="checkbox_5" type="checkbox" name="subcategory" value="Human Resources"> 
				<label for="checkbox_5" class="columnSelection__label">Human Resources (HR)</label></li>


			<li style="line-height: 18px;">
				<input id="checkbox_6" type="checkbox" name="subcategory" value="ERP and CRM and SCM"> 
				<label for="checkbox_6" class="columnSelection__label">ERP and CRM and SCM</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_7" type="checkbox" name="subcategory" value="Fund Raising"> 
				<label for="checkbox_7" class="columnSelection__label">Fund Raising and Raising Capital</label>
			</li>


			<li style="line-height: 18px;">
				<input id="checkbox_8" type="checkbox" name="subcategory" value="SAP"> 
				<label for="checkbox_8" class="columnSelection__label">SAP</label>
			</li>


		</ul> <!----> <!----></div>

<!-- div6 -->

<div id="sm" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="Web and Digital Marketing"> 
			<label for="checkbox_1" class="columnSelection__label">Web and Digital Marketing</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="General Marketing"> 
			<label for="checkbox_2" class="columnSelection__label">General Marketing</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_3" type="checkbox" name="subcategory" value="Advertising"> 
				<label for="checkbox_3" class="columnSelection__label">Advertising</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Analysis and Data and Strategy and Plans"> 
				<label for="checkbox_4" class="columnSelection__label">Analysis and Data and Strategy and Plans</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_5" type="checkbox" name="subcategory" value="General Sales"> 
				<label for="checkbox_5" class="columnSelection__label">General Sales</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_6" type="checkbox" name="subcategory" value="Customer Relations"> 
				<label for="checkbox_6" class="columnSelection__label">Customer Relations</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_7" type="checkbox" name="subcategory" value="Industry Specific Expertise"> 
				<label for="checkbox_7" class="columnSelection__label">Industry Specific Expertise</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_8" type="checkbox" name="subcategory" value="Content and Copywriting"> 
				<label for="checkbox_8" class="columnSelection__label">Content and Copywriting</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_9" type="checkbox" name="subcategory" value="Lead Generation"> 
				<label for="checkbox_9" class="columnSelection__label">Lead Generation</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_10" type="checkbox" name="subcategory" value="Management"> 
				<label for="checkbox_10" class="columnSelection__label">Management</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_11" type="checkbox" name="subcategory" value="Branding"> 
				<label for="checkbox_11" class="columnSelection__label">Branding</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_12" type="checkbox" name="subcategory" value="Campaigns"> 
				<label for="checkbox_12" class="columnSelection__label">Campaigns</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_13" type="checkbox" name="subcategory" value="Call Centers and Telemarketing"> 
				<label for="checkbox_13" class="columnSelection__label">Call Centers and Telemarketing</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_14" type="checkbox" name="subcategory" value="Public Relations"> 
				<label for="checkbox_14" class="columnSelection__label">Public Relations (PR)</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_15" type="checkbox" name="subcategory" value="Communications"> 
				<label for="checkbox_15" class="columnSelection__label">Communications</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_16" type="checkbox" name="subcategory" value="Concepts and Creative Direction"> 
				<label for="checkbox_16" class="columnSelection__label">Concepts and Creative Direction</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_17" type="checkbox" name="subcategory" value="Affiliate"> 
				<label for="checkbox_17" class="columnSelection__label">Affiliate &amp; Referral Programs</label>
			</li>

		</ul> <!----> <!----></div>

<!-- div7 -->

<div id="ea" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="Engineering"> 
			<label for="checkbox_1" class="columnSelection__label">Engineering</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="Technical Drawing"> 
				<label for="checkbox_2" class="columnSelection__label">CAD and 2D and 3D and Technical Drawing </label>
				</li>

			<li style="line-height: 18px;">
				<input id="checkbox_3" type="checkbox" name="subcategory" value="Architecture"> 
				<label for="checkbox_3" class="columnSelection__label">Architecture</label></li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Algorithms"> 
				<label for="checkbox_4" class="columnSelection__label">Math and Science and Algorithms</label></li>

		</ul> <!----> <!----></div>

<!-- div8 -->
<div id="l" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="General and Other Law"> 
			<label for="checkbox_1" class="columnSelection__label">General and Other Law</label>
		</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="Legal Assistance">
			 <label for="checkbox_2" class="columnSelection__label">Legal Assistance</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_3" type="checkbox" name="subcategory" value="Contracts and Agreements and Policies"> 
				<label for="checkbox_3" class="columnSelection__label">Contracts and Agreements and Policies</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_4" type="checkbox" name="subcategory" value="Intellectual Property"> 
				<label for="checkbox_4" class="columnSelection__label">Intellectual Property</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_5" type="checkbox" name="subcategory" value="Employment and Business"> 
				<label for="checkbox_5" class="columnSelection__label">Employment and Business</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_6" type="checkbox" name="subcategory" value="Mediation and Negotiation"> 
				<label for="checkbox_6" class="columnSelection__label">Mediation and Negotiation</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_7" type="checkbox" name="subcategory" value="Criminal"> 
				<label for="checkbox_7" class="columnSelection__label">Criminal</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_8" type="checkbox" name="subcategory" value="Civil"> 
				<label for="checkbox_8" class="columnSelection__label">Civil</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_9" type="checkbox" name="subcategory" value="Family"> 
				<label for="checkbox_9" class="columnSelection__label">Family</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_10" type="checkbox" name="subcategory" value="Immigration"> 
				<label for="checkbox_10" class="columnSelection__label">Immigration &amp; International</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_11" type="checkbox" name="subcategory" value="Health"> 
				<label for="checkbox_11" class="columnSelection__label">Health &amp; Medical</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_12" type="checkbox" name="subcategory" value="Tax and Estates and Financial and Banking"> 
				<label for="checkbox_12" class="columnSelection__label">Tax and Estates and Financial and Banking</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_13" type="checkbox" name="subcategory" value="Real Estate Law"> 
				<label for="checkbox_13" class="columnSelection__label">Real Estate Law</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_14" type="checkbox" name="subcategory" value="Insurance"> 
				<label for="checkbox_14" class="columnSelection__label">Insurance</label>
			</li>

			<li style="line-height: 18px;">
				<input id="checkbox_15" type="checkbox" name="subcategory" value="Energy"> 
				<label for="checkbox_15" class="columnSelection__label">Energy</label>
			</li>

		</ul> <!----> <!----></div>

<!-- div9 -->
<div id="et" class="hide box-container">
	<ul class="module_list no-border tighter columnSelection"><!---->

		<li style="line-height: 18px;">
			<input id="checkbox_1" type="checkbox" name="subcategory" value="General and Other"> 
			<label for="checkbox_1" class="columnSelection__label">General and Other</label>
		</li>

			<li style="line-height: 18px;">
				<input id="checkbox_2" type="checkbox" name="subcategory" value="Science"> 
			<label for="checkbox_2" class="columnSelection__label">Science &amp; Math</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_3" type="checkbox" name="subcategory" value="College and High School and Elementary"> 
			<label for="checkbox_3" class="columnSelection__label">College and High School and Elementary</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_4" type="checkbox" name="subcategory" value="Languages"> 
			<label for="checkbox_4" class="columnSelection__label">Languages</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_5" type="checkbox" name="subcategory" value="Business"> 
			<label for="checkbox_5" class="columnSelection__label">Business &amp; Finance</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_6" type="checkbox" name="subcategory" value="Information Technology"> 
			<label for="checkbox_6" class="columnSelection__label">Information Technology</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_7" type="checkbox" name="subcategory" value="Health"> 
			<label for="checkbox_7" class="columnSelection__label">Health &amp; Fitness</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_8" type="checkbox" name="subcategory" value="Personal Growth"> 
			<label for="checkbox_8" class="columnSelection__label">Personal Growth &amp; Family</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_9" type="checkbox" name="subcategory" value="Materials"> 
			<label for="checkbox_9" class="columnSelection__label">Materials &amp; Media</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_10" type="checkbox" name="subcategory" value="Social Science"> 
			<label for="checkbox_10" class="columnSelection__label">Social Science</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_11" type="checkbox" name="subcategory" value="Design"> 
			<label for="checkbox_11" class="columnSelection__label">Design &amp; Art</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_12" type="checkbox" name="subcategory" value="Marketing"> 
			<label for="checkbox_12" class="columnSelection__label">Sales &amp; Marketing</label>
		</li>

		<li style="line-height: 18px;">
		 <input id="checkbox_13" type="checkbox" name="subcategory" value="Religious"> 
		 <label for="checkbox_13" class="columnSelection__label">Religious</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_14" type="checkbox" name="subcategory" value="Architecture"> 
			<label for="checkbox_14" class="columnSelection__label">Architecture &amp; Engineering</label>
		</li>

		<li style="line-height: 18px;">
			<input id="checkbox_15" type="checkbox" name="subcategory" value="Agriculture"> 
			<label for="checkbox_15" class="columnSelection__label">Agriculture</label>
		</li>

	</ul> <!----> <!----></div>

	 <!----> <!---->
	</div>
	<div class="postJobInput"><div>
	<label for="job-visibility"><p class="postJobInput__title">
		<i class="fas fa-cog"></i>
				Share your preferences
			</p> <!----></label>
		</div> 
		<div class="visibilitySection d-flex">
			
				<div class="visibilitySection__item mt-3">
				<p class="rhythmMarginSmall">
					<label for="location" class="grey smallText">
						<strong style="font-weight: 600;">Till:</strong>
						<input type="date" class="form-control" id="from" name="from">
					</label>
				</p> 
				</div>
			</div>

						<br>
	    <input type="submit" value="Post Job" name="submit" id="postjob">
  </form>

<?php 

 if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];
    $query = "UPDATE job_posting SET status=1 ORDER BY project_id DESC";
    $update = $db->prepare($query);
    $update->execute([$project_id]);
  }
  
    $sql = 'SELECT * FROM job_posting WHERE status=1';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $project_data = $stmt->fetch();
?>
    	<a href="listProject.php?project_id=<?php echo $project_data['project_id']; ?>">
  	
	  	Already posted the project. View Project?
	</a>

<!-- <div id="data-container"></div> -->
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
		var value = tinymce.get('editor').getContent();
			$("#display-post").html(value);
			$(".texteditor-container").hide();
			return false;
		});
	
	});

</script>

<script type="text/javascript" src="../js/postJobScript.js"></script>