<?php
      ob_start();
      session_start();
      include"includes/db_conn.php";
      include"includes/header.php";
?>
    <body>
    <header id="home">
<?php 
      include"includes/navmenu.php";
?>
    </header>

<br>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<center><h2>Industrial Visit</h2></center>
<center><span><b>Industrial visit is a part of the Education, during which students visit companies and get insight of on the internal working environment of the company. <b></span></center>


<div>
    
<br>
<br>


</div>

<div class="container">
  <form method="post" class="form-group" action="../Process/iv_submit.php">
     <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" class="form-control" placeholder="Your name.." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" name="email" class="form-control" placeholder="Your email.." required>
    </div>
  </div>
    <br>
  
  <div class="row">
    <div class="col-25">
      <label for="Branch">Branch</label>
    </div>
    <div class="col-75">
      <select id="Branch" name="Branch" class="form-control" required>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-25">
      <label for="PassYear">PassOut Year</label>
    </div>
    <div class="col-75">
     <select name="PassYear" class="form-control" required>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
        </select>
    </div>
    <br>
    
   <div class="">
    <div class="col-25">
      <label for="name_ind">Name of Industry</label>
    </div>
    <div class="col-75">
      <input type="text" id="name_ind" class="form-control" name="name_ind" placeholder="Industry name..." required>
    </div>
  </div>
  <br>
  <div class="">
    <div class="col-25">
      <label for="Audience">Target Audience</label>
    </div>
  <div class="col-75">
      <select  name="Audience" class="form-control" required>
        <option value="Teaching Staff">Teaching Staff</option>
        <option value="Non-teaching Staff">Non-teaching Staff</option>
        <option value="All Students">All Students</option>
        <option value="First Year">First Year</option>
        <option value="Second year">Second year</option>
        <option value="Third Year">Third Year</option>
      </select>
    </div>
    
    <br>
     <div class="">
    <div class="col-25">
      <label for="Dept">Department for Workshop</label>
    </div>
    <div class="col-75">
      <select name="Dept" class="form-control" required>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
      </select>
    </div>
  </div>
  <br>

    <div class="">
    <div class="col-25">
      <label for="count">Count</label>
    </div>
    <div class="col-75">
      <input type="text" id="count" class="form-control" name="count" placeholder="Number of Audience..." required>
    </div>
  </div>
  <br>

<div class="">
    <div class="col-25">
      <label for="datetime">Suitable Date and Time</label>
    </div>
    <br>
    <div class="col-75">
     <input type="date"  name="Date" dateformat="d M y" required> <input type="time"  name="Time">  
    </div>

      <br>         

  <div class="row">
  <center> 
    <input type="submit" class="btn btn-success" name="submit" value="Submit"> 
    &nbsp;&nbsp;
     <input type="reset" class="btn btn-danger" value="Reset"> 
   </center>
  </div>
  </form>
</div>

</body>
</html>
<br>

<?php
    include"includes/footer.php";
    include"includes/modals.php";
    
?>