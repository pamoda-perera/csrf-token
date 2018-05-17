<?php 	
  session_start();
	if(isset($_SESSION['username'])){
				
	}else{
		header("Location:index.php");	
	}
?>
<html>

<head>
  <link rel="shortcut icon" type="image/x-icon" href="https://image.ibb.co/n5gUtm/icon_1.png"/>
  <link href="home.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="theme-color" content="#daa37f">
  <title>User - Profile</title>
  <script>
	$(document).ready(function(){
    
    var token = document.getElementById("token").value;
    $.ajax({
        type: 'POST',
        url: 'tokenCheck.php',
        data: {'token': token},
        
        success: function (data) {
            // alert(data);
            if(data == 'false'){
              window.location = "http://localhost/sse1/index.php?fail=2";
            } else {
              
            }
        }
      }); 
	});
</script>   
</head>

<body>

		<h1> This is my profile </h1>
    <h3>You have valid Token!</h3>
    <input id="token" type="hidden" value = <?php echo $_POST['token'] ?> />
	</body> 
</html>