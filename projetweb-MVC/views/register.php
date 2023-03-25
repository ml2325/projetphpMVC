<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
    <link rel="stylesheet" href="../styles.css/login.css">

</head>
<body>


   
<section class="form-container">
 <img src="../images/Mobile login.gif" alt="register">
   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="nom" class="box" placeholder="enter your name" required>
      <input type="text" name="prenom" class="box" placeholder="enter your prenom" required>
      <input type="email" name="email" class="box" placeholder="enter your email" required>
      <input type="password" name="password" class="box" placeholder="your password" required>
      <input type="text" name="category_formation" class="box" placeholder="category formation" required>
      <input type="text" name="name_uni" class="box" placeholder="name university" required>
     
      <input type="text" name="type_user" class="box" placeholder="type of user" >
      <input type="submit" class="btn" name="submit" value="register now">

      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</section>

</body>
</html>


<?php
	if(isset($_POST['submit'])){
		$new = new UserController();
		$newuser->adduser();
	}

?>