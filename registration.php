<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
    body {
        height: 630px;
	margin-top: 0px;
  background-image: url("lib2.jpg");

}
</style>
  </style>   
  
</head>
<body>
<header style="height: 135px;">
  
<div class="logo">
      <h1 style="color: white;font-family: Georgia; font-size: 35px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">BookHotels</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <li><a href="registration.php">REGISTRATION</a></li>

        </ul>
      </nav>
</header>

<section>
    <div class="box2">
    <h1 style="text-align: center; font-size: 35px;font-family: Georgia;">User Registration Form</h1><br><br>
      <form name="Registration" action="" method="post">
        
        <div class="login">
        <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br><br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br><br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br><br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br><br>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br><br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> 
  </div>
      </form>
     
    </div>
  </div>
</section>

<?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `users`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `users` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</body>
</html>
