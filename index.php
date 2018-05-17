<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/n5gUtm/icon_1.png"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="login.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<title>SSE1</title>
<body>

    <?php 
        if(isset($_GET['fail']) && $_GET['fail'] == 1){
            echo "<h1 style='color:red' > Username or password is incorrect </h1>";
        } else if (isset($_GET['fail']) && $_GET['fail'] == 2) {
            echo "<h1 style='color:red'>Invalid token </h1>";
        }
    ?>
    <div class="container">
        <div class="card card-container">
           
            <img id="profile-img" class="profile-img-card" src="me.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="result.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" >Sign in</button>
            </form>
            
        </div><!-- /card-container -->
    </div><!-- /container -->
	</body>
	</html>