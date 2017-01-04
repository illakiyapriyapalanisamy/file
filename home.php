<!DOCTYPE html>
<html lang="en">
<head>
  <title>TENENT INFORMATION PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
body,td,th {
	font-size: 12px;
	color: #000;
}
h1
{
	text-align: center;
	}
body {
	background-color: #FFF;
}
</style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tenant information portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/project/home.php">Home</a></li>
      <li><a href="#">Dashboard</a></li>
      <li><a href="http://localhost/project/login.php">Login</a></li>
      <li><a href="#">Sign Up</a></li>

    </ul>
  </div>
</nav>

<div class="container">
  <h2>POLICE LOGIN</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class ="control-label col-sm-2" for="text">Badge ID</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" id="text" placeholder="Enter Badge ID">
    </div>
  </div>
    <div class="form-group">
      <label class ="control-label col-sm-2" for="pwd">Password</label>
      <div class="col-sm-4">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Login</button>
        </div>
      </div>

  </form>
</div>



</body>
</html>
