<?php
session_start();
require_once "config.php";
?>
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<?php

    $sql = "SELECT * FROM user";
    $query = $db->prepare($sql);
    // $query->execute([0]);
    if ($query->rowCount()>0) {
      while ($row = $query->fetchAll(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $sqlimg = "SELECT * FROM profileimg WHERE userid = '$id'";
        $resultimg = $db->prepare($sqlimg);
        while ($rowimg = $query->fetchAll(PDO::FETCH_ASSOC)) {
          echo "<div>";
            if ($rowimg['status'] == 0) {
              echo "<img src='img/avatars/profile".$id.".png?'".mt_rand().">";
            }
            else{
              echo "<img src='img/avatars/profiledefault.png'>";
            }
            echo $row['username'];
            echo "</div>";
        }
      }
    }
    else{
      echo "There are no users.";
    }

   if( isset($_SESSION['id'])){
      if($_SESSION['id']==1){
    // $userData = getUserData(getId($_SESSION['username']));
        echo "You are logged in as user #1";
      }
      echo "<form action='' method='post' enctype='multipart/form-data'>
          <input type='file' name='file'>
          <button type='submit' name='submit'>Upload</button>
      </form>";
    }
    else{
      echo "You are not logged in.";
      echo "<form action='login.php' method='post'>
              <input type='text' name='first' placeholder='first name'>
              <input type='text' name='last' placeholder='last name'>
              <input type='text' name='uid' placeholder='username'>
              <input type='password' name='pwd' placeholder='password'>
              <button type='submit' name='submitsignup'>Signin</button>
            </form>";
    }

  ?>



<p>Login as Freelancer</p>
<form action="login.php" method="post">
    <button type="submit" name="submitLogin">Login</button>
</form>

<p>Logout as Freelancer</p>
<form action="logout.php" method="post">
    <button type="submit" name="submitLogout">Logout</button>
</form>