<?php
include "connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		BookHotels
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		nav
		{
			float: right;
			word-spacing: 30px;
			padding: 20px;
		}
		nav li 
		{
			display: inline-block;
			line-height: 80px;
		}
	</style>
	</head>

<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<h1 style="color: white; font-size: 31px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">BookHotels</h1>
		</div>
			<nav>
				<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="registration.php">REGISTRATION</a></li>
				<li><a href="about.php">ABOUT</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
				<br><br><br>
				<div class="box2">
        <h1 style="text-align: center; font-size: 25px;">Hotel Search</h1><br><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
		<input class="form-control" type="text" name="name" placeholder="name" required=""> <br><br>
		<input class="form-control" type="text" name="price" placeholder="price(10k-50k)" required=""> <br><br>
        <input class="form-control" type="text" name="interior" placeholder="interior(Small/Big/Very Big)" required=""> <br><br>
        <input class="form-control" type="rooms" name="rooms" placeholder="rooms(1/2/3/4/5)" required=""> <br><br>
        <input class="btn btn-default" type="submit" name="submit" value="Search" style="color: black; width: 70px; height: 30px"> 
      </form>
     
    </div>
  </div>
</section>
<?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `hotels` WHERE name='$_POST[name]' && price='$_POST[price]' && interior='$_POST[interior]' && rooms='$_POST[rooms]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>Sorry, no deals found</strong>
          </div>    
        <?php
      }
    else
    {
      ?>
      <script type="text/javascript">
        window.location="hotels.php"
        </script>
        <?php
    }
    }
  ?>
		
		</section>
		<footer>
			<p style="color:white;  text-align: left; ">
				<br>
				Email: bookhotels@gmail.com <br>
				Mobile: 123-456789
			</p>
		</footer>
	</div>
	
</body>
</html>
