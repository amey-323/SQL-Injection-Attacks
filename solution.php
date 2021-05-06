<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>SQL Injection Attacks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        
        <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="sol.php" method="post">
                            
                            <div class="form-group">
                                <label for="username" class="text-info">Username:<?php echo $_SESSION['username']; ?></label><br>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:<?php echo $_SESSION['pass']; ?></label><br>
                            </div>
                            <button type="submit" name="logout" class="btn btn-primary">logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>