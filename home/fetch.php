
<?php
include('config.php'); //Database Connection

if (isset($_POST["action"])) {
    $query = "
  SELECT * FROM job_posting WHERE status = '1'
 ";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
   AND price BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
  ";
    }
    if (isset($_POST["type_work"])) {
        $type_filter = implode("','", $_POST["type_work"]);
        $query .= "
   AND type_work IN('" . $type_filter . "')
  ";
    }
    if (isset($_POST["uploaded_on"])) {
        $upload_filter = implode("','", $_POST["uploaded_on"]);
        $query .= "
   AND uploaded_on IN('" . $upload_filter . "')
  ";
    }
    if (isset($_POST["posted_by"])) {
        $owner_filter = implode("','", $_POST["posted_by"]);
        $query .= "
   AND posted_by IN('" . $owner_filter . "')
  ";
    }
    
    $statement = $db->prepare($query);
    $statement->execute();
    $result= $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output= '';
   
    if ($total_row > 0) {
      $slno = 1;
      $output = '<table class="table">
          <thead class="table-success">
            <tr>
              <th scope="col">Sl No</th>
              <th scope="col">Project Title</th>
              <th scope="col">Description</th>
              <th scope="col">Bid (Rs)</th>
              <th scope="col">Domain</th>
              <th scope="col">Date Posted</th>
              <th scope="col">Project Owner</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody id="myTable">';
        foreach ($result as $row) {
          ?>
            <?php 
              $sql = "SELECT * FROM job_posting";
              $stmt = $db->prepare($sql);
              $stmt->execute();
                $query = "UPDATE job_posting SET status=1 ORDER BY project_id DESC";
                $update = $db->prepare($query);
                $update->execute();
                ?>
                <?php
                $output .= '<tr>
                  <th scope="row">'.$slno++.'</th>
                  <td><a href="bid_project.php?project_id='.$row['project_id'].'&amp;project_title='.$row['project_title'].'&amp;project_description='.$row['project_description'].'" style="text-decoration:none;">'.$row['project_title'].'</a></td>
                  <td>'.$row['project_description'].'</td>
                  <td>'.$row['price'].'</td><td>'.$row['type_work'].'</td>
                  <td>'.$row['uploaded_on'].'</td><td>'.$row['posted_by'].'</td>
                  <td>
                    <a href="delete_project.php?project_id='.$row['project_id'].'" class="text-danger">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </td>
                </tr>';?>
          <?php 
        }
        $output .= '</tbody>
        </table>';
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>


