<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="6.png">
    <style>
         body {
			position: relative;
			background-color:lightskyblue ;
			background-size: cover;
			background-position: center;
			height: 100vh;
      
		} 
        .blur {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(255, 255, 255, 0.5);
			filter: blur(5px);
		}
	
		
		.flex-container {
    display: flex;
}

.flex-child {
    flex: 1;
    border: 2px solid yellow dotted;
}  

.flex-child:first-child {
    margin-right: 20px;
} 

p{
    margin-top: 150px;
    text-align: center;
    font-size: 60px;
    font-family: 'century gothic';
    color:cadetblue;
    text-shadow: 0 0 5px #fff,
                 0 0 10px #fff, 
                 0 0 20px blanchedalmond, 
                 0 0 30px azure, 
                 0 0 40px blanchedalmond, 
                 0 0 55px green, 
                 0 0 70px green;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainpage</title>
</head>
<body>
<p style="font-size: 90px; margin: top 0;"><b><i>Select your category</i></b></p>
<div class="flex-container">

  <div class="flex-child magenta">
  <center>  <img src="doctor-gif.gif" height="200" width="200" usemap="#workmap">
  <map name="workmap">
  <area shape="rect" coords="0,0,200,200" href="logindoc.php">
  </center>  </div>
  
  <div class="flex-child green">
	<center>
  <img src="human.gif" height="200" width="200" usemap="#work">
  <map name="work">
  <area shape="rect" coords="0,0,200,200" href="login.php">
  </center>
  </div>
  
</div>


<marquee width="90%" direction="left"  height="400px" style="font-size: large; font-size:100px">
<b>
Welcome to Centralized Hospitalization System
</b>
</marquee>


    
</body>
</html>