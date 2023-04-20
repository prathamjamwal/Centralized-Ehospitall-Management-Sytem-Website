<!DOCTYPE html>
<html>
  <head>
    <title>Book OPD</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
      .form-group label {
        font-weight: bold;
      }
      
      .btn-submit {
        background-color: #337ab7;
        color: #fff;
        border-color: #2e6da4;
      }
      
      .btn-submit:hover {
        background-color: #2e6da4;
        color: #fff;
        border-color: #285e8e;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="maincit.php">Home</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="forget.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
      <h1>Book OPD</h1>
      
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" class="form-control" id="age" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" id="phone" required>
        </div>
        
        <div class="form-group">
          <label for="specialty">Specialty:</label>
          <select class="form-control" id="specialty" value="<?php if(isset($_GET['doc'])){echo $_GET['doc']; } ?>" required >
            <option value="">-- Select --</option>
            <option value="cardiology">Cardiology</option>
            <option value="dermatology">Dermatology</option>
            <option value="endocrinology">Endocrinology</option>
            <option value="gastroenterology">Gastroenterology</option>
            <option value="neurology">Neurology</option>
            <option value="orthopedics">Orthopedics</option>
            <option value="pediatrics">Pediatrics</option>
            <option value="psychiatry">Psychiatry</option>
            <option  value="urology">Urology</option>
      </select>
    </div>
    <div class="form-group">
          <label for="doctor">Doctor Name:</label>          
          <select class="form-control" id="specialty" required>
          <option value="cardiologist">Cardiologist</option>
  <option value="dermatologist">Dermatologist</option>
  <option value="endocrinologist">Endocrinologist</option>
  <option value="gastroenterologist">Gastroenterologist</option>
  <option value="neurologist">Neurologist</option>
  <option value="oncologist">Oncologist</option>
  <option value="pediatrician">Pediatrician</option>
  <option value="psychiatrist">Psychiatrist</option>
  <option value="surgeon">Surgeon</option>
  <option value="urologist">Urologist</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" required>
    </div>
    
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" required>
    </div>
    
    <div class="form-group">
      <label for="notes">Notes:</label>
      <textarea class="form-control" id="notes" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-submit">Book Appointment</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
