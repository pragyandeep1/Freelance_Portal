<?php 
  
    require_once "config.php";

    $_SESSION['filter2'] = 'filter2';

    if (isset($_SESSION['filter1'])&& !empty($_SESSION['filter1'])) {
      header('Location: viewProject1.php');
    }

 ?>

 <title>List Projects</title>
<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="../css/productStyle.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css"> -->
  <?php require "views/header1.php" ?>
    <div class="container w-100" id="table1" name="table1" style="overflow-x:auto;">
      <div class="row">
        <!-- <h2>Filterable Table</h2> -->
        <p>Type something in the input field to search:</p>  
        <input id="myInput" class="w-50 mb-2" type="text" name="text" placeholder="Search here..">
        <br><br>
        <table class="table">
          <thead class="table-success">
            <tr>
              <th scope="col">Sl No</th>
              <th scope="col">Project Title</th>
              <th scope="col">Description</th>
              <th scope="col">Bid (Rs)</th>
              <!-- <th scope="col">File Name</th> -->
              <th scope="col">Project Category</th>
              <th scope="col">Date Posted</th>
              <th scope="col">Project Owner</th>
              <th scope="col">Delete</th>
            </tr>

          </thead>
          <tbody id="myTable">
            <?php 
              $slno = 1;
              $sql = "SELECT * FROM job_posting";
              $stmt = $db->prepare($sql);
              $stmt->execute();
              foreach ($stmt as $row) :
                $main = $row['project_id'];
                $query = "UPDATE job_posting SET status=1 WHERE project_id='$main'";
                $update = $db->prepare($query);
                $update->execute();

                ?>
                <tr>
                  <th scope="row"><?php echo $slno++; ?></th>
                  <td><a href="bid_project.php?title='.$row['project_title'].'"><?php echo $row['project_title']; ?></a></td>
                  <td><?php echo $row['project_description']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['type_work']; ?></td>
                  <td><?php echo $row['uploaded_on']; ?></td>
                  <td><?php echo $row['posted_by']; ?></td>
                  <td><a href="delete_project.php?project_id=<?php echo $row['project_id'];?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
              <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div> 
<br>



<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 0.5rem;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>