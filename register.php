<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>registration form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="register.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!----------login section----START------>
     <div class="refistration-area">
      <div class="container">
        <div class="refistration-section">
          <div class="row">
            <div class="col-md-12">
              <h2>REGISTRATION FORM</h2>

            <form action="server.php" method="POST" name="">
               <div class="textbox">
                  <i class=" i fa fa-user"></i>
                  <input type="text" name="username" placeholder="  User Name">
               </div>
               <div class="textbox">
                  <i class="i fa fa-lock"></i>
                  <input type="password" name="password" placeholder= "  Password" />
               </div>
               <div class="pord">
                <p>Register as a </p>
                  <input type="radio" name="gender" value="Patient"/>Patient
                  <input type="radio" name="gender" value="Doctor"/>Doctor
               </div>
               <div class="btn-s">
                  <input type="submit" name="" value="SUBMIT"/>
               </div>
               <p>
                  Already a member? <a href="login.html">Sign in</a>
               </p>
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