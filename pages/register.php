
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registeration Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register now</h3>
            <input type="text" name="name" required placeholder="Enter Name" pattern="[a-zA-Z]{1,25}">
      <input type="email" name="email" required placeholder="Enter email">
      <input type="password" name="password" required placeholder="Enter password">
      <input type="password" name="cpassword" required placeholder="Confirm password">
      <select name="user_type">
         <option value="Parent">Parent</option>
         <option value="Hospital">Hospital</option>
      </select>
      <a href="../index.php"><input style="display: inline-block; width: 45%; margin-right: 15px;" type="button" value="<-return" class="form-btn" id="form-btn2"></a>
      <input style="display: inline-block; width: 45%;" type="submit" name="submit" value="register" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>