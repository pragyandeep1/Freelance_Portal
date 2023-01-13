<?php 
  require_once "config.php"; 

  if (isset($_GET['id'])) {
    $main_id = $_GET['id'];
    $query = "UPDATE message SET status=1 WHERE id='$main_id'";
    $update = $db->prepare($query);
    $update->execute();
  }

?>
<title>Read Notifications</title>
<?php include "views/header1.php" ?>

    <div class="container" id="table1">
      <div class="row">
        <table class="table">
          <thead class="table-primary">
            <tr>
              <th scope="col">Sl No</th>
              <th scope="col">Name</th>
              <th scope="col">Message</th>
              <th scope="col">Date  Time</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $slno = 1;
              $sql = "SELECT * FROM message WHERE status=1";
              $stmt = $db->prepare($sql);
              $stmt->execute();
                foreach ($stmt as $main_result) :?>
                <tr>
                  <th scope="row"><?php echo $slno++; ?></th>
                  <td><?php echo $main_result['name']; ?></td>
                  <td><?php echo $main_result['msg']; ?></td>
                  <td><?php echo $main_result['cr_date']; ?></td>
                  <td><a href="delete.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
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

    <!-- Navbar end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>