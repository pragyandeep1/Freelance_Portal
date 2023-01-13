<?php
session_start();
require_once "config.php";

  $statusMsg = '';

  // file upload directory
  $targetDir = '../uploads/';

  if (isset($_POST['submit'])) {

    $title = $_POST['jobtitle'];
    $description =$_POST['subject'];
    $type_work = json_encode($_POST['subcategory']);

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
          $sql = "INSERT INTO job_posting (title, description, file_name, type_work) VALUES (?,?,?,?);";
          $stmtinsert = $db->prepare($sql);
          $result = $stmtinsert->execute([$title, $description, $filename, $type_work]);

          if ($stmtinsert->rowCount()>0) {
           
            $statusMsg = "<script>
                alert('You posted job successfully.');
                windows.location='postjob.php',2000;
              </script>";
            echo $statusMsg;
          }
          else{
            $statusMsg = "<script>
                alert('File uploading failed. Please try again.');
                windows.location='postjob.php',2000;
              </script>";
              echo $statusMsg;
          }

          
        }
        else{
          $statusMsg = "<script>
                alert('The file format is not allowed.');
                windows.location='postjob.php',2000;
              </script>";
              echo $statusMsg;
        }
      }
      else{
        $statusMsg = "<script>
                alert('Please select a file to upload.');
                windows.location='postjob.php',2000;
              </script>";
              echo $statusMsg;

      }
      
    }
    
  }

  // echo $statusMsg;
  // setTimeout('window.location.href = profile.php',2000);

?>

<!-- <script>
setTimeout('window.location.href = postjob.php',2000);

</script> -->