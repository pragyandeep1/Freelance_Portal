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
    $result    = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output    = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '<div class="col-md-4 col-sm-6">
   <div class="product-grid">
           <div class="container bg-light">
              <div class="col">
                <div class="row text-success">
                  Project Name : <a href="bid_project.php?title='.$row['project_title'].'">'.$row['project_title'].'</a>
                </div>
                <div class="row text-success">
                  Description : ' . $row['project_description']. '
                </div>
                <div class="row text-success">
                  Bid (Rs) : ' . $row['price']. '
                </div>
                <div class="row text-success">
                  Domain : ' . $row['type_work']. '
                </div>
                <div class="row text-success">
                 Date Posted : ' . $row['uploaded_on']. '
                </div>
                <div class="row text-success">
                  Project Owner : ' . $row['posted_by']. '
                </div>
              </div>
            </div>
           <a class="add-to-cart text-uppercase" href="">apply bid</a>

   </div>
</div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>