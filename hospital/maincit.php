<!DOCTYPE html> 
<html> 
 <head> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, iniƟal-scale=1" /> 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style> 
 
      .dropdown:hover .dropdown-menu {
        display: block;
      }


      .footer {
  background-color: #f8f8f8;
  padding: 50px 0;
  text-align: center;
  position: relative;
}

.footer::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #007bff;
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease-in-out;
}

.footer:hover::before {
  transform: scaleX(1);
}

.footer h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

.footer p {
  font-size: 14px;
  color: #666;
}

.footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.footer ul li {
  margin-bottom: 10px;
}

.footer ul li a {
  color: #666;
  font-size: 14px;
}

.footer ul li a:hover {
  color: #007bff;
}

.footer ul li i {
  margin-right: 10px;
  color: #007bff;
  font-size: 18px;
}

.footer hr {
  border: none;
  border-top: 1px solid #ddd;
  margin: 30px 0;
}

.footer p.text-center {
  margin-bottom: 0;
  font-size: 14px;
  color: #666;
}

.footer p.text-center a {
  color: #007bff;
  text-decoration: none;
}

.footer p.text-center a:hover {
  text-decoration: underline;
}

    
 </style> </head> 
 <body> 
 <nav class="navbar navbar-default">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li> <a class="links" href="bookopd.php"><i><b><i style="font-size:24px" class="fa">&#xf0f9;</i>Book OPD</b></i></a></li>
            <li><a class="links" href="medicine.php"><i><b><i style="font-size:24px" class="fa">&#xf217;</i>Buy Medicines</b></i></a></li>
            <li> <a class="links" href="#"><i><b><i style="font-size:24px" class="fa">&#xf271;</i>Book Test</b></i></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><marquee direction="left"><?php
            session_start();
           echo "Welcome,".$_SESSION['name']." "."to centralized hospital system";
           ?></marquee> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="forget.php">Change Password</a></li>
                <li><a href="logout.php" >Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="6.png" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



  
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>About Us</h3>
        <p>Welcome to Centralized Hospitalization System, the leading provider of hospital management solutions. Our mission is to make hospitalization more accessible, efficient, and effective through the use of cutting-edge technology.</p>
			</div>
      <div class="col-md-3">
        <h3>Quick Links</h3>
        <ul class="list-unstyled">
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Contact Us</h3>
        <ul class="list-unstyled">
          <li><i class="fa fa-map-marker"></i> Lane 8 , Dehradun, Uttarakhand</li>
          <li><i class="fa fa-phone"></i> (+91)1234567891</li>
          <li><i class="fa fa-envelope"></i> geu.ac.in</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
        <p class="text-center">Copyright © <?php echo date('Y');?>
          All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

 </body> 
</html>