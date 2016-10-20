<!DOCTYPE html>
<html lang="en">
<head>
  <title>Minor Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron" style="background-color: purple;">
  <div class="container text-center">
    <h1 style="color: gold;">BoliLagao.com</h1>
  </div>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Women</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Appliances</a></li>
          <li><a href="#">Home-Decor</a></li>
        </ul>
        </li>
        <li><a href="sell.html">Sell</a></li>
        <li><a href="contact.html" target="_blank">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" id="log_in">Login <span class="caret"></span></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">


              <form action="login.php" method="post" accept-charset="UTF-8" >
                 <input id="user_username" style="margin-bottom: 15px;" type="Email" name="signin_email" size="30" placeholder="Email"/>
                 <input id="user_password" style="margin-bottom: 15px;" type="Password" name="signin_password" size="30" placeholder="Password"/>
                 <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
                 <label class="string optional" for="user_remember_me"> Remember me</label>
     

                 <input class="btn btn-primary" onclick="myFunction()" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" onsubmit="return xyz()" />
              </form>

           
            </div>
          </li>

          <li data-toggle="modal" data-target="#registerform"><a href="#">Register</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
    </div>
  </div>
</nav>


<div class="modal fade" id="registerform" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3>Register</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="signup.php" method="POST">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="username">Username</label>
                <div class="controls">
                  <input type="text" id="username" name="username" placeholder="" class="form-control input-lg">
                  <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                </div>
              </div>
           
              <div class="control-group">
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                  <input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
                  <p class="help-block">Please provide your E-mail</p>
                </div>
              </div>
           
              <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                  <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                  <p class="help-block">Password should be at least 6 characters</p>
                </div>
              </div>
           
              <div class="control-group">
                <label class="control-label" for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                  <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="form-control input-lg">
                  <p class="help-block">Please confirm password</p>
                </div>
              </div>
           
              <div class="control-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success" type="submit">Register</button>
                </div>
              </div>

            </fieldset>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div>        
  </div>  
</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-5">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-5">
          <div class="panel panel-primary">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="panel panel-danger">
            <div class="panel-heading">BLACK FRIDAY DEAL</div>
            <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-6" style="margin-top: 70px;">
      <div class="panel panel-danger">
        <div class="panel-heading">NEWS</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div>
<br><br>

<footer class="container-fluid text-center">
  <p style="font: italic 900 15px/30px Georgia, serif">Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50">
    <button type="button" class="btn btn-danger">Search</button>
  </form>
</footer>
<?php
echo "<script>
        function xyz()
        {
          document.getElementbyId('log_in').textContent='hi avruty !';
          return false;
        }  
      </script>";
?>
</body>
</html>

