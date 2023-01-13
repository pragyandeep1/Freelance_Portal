<?php 
  require_once "config.php"; 

  if (isset($_GET['project_id'])) {
    $main = $_GET['project_id'];
    $query = "UPDATE job_posting SET status=1 WHERE project_id='$main'";
    $update = $db->prepare($query);
    $update->execute();
  }

?>


<title>View Projects</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
<link rel="stylesheet" type="text/css" href="../css/productStyle.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
  <?php require "views/header1.php" ?>


<div class="container">

        <br>
        <br>
        <h2 class="text-center">View Projects</h2>
        <br>
        

             <div class="container w-100" id="table1" style="overflow-x:auto;">
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
              <th scope="col">Domain</th>
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
                  <td><a href="bid_project.php?value=project_id"><?php echo $row['project_title']; ?></a></td>
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
        <div class="row">

<div class="col-md-3">
  <div class="form-price-range-filter">
        <form method="post" action="">
                <div class="list-group">
                    <h3>Bidding Range</h3>
                    <input type="hidden" id="min_price_hide" value="0" />
                    <input type="hidden" id="max_price_hide" value="300" />
                    <p id="price_show">Rs 500 - Rs 30000</p>
                    <div id="price_range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                      <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 89.6552%;"></div>
                      <span tabindex="0" class="ui-slider-handle ui-state-default" style="left: 0%;"></span>
                      <span tabindex="0" class="ui-slider-handle ui-state-default" style="left: 89.6552%;"></span>
                    </div>
                </div>
          </form>
        </div>

                <div class="list-group">
                    <h3>Domain:</h3>
                    <?php
                    $query = "SELECT DISTINCT(type_work) FROM job_posting WHERE status = '1' ORDER BY type_work DESC";
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                        <div class="list-group-item checkbox">
                            <label>
                                <input type="checkbox" class="filter_all type_work" value="<?php echo $row['type_work']; ?>">
                                <?php echo $row['type_work']; ?>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="list-group">
                    <h3>By Date:</h3>
                    <?php

                    $query = "SELECT DISTINCT(uploaded_on) FROM job_posting WHERE status = '1' ORDER BY uploaded_on DESC";
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                        <div class="list-group-item checkbox">
                            <label>
                                <input type="checkbox" class="filter_all uploaded_on" value="<?php echo $row['uploaded_on']; ?>">
                                <?php echo $row['uploaded_on']; ?>
                            </label>
                        </div>
                        <?php    
                    }

                    ?>
                </div>

                <div class="list-group">
                    <h3>Posted By:</h3>
                    <?php
                    $query = "SELECT DISTINCT(posted_by) FROM job_posting WHERE status = '1' ORDER BY posted_by DESC";
                    $statement = $db->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                        <div class="list-group-item checkbox">
                            <label>
                                <input type="checkbox" class="filter_all posted_by" value="<?php echo $row['posted_by']; ?>">
                                <?php echo $row['posted_by']; ?>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>

         <div class="col-md-9">

                <div class="row filter_data">

                </div>

            </div>

      

    </div>

    </div> 
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
   
    <script src="../js/bootstrap1.min.js"></script>
    <script>
        $(document).ready(function() {

            filter_data();

            function filter_data() {
                $('.filter_data');
                var action = 'fetch_data';
                var minimum_price = $('#min_price_hide').val();
                var maximum_price = $('#max_price_hide').val();
                var title = get_filter('project_title');
                var type_work = get_filter('type_work');
                var uploaded_on = get_filter('uploaded_on');
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        title: title,
                        type_work: type_work,
                        uploaded_on: uploaded_on
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.filter_all').click(function() {
                filter_data();
            });

            $('#price_range').slider({
                range: true,
                min: 500,
                max: 30000,
                values: [500, 30000],
                slide: function(event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#min_price_hide').val(ui.values[0]);
                    $('#max_price_hide').val(ui.values[1]);
                    filter_data();
                }
            });

        });
    </script>
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

    <!-- Navbar end -->
    <?php require "views/footer.php" ?>