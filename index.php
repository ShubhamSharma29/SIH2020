
<!DOCTYPE html>
<html>
  <head>
    <title>Login page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="Stylesheet" href="./styles/styles.css">
    <style>
      
    </style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>

  </head>

 

  <body>
		<div class="login">
			<h1>Login</h1>
			<form action="login.php" method="POST">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>

		<!-- <script>
        function redirect() 
        {
            var x = document.getElementById("username");
            var y = document.getElementById("password");
            // var z = document.getElementById("txtInput");
            // var a = document.getElementById("mainCaptcha");
            if ((x.value == "admin" || "abhay") && (y.value == "admin" || "abhay02")) 
            {
                window.location.href = "./php/super-dm.php";
                return false;
            } else 
            {
                alert("Wrong Credentials! Please Enter Again.");
                return false;
            }
        }
    </script> -->
	</body>
</html>
