<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <div class="col-lg-8 col-lg-offset-2">
        <h1>Register Page</h1>
        <p>
            Please fill form
        </p>
        <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?> </div>


        <?php
        }?>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" name="username" id="username" type="text" />
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" name="password" id="password" type="password" />
        </div>

        <div class="form-group">
            <label for="cpassword">Confirm Password:</label>
            <input class="form-control" name="cpassword" id="cpassword" type="password" />
        </div>

        <div class="form-group">
            <label for="fname">First Name:</label>
            <input class="form-control" name="fname" id="fname" type="text" />
        </div>

        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input class="form-control" name="lname" id="lname" type="text" />
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" name="email" id="email" type="text" />
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input class="form-control" name="phone" id="phone" type="text" />
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <input class="form-control" name="gender" id="gender" />
        </div>

        <div>
            <button class="btn btn-primary" name="register">Register</button>
        </div>
    </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  </body>
</html>