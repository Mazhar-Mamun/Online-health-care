<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="login.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!----------login section----START------>
     <div class="login-area">
      <div class="container">
        <div class="login-section">
          <div class="row">
            <div class="col-md-12">
            	<div class="profile"><i class=" i fa fa-user"></i></div>
            	<h2>LOGIN FORM</h2>

            <form action="server.php" method="POST" name="">
            	<div class="textbox">
            		<i class=" i fa fa-id-card"></i>
              		<input type="text" name="" placeholder="  User ID">
             	 </div>
             	 <div class="textbox">
              		<i class=" i fa fa-user"></i>
              		<input type="text" name="" placeholder="  User Name">
             	 </div>
             	 <div class="textbox">
              		<i class="i fa fa-lock"></i>
              		<input type="password" name="" placeholder="  Password">
             	 </div>
             	 <div class="batton">
              		<input type="submit" name="" value="Log in"/>
             	 </div>
             </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!----------login  section----STOP------>


   
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>