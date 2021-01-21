
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
#ab1:hover{cursor:pointer;}

h2
{
  color: white;
}
</style>
</head>
<body style="background:url('images/background.jpg') no-repeat; background-size:cover;">

<div class="container" style="width:400px;margin-top: 150px">
<div class="card" style="background:url(images/card.jpg);opacity:0.8;border:none;">
<div class="card-body">

  <form class="form" method="post" action="login_process.php">
      <br>
      <div class="message" id="message" style="margin: auto;"></div>
      <div class="form-group has-feedback">
        <center><h2>Login</h2></center><br>
        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>
      <div class="col-auto"><br>
      <center><button type="submit" name="submit" id="submit" class="btn btn-dark">Submit</button></center>
    </div>
    </form>

  
</div>
</div>
</div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>