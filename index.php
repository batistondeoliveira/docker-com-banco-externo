<?php

try {
    $conn = new PDO('mysql:host=host.docker.internal:3306;dbname=teste', 'root', 'infor');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $data = $conn->query('SELECT * FROM cliente');

    foreach($data as $row) {
        print_r($row);
    }
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }