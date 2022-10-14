
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Reset Password</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="forgetpass.php" method="post">
      <h3>Reset Password</h3>

      <input type="email" name="email" required placeholder="enter your email">
      <a href="login.php"><input style="display: inline-block; width: 45%; margin-right: 15px;" type="button" value="<-Login" class="form-btn" id="form-btn2"></a>
      <input style="display: inline-block; width: 45%;" type="submit" name="send-reset-link" value="Send Link" class="form-btn">
   </form>

</div>

</body>
</html>