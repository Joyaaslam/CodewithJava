<?php
include ('connection.php');
session_start();
$new_id=$_GET['id'];
$query = "SELECT * FROM Assessment where Id='$new_id'";
$result = mysqli_query($connection , $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css\learn.css">
  <script src="javascript\home.js"></script>
  <script>

   window.addEventListener('load',function()
 {
   let button=document.getElementById('b');
   let show=document.getElementById('show');
   let j=0;
   button.addEventListener('click',function()
 {
  if(j==0)
  {
    show.style.display="block";
    j=1;
  }
  else {
    show.style.display="none";
    j=0;
  }

 });


 });
  </script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="navbar-brand" id="mylogo">
        <h4 class="text1">codewithjava</h4>
     </div>
     <div class="collapse navbar-collapse navbar-default" id="mynavbar">
       <ul class="navbar-nav">
       <li class="text1 nav-items"><a class="nav-link" href="#">Home</a></li>
       <li class="text1 nav-items"><a class="nav-link" href="courses.php">Tutorials</a></li>
       <li class="text1  nav-items"><a class="nav-link"  id="change"><img src="images\icon.png" alt="" width=30 height=30></a></li>
       <li class="text1  nav-items"><a  class="nav-link" href="assessment.php">Exercise</a></li>
       <li class="text1  nav-items"><a  class="nav-link" href="contact.php">CONTACT</a></li>
       <li class="text1  nav-items"><a  class="nav-link" href="favourite.php">Favourite</a></li>
       <li class="text1  nav-items"><a  class="nav-link" href="index.php">LOGOUT</a></li>
       <li class="text1  nav-items"><a  class="nav-link" href="#"><?php echo $_SESSION['name'] ?> </a></li>
     </ul>
     </div>
     <button id="b" class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
       <span class=navbar-toggler-icon></span>
     </button>
 </nav>
 <div class="container-fluid" >
   <div class="row" style="background-color:#343a40;">
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
       <div style="background-color:#343a40;">
         <ul class="navbar-nav d-lg-none" style="display: none;" id="show" >
         <li class="text1 nav-items"><a style="color:white;"class="nav-link" href="#">Home</a></li>
         <li class="text1 nav-items"><a style="color:white;" class="nav-link" href="courses.php">Tutorials</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="assessment.php">Exercise</a></li>
         <li class="text1  nav-items"><a  style="color:white;" class="nav-link" href="contact.php">CONTACT</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="index.php">LOGOUT</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="favourite.php">Favourite</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="#"><?php echo $_SESSION['name'] ?> </a></li>
       </ul>
       </div>
     </div>
     <div class="col-sm-4"></div>

   </div>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10" id="background_2">
      <div class="row">

        <article class="article">
          <?php
            while($row=mysqli_fetch_assoc($result)){
              echo "<h1>Introduction to ".$row['Topic']."</h1>";
              echo "<p>".$row['Topic_des']."</p>";
              echo "<h1>Why we Learn ".$row['Topic']."?</h1>";
              echo "<p>".$row['Learn']."</p>";
              echo "<h1>Applications of ".$row['Topic']."</h1>";
              echo "<p>".$row['Application']."</p>";
              echo "<h1>Prerequisites of ".$row['Topic'] . "</h1>";
              echo "<p>".$row['Pre']."</p>";
           }?>

      </div>
     </div>
     <div class="col-sm-1"></div>
   </div>
 </div>
 <div class="row" id="footer">
     <p id="text2">copyrights@2022 codewithjava</p>
 </div>
</body>
</html>
