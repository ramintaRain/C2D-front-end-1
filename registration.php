<?php
$name=isset($_POST['name']) ? $_POST['name']: '';
$surname=isset($_POST['surname']) ? $_POST['surname']: '';
$email=isset($_POST['email']) ? $_POST['email']: '';
$information=isset($_POST['information']) ? $_POST['information']: '';
$check=isset($_POST['check']) ? $_POST['check']: '';
$empty=isset($_POST['empty']) ? $_POST['empty']: '';

$success = isset($_GET['success']) ? $_GET['success'] : '';
$error = array("name" => "","surname" => "", "email" => "","information" => "","check" => "","empty" => "","database" => "");


if($_POST){
if (strlen($name)==0 ||strlen($name)>50|| strlen($surname)==0||strlen($surname)>50||strlen($email)==0||strlen($email)>50||strpos($email,'@')==0 ||strlen($information)==0||$check!=1||strlen($empty)!=0){
  if(strlen($name) == 0){
				$error['name'] = 'Error in name field';
			}
      if(strlen($name) > 50){
            $error['name'] = 'Error in name field';
          }
          if(strlen($surname) == 0){
        				$error['surname'] = 'Error in surname field';
        			}
              if(strlen($surname) > 50){
            				$error['surname'] = 'Error in surname field';
            			}
			if(strlen($email) == 0){
				$error['email'] = 'Error in email field';
			}
      if(strlen($email) > 50){
        $error['email'] = 'Error in email fieldr';
      }
      if(strpos($email,'@')==0){
        $error['email'] = 'Error in email field';
      }
			if(strlen($information) == 0){
				$error['information'] = 'If you have nothing to add, just enter "none"';
			}
      if ($check != 1){
            $error['check'] = 'Incorrect';
          }

}else{
  $conn = new mysqli( 'localhost', 'root', 'root', 'group');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
        $name = $conn->real_escape_string($name);
  			$surname = $conn->real_escape_string($surname);
  			$email = $conn->real_escape_string($email);
        $information = $conn->real_escape_string($information);
        $check = $conn->real_escape_string($check);
        $empty = $conn->real_escape_string($empty);


  $saved= $conn->query("INSERT INTO registration (name, surname, email, information)
  VALUES('$name','$surname','$email','$information')");
  if ($saved){
    header('Location: ' . $_SERVER['PHP_SELF'] . '?success=registration complete');
}
else {
  $error['database'] = "Error when saving";
}
}
}

if(strlen($success) == 0) {

  ?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>LOGOUT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="normalize.css"/>
	<link rel="stylesheet" type="text/css" href="registration.css"/>

</head>

<body>

	<header>
				<div class="inner containerA">
					<div class="navimage">
						<a href="index.html"><img class="logonav" src="https://steamcdn-a.akamaihd.net/steam/apps/798950/header.jpg?t=1525233749" alt="logout"/></a>
					</div>
					<div class="nav">
						<label for="toggle">&#9776;</label>
						<input type="checkbox" id="toggle"/>
						<div class="menu">
						  <a href="AboutFaqGallery.html">About</a>
						  <a href="#">News</a>
						  <a href="event.html">Program</a>
						  <a href="speaker2.html">Speakers</a>
						  <a href="tickets.html">Tickets</a>
						</div>
					</div>
				</div>
	</header>

  <section class="registration-sheet">
           <div class="inner">
             <h1>
                 <span class="register">Registration</span>
             </h1>
             <p>We’re almost there but let’s not forget that you must register before entering!</p>
             <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
               <input class=name type="text" name="name" placeholder="First name"value="<?php echo $name; ?>"/>
               <div class=php><?php echo $error['name']; ?></div>
               <input class=name type="text" name="surname" placeholder="Last name"value="<?php echo $surname; ?>"/>
               <div class=php><?php echo $error['surname']; ?></div>
               <input class=email type="text" name="email" placeholder="Email address"value="<?php echo $email; ?>"/>
               <div class=php><?php echo $error['email']; ?></div>
               <input class=information type="textarea" name="information"placeholder="Additional information" value="<?php echo $information; ?>"/>
               <div class=php><?php echo $error['information']; ?></div>
               <input class=name type="text" name="check" placeholder="1+0=...?"value="<?php echo $check; ?>"/>
               <div class=php><?php echo $error['check']; ?></div>
               <input class=empty type="text" name="empty"/>
               <input type="submit" value="Submit">
             </form>

           </div>
     </div>
     </section>

	<div class="background">


		<section class="partners">
			<h2>Partners:</h2>
			<div class="flex-container">
				<img class="apple" src="images/apple2.png" alt="apple logo"/>
				<img class="beats" src="images/Beats Logo.png" alt="beats logo"/>
				<img class="nike" src="images/nikelogo.png" alt="nike logo"/>
				<img class="cognizant" src="images/cognizantlogo.png" alt="cognizant logo"/>
				<img class="microsoft" src="images/Microsoft_Logo.png" alt="microsoft logo"/>
				<img class="cola" src="images/coca2.png" alt="cocacola logo"/>
				<img class="vu" src="images/vu logo.png" alt="vu logo"/>
			</div>
		</section>

		<footer>
			<div class="flex-container3">
				<div class="flex-container2">
				<ul>
					<li><a class="about" href="AboutFaqGallery.html">About</a></li>
					<li><a href="tickets.html">Tickets</a></li>
					<li><a href="event.html">Program</a></li>
					<li><a href="#blog">Blog</a></li>
				</ul>
				</div>

				<h4>Get latest news</h4>
				<div><form action="/action_page.php"></div>

				<input class="emailhere" type="email" name="email" placeholder ="Your email here">
				<input class="button" type="button" onclick="alert('You have subscribed!')" value="Subscribe">
			</div>

			<div class="copyright">
				<span>© 2018 LOGOUT</span>
				<a href="http://www.facebook.com">
					<img class="fb" src="images/facebook.png" alt="facebook"/>
				</a>
				<a href="http://www.instagram.com">
					<img class="insta" src="images/instagram.png" alt="instagram"/>
				</a>
				<a  class="link" href="http://www.linkedin.com">
					<img class="linkedin" src="images/linkedin4.png" alt="linkedin"/>
				</a>
			</div>
		</footer>
	</div>
</body>
</html>

<?php
}else {
		print "Your registration is complete, we will inform you when the tickets will be available";

	}
?>
