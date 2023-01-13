<?php
require_once('config.php');

  function getUserData($id){

    $arr = array();
    $q = 'SELECT * FROM users WHERE id = ? LIMIT 1';

    while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
      $arr['id'] = $r['id'];
      $arr['firstname'] = $r['firstname'];
      $arr['lastname'] = $r['lastname'];
      $arr['username'] = $r['username'];
      $arr['email'] = $r['email'];
      $arr['password'] = $r['password'];
      $arr['contact'] = $r['contact'];
    }

    return $arr;
  }

  function getId($username){
    $q = 'SELECT id FROM users WHERE username = ? LIMIT 1';
     while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
        return $r['id'];
    }
  }

?>

