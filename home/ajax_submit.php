<?php 

require_once "config.php";
if(isset($_POST['submit'])){ 
    // Get the submitted form data 
    $duration = $_POST['duration']; 
    $amount = $_POST['amount']; 
    $description = $_POST['description'];
    // Check whether submitted data is not empty 
    if(!empty($duration) && !empty($amount) && !empty($description)){
            $return = true;
    }else{ 

        echo "<script>
				alert('Something went wrong! Please try again after some time.');
			</script>";
			$return =false;
    }
    if($return){

				$sql = "INSERT INTO bid(amount, duration, type, description) VALUES (?,?,?,?);";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$amount, $duration, $type, $description]);

				if($result){
					if ($stmtinsert->rowCount()>0) {
							echo "<script>
									  alert('Project bid has been placed successfully.');
									  var r = 'awardBid.php';
									  setTimeout('window.location.href = r',2000);
								  </script>";	
					}
					
				}

			}
			else{
				echo "<script>
						  alert('Invalid Bidding Details.');
					  </script>";
			}

		} 
?>