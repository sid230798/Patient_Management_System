<!--

Showing Reviews Query as : 
Select first_name,last_name,image_url,Rating,text from Reviews join Patient using(P_id) where doctor_id = 1;
-->
<?php

        include 'includes/connection.php';
        
        session_start();
        
        $_SESSION['url'] = $_SERVER['REQUEST_URI'];
        $row = null;
        
        if(isset($_GET['q'])){
        
                $doctor_id = $_GET['q'];
                /*
                $sql = "select Patient.first_name,Patient.last_name,Reviews.Rating,Reviews.text from Doctor join (Reviews join Patient using(P_id)) using(doctor_id) where doctor_id = ".$doctor_id;
                */
                $sql = "select * from Doctor where doctor_id = ".$doctor_id;
                $result = $conn->query($sql);
                
                $row = $result->fetch_assoc();
        
        }
        


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Balthazar' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/JiSlider.css">
  <link href='https://fonts.googleapis.com/css?family=Stalinist One' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <script src = "js/jquery.min.js"></script>
</head>
<body>
<div class = "mynav">
	 <nav class="navbar navbar-inverse navbar-fix navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style = "color:black; font-size:1.5em" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="Departments.php">Departments</a></li>
        <!--
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
        -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['login_user'])){ ?>
       <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php   echo $_SESSION['login_user']; ?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      <?php  }else{ ?>
        <li><a href="./PHP-login_sign_up/sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="./PHP-login_sign_up/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php   } ?>
      </ul>
      </div>
      </div>
      </nav>
 <div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

<div class="services-breadcrumb" style="padding-top: 1%">
		<div class="container">
			<ul>
				<li><a href="index.html" style="font-family: Balthazar; font-size: 1.4em">Home</a><i>|</i></li>
				<li style="font-family: Balthazar; font-size: 1.4em">Departments</li>
			</ul>
		</div>
	</div>
</div>
<br>
  <div class = "container">
  <!-- dep name card -->
  <div class = "col-sm-3">
  <img class = "img-rounded img-responsive img-raised" src="<?php echo $row['image_url'] ?>"></div>
  <div class = "col-sm-9"><h3>Doctor Name : <?php echo $row['first_name']." ".$row['last_name']; ?></h3></div>
  <div class = "col-sm-9"><h3>Doctor BIO:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Education:</h3></div>
  <div class = "col-sm-9"><h3>Doctor Specialization:</h3></div>
  <div class = "col-sm-9"><button onclick="myFunction(this)">Book appointment</button></div>
  <script>
  
        function myFunction(x){
        
                if(<?php if(isset($_SESSION['login_user'])) echo 1; else echo 0; ?>){
                
                        x.setAttribute("data-target","#myModal");
                        x.setAttribute("data-toggle","modal");
                        
                        
                }else{
                
                        window.location="./PHP-login_sign_up/login.php";
                
                }
        
        
        
        }
        
  </script>
  </div>
  <div class = "container">
    <h3>Reviews</h3>
    <br>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
    <h4>username stars</h4>
    <h4>lorem adsklfna;sdfnaldsnadl;ndskv n;ewirgnwa;eldkvnslv dz/.sv a;fwje;ofenaksldgnvdslv .zxc,v sd/fm.ewaofj</h4>
    <hr>
  </div>
  <div class = "container">
    <button class="btn btn-alert" style="margin-bottom: 3%" data-toggle="modal" data-target="#myModal">Add a Review</button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <form action = "" method="post">
                <label> Name : </label>
                <input type="text" name = "name" placeholder = "Enter Your Name"></input>
                
                <label> Description : </label>
                <textarea class = 'form-control' rows="10" cols="50">Enter Your Text Here ...</textarea>
                <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alert btn-simple" name="Submit">Confirm</button>
              </div>
                <!--<button class="btn btn-alert" style="margin-bottom: 3%" name="Submit">Confirm</button>-->
                </form>
              </div>  
            </div>
          </div>
        </div>
  </div>
  <!-- end -->
</body>
</html>
