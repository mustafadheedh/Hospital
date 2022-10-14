
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
            <input type="email" name="email" required placeholder="enter your email">
      <input style="margin-bottom: -5px;"type="password" name="password" required placeholder="enter your password">
      <p><a id="forgetpass" style="color: crimson; font-size: 14px;" href="forgetpass.php">forget password?</a></p>
      <a href="../index.php"><input style="display: inline-block; width: 45%; margin-right: 15px;" type="button" value="<-return" class="form-btn" id="form-btn2"></a>
      <input style="display: inline-block; width: 45%;" type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>