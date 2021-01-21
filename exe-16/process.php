<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Process</title>
<link rel='stylesheet' type ='text/css' href='css/style.css'   />
</head>
<body>
  <div id="wrapper">
      <div class="title"> Process</div>
          <div id="form">
            <?php 
             require_once "functions.php";
             require_once "database.class.php";
             session_start();
             if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
                   $username = $_POST['username'];
                   $password = md5($_POST['password']);
                   
                   $param = array(
                       'server'=>'localhost',
                       'username'=>'root',
                       'password'=>'',
                       'table'=>'user',
                       'database'=>'nguoidung'
                   );
                   $data = new Dasabase($param);
                   $sql = "select * from `user` where `Username`='".$username."' and `Password`='".$password."' ";
                   $data->Query($sql);
                   $userInfo = $data->SingleRecord();
                   if(!empty($userInfo)){
                       echo "chao ban den trang web<a href='logout.php'> day </a>";
                       
                       $_SESSION['userInfo'] = $userInfo;
                       $_SESSION['time'] = time();
                       $_SESSION['flagPremission'] = true;
                       echo "<br> ten ban la ".$_SESSION['userInfo']['Name'];
                   }else{
                       header("location: logout.php");
                   }
                   
             }else{
                 header("location: logout.php");
             }
             
            ?>
          </div>
  
  </div>
</body>
</html>
   