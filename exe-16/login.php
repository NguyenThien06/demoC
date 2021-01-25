<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
<link rel='stylesheet' type ='text/css' href='css/style.css'   />
</head>
<body>
  <div id="wrapper">
      <div class="title"> Login</div>
          <div id="form">
          <form method ="post" action="process.php">
          <?php 
             session_start();
             if($_SESSION['flagPremission']==true){
                 echo "friend do sign <a href='logout.php'>day</a>";
                 echo "<br> ten ban la ".$_SESSION['userInfo']['Name'];
             }
             else{
          ?>
              <div class= 'row'>
                  UserName 
                  <input name='username' type='text' />
              </div>
             <div class='row'>
               Password
               <input name = 'password' type='password' />
             </div>
             <div class="row">
               <input type="submit" value="Submit" />
             </div>
             <?php 
                }
             ?>
             </form>
          </div>
  
  </div>
</body>
</html>
   