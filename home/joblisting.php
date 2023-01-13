<?php require_once "config.php"; ?>
<?php include "views/header.php" ?>
<?php include "views/links.php" ?>

    <div class="container" id="center">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control text-uppercase" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" required>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Enter message</label>
            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" name="send" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>