<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/views/includes/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/project/views/includes/css/form.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link rel="stylesheet" href="http://localhost/project/views/includes/css/offre.css"/>
    <title>Peach</title>
</head>
<body>
<?php include('./views/includes/alerts.php');
			?>
<header>
    
    <div class="line" id="line">
    <div class="navbar-header">
        
     <img class="logo" id="logo" src="http://localhost/project/views/includes/image/logo.png" alt="logo">
   
    

<?php
ob_start();
	if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
        $var = strtoupper($_SESSION['username']);
        $var[0];

		echo '
        <nav class="navbar">
        
        <ul class="navlinks" id="navlinks">
		';
		if ($_SESSION['role'] == 'admin') {
			echo
			'<li><a href="http://localhost/project/homeO">Offre de stage</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Entreprise</a></li>
            <li><a href="http://localhost/project/home">Compte</a></li>
            <li><a href="../contact.php">Contact</a></li>
     
		';
		}elseif ($_SESSION['role'] == 'etudiant') {
			echo
			'<li><a href="http://localhost/project/homeO">Offre de stage</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Entreprise</a></li>
            <li><a href="../contact.php">Contact</a></li>
     
		';
		}elseif ($_SESSION['role'] == 'delegue') {
			echo
			'<li><a href="http://localhost/project/homeO">Offre de stage</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Entreprise</a></li>
            <li><a href="../contact.php">Contact</a></li>
     
		';
		}elseif ($_SESSION['role'] == 'pilote') {
			echo
			'<li><a href="http://localhost/project/homeO">Offre de stage</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Entreprise</a></li>
			<li><a href="http://localhost/project/home">Compte</a></li>
            <li><a href="../contact.php">Contact</a></li>
     
		';
		}
            
		echo'
   
</ul>
</nav>
        <div class="flexshit">
        <li class="login_shit" >
        <div class="rond_style">'.$var[0].'</div></li>


        <li class="login_shit" id="login_shit" >'.$_SESSION['username']. '</li>


        <a class="buttonwrap" href="http://localhost/project/logout"><button class="login_button login_button_shit"><img class="logout_image" src="http://localhost/project/views/includes/image/logout.png" alt=""></button></a>
        
        </div>






        <style>
        
        .flexshit{
            display:flex;
            align-items:center;
        }
        .overlay{display:none}
        .login_shit{
        list-style: none;
        
        }
        #login_shit{
            list-style: none;
            margin:0;
            margin-right:25px
            }
        .login_button_shit{
            width:50px;
            border-radius:75px;
            height:50px;
            display:flex;
            align-items:center;
            justify-content:center;
            
            
        }
        .login_button_shit:hover{
            background-color:#470e0c;
        }
        
        .img_login_shit{
        width:32px;
        height:41.2px;
     
        }
        .logout_image{
            width:26.36px;
        height:30.5px;
        }
        @media (max-width:1200px) {
          .img_login_shit,.login_shit{
              display:none
              
          }
        }
        </style>
        ';
        

		
	}else{

		echo '<a class="buttonwrap" href="#popup1"><button class="login_button">Connexion</button></a>';
	}







?>  

    
    
    </div>

</div>

</header>


<div id="popup1" class="overlay">


<form  method="post" class="popup">

<a class="close" href="#">&times;</a>

<div class="imgcontainer">
<img src="http://localhost/project/views/includes/image/logo.png" alt="Logo" class="avatar">
</div>

<div class="container">
<label for="username"  >Nom d'utilisateur</label>
<input class ="login_input" type="text" name="username" required>
<label for="password">Mot de passe</label>
<input class ="login_input" type="password"  name="password" required>
<p>
<?php  if (!empty($_SESSION["gh"])){echo $_SESSION["gh"];} 
?>
</p>
<input style ="font-family: 'Sora';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;"class= "login_button" type="submit" name="submit" value="Se connecter" id="submit">

</div>

</form>
   
</div>


<div class="caca">
<input type="checkbox" id="ham-menu">
<label for="ham-menu">
  <div class="hide-des">
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
  </div>

</label>
<div class="full-page-green"></div>
<div class="ham-menu">
<?php
 ob_start();
	if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
        $var = strtoupper($_SESSION['username']);
        $var[0];

		echo '
        <div class="container_login_burger">

        <li class="login_burger"><div class="rond_style">'.$var[0].'</div>'.$_SESSION['username'].'</li>


       
        
        <style>
        
        
        .caca .ham-menu {
            width: 288px;
            
        }
    
        .role{
            font-size:15px;
            margin:10px 0 0 5px;
            position:relative
        }
        .rond_style{
            width:50px;
            height:50px;
            min-width:50px;
            min-height:50px;
            border-radius:50px;
            background-color:#acacacf3;
            color:#353535f3;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:40px;
            margin-right:10px
        }
        
        .login_burger{
           margin:auto;
           padding-top:75px;
           color:black;
           font-size: 24px;
           position:absolute;
           left:0;
           margin:10px 0 0 25px;
           display:flex;
           align-items:center;
           
            
        }
        .img_login_shit_burger{
            width:26.6px;
            height:34.3px;
            margin-right:10px;
            font-size:24px
         
            }
            .ham-menu{
                flex-direction:column;
                
            }
            .container_login_burger{
                display:flex;
                align-items: center;
                justify-content:center;
                position: absolute;
    top: 0;
    right: 0; 
    list-style:none;
    width:100%;
            }
        
        </style>
        </div>

        ';}else{
           echo' <style>
        
            .caca .ham-menu {
                width: 288px;
                flex-direction:column
            }
        </style>';
        }
        

		
	
?>
<ul class="centre-text bold-text">
  <li><a href="./form.php">Stage</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Entreprise</a></li>
            <li ><a class="connexion_burger" href="#">Connexion</a></li>
            <li><a href="#">Contact</a></li>
            

  </ul>
  <?php
	if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
		
		echo 
        '


        <a class="buttonwrap btnwraplogin" href="http://localhost/project/logout"><button style="margin:auto; margin-top:20px" class="login_button butnburger login_button_shit"><img class="logout_image" src="http://localhost/project/views/includes/image/logout.png" alt=""></button></a>
        
        
        <style>
        .login_burger{
            top:0;
            right:0
            
        }
        .img_login_shit_burger{
            width:26.6px;
            height:34.3px;
         
            }
            .ham-menu{
                flex-direction:column;
                
            }
            .container_login_burger{
                display:flex;
                align-items: center;
                justify-content:flex-end;
                position: absolute;
    top: 0;
    right: 0;
            }
            .btnwraplogin{
                margin:0;
                position:absolute;
                bottom:0;
                width:100%;
                margin: 0 0 50px;
                         
            }
        .login_button_shit{
          margin:auto;
           background-color:#890F0D;
        }
        
        </style>
        ';

		
	}else{

		echo '<a class="buttonwrap" href="#popup1"><button class="login_button butnburger">Connexion</button></a>';
       
	}




?>   
</div>
</div>