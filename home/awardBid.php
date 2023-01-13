<?php 
  require_once "config.php"; 

  if (isset($_GET['id'])) {
    $main_id = $_GET['id'];
    $query = "UPDATE bid SET status=1 WHERE id='$main_id'";
    $update = $db->prepare($query);
    $update->execute();
  }

?>
<?php include "views/header1.php" ?>
<div class="container">
	<div id="wrapper" class="pt-5 mt-5" id="center">
        <div id="container" class="mx-auto">
            <h3 class="text-uppercase text-success text-center" style="text-decoration: underline;">project view</h3>
            <table class="table">
          <thead class="table-primary">
            <tr>
              <th scope="col">Sl No</th>
              <th scope="col">Amount</th>
              <th scope="col">Duration</th>
              <th scope="col">Days/Months</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $slno = 1;
              $sql = "SELECT * FROM bid WHERE status=1";
              $stmt = $db->prepare($sql);
              $stmt->execute();
                foreach ($stmt as $main_result) :?>
                <tr>
                  <th scope="row"><?php echo "Bid ".$slno++; ?></th>
                  <td><?php echo $main_result['amount']; ?></td>
                  <td><?php echo $main_result['duration']; ?></td>
                  <td><?php echo $main_result['type']; ?></td>
                  <td><?php echo $main_result['description']; ?></td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
            	<div class="form-group text-center">
                  <button id="mbtn" onclick="award()" class="btn btn-primary turned-button">Award Bid</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function award() {
      alert("The project is awarded to the candidate successfully!");
    }
</script>
<?php include "views/footer1.php" ?>