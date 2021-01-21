<?php 
      require_once "database.class.php";
      $param = array(
          'server'=>'localhost',
          'username'=>'root',
          'password'=>'',
          'table'=>'user',
          'database'=>'nguoidung'
      );

      $data = new Dasabase($param);
      $sql = "select * from `user`";
      $data->Query($sql);
      $single = $data->SingleRecord();
      echo "<pre>";
      print_r($single);
      echo "</pre>";

