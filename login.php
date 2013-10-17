<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="description" content="orchestra script server">
        <meta name="author" content="boardstretcher@gmail.com">
        <meta name="project" content="https://github.com/boardstretcher/orchestra">

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Orchestra</title>

        <style>
        html, body {height: 100%;}
        footer {color: #666;background: #222;padding: 17px 0 18px 0;border-top: 1px solid #000;}
        footer a {color: #999;}
        footer a:hover {color: #efefef;}
        .wrapper {min-height: 100%;height: auto !important;height: 100%;margin: 0 auto -63px;}
        .push {height: 63px;}
        .wrapper > .container {padding-top: 60px;}
        </style>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="brand" href="./index.php">Orchestra</a>
				<div class="nav-collapse collapse">
				<ul class="nav">
				</ul>
				</div>
			</div>
		</div>
<div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Login</h2>
          <form action="secure.php" method="post">
            <fieldset>
              <div class="clearfix">
                <input type="text" name="myusername" placeholder="Username">
              </div>
              <div class="clearfix">
                <input type="password" name="mypassword" placeholder="Password">
              </div>
              <button class="btn primary" type="submit">Sign in</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
