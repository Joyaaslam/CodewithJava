<?php
include ('connection.php');
session_start();
//echo $_SESSION['id'];
$query = "SELECT * FROM Tutorials";
$result = mysqli_query($connection , $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css\home.css">
  <link rel="stylesheet" href="css\courses.css">
  <script src="javascript\home.js"></script>
  <script src="javascript\change.js"></script>
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
<body id="me">
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
         <li class="text1 nav-items"><a style="color:white;"class="nav-link" href="home.php">Home</a></li>
         <li class="text1 nav-items"><a style="color:white;" class="nav-link" href="courses.php">Tutorials</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="assessment.php">Exercise</a></li>
         <li class="text1  nav-items"><a  style="color:white;" class="nav-link" href="contact.php">CONTACT</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="index.php">LOGOUT</a></li>
          <li class="text1  nav-items"><a class="nav-link"  id="change"><img src="images\icon.png" alt="" width=30 height=30></a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="favourite.php">Favourite</a></li>
         <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="#"><?php echo $_SESSION['name'] ?> </a></li>
       </ul>
       </div>
     </div>
     <div class="col-sm-4"></div>

   </div>
 </div>
 <div class="container-fluid" id="backgound">
   <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
     <h1 id="learncode">Learn to code</h1>
     <h3 id="site">with the world largest web developer site.</h3>
     <input  type="text" name="search" id="search" placeholder=" Search our tutorials, e.g. CSS" required oninput="searchtopic2()">
      <button type="button" name="button" id='searchbutton' onclick="searchtopic()"><b>Search</b></button><br>

     <a href="courses.php" id="notsure"><p id="note">Not Sure Where To Begin?</p></a>
   </div>
    <div class="col-sm-2"></div>
  </div>
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="row">
     <div class="col-sm-4"></div>

       <div class="col-sm-4">
         <div id="empty">
         </div>
       </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="col-sm-1"></div>
  </div>


  <div class="container-fluid">
 <div class="container-fluid">
   <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10"><br><br><br>
    <div class="row">
     <div class="col-sm-4">
       <div class="box1" id="python">
        <div class="image">
          <img src="images\python_logo.png" alt="sorry" class="image_check">
        </div>
        <div class="text2">
         <p class="free">Free Course</p>
         <article>
         <h6>PYTHON Tutorials</h6>
         </article>
         <?php
         while($row = mysqli_fetch_assoc($result)){
           if($row['Id']==1)
           {
          echo "<a href='Python.php?id=$row[Id]'>
          <button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
           </a>";
           break;
         }
         }?>
        </div>
      </div>
      </div>
       <div class="col-sm-4">
         <div class="box1" id="bootstrap">
      <div class="image">
        <img src="images\bootstrap.logo.jpg" alt="sorry" class="image_check">
      </div>
      <div class="text2">
       <p class="free">Free Course</p>
       <article>
       <h6>BOOTSTRAP Tutorials</h6>
       </article>
       <?php
       while($row = mysqli_fetch_assoc($result)){
         if($row['Id']==2)
         {
        echo "<a href='Python.php?id=$row[Id]'>";
        break;
        }}
        echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
         </a>";
       ?>
      </div>
    </div>
       </div>
        <div class="col-sm-4">
          <div class="box1"id="java_s">
           <div class="image">
             <img src="images\js.png" alt="sorry" class="image_check">
           </div>
           <div class="text2">
            <p class="free">Free Course</p>
            <article>
            <h6>JAVASRCIPT Tutorials</h6>
            </article>
            <?php
            while($row = mysqli_fetch_assoc($result)){
              if($row['Id']==3)
              {
             echo "<a href='Python.php?id=$row[Id]'>";
             break;
             }}
             echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
              </a>";
            ?>
           </div>
         </div>
    </div>
    <div class="col-sm-1"></div>
 </div>
 </div>
 </div>
 </div>
 <div class="container-fluid">
   <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <div class="row">
   <div class="col-sm-4">
     <div class="box1" id="java">
      <div class="image">
        <img src="images\java_logo.png" alt="sorry" class="image_check">
      </div>
      <div class="text2">
       <p class="free">Free Course</p>
       <article>
       <h6>JAVA Tutorials</h6>
       </article>
       <?php
       while($row = mysqli_fetch_assoc($result)){
         if($row['Id']==4)
         {
        echo "<a href='Python.php?id=$row[Id]'>";
        break;
        }}
        echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
         </a>";
       ?>
      </div>
    </div>
    </div>
     <div class="col-sm-4">
       <div class="box1" id="cs">
        <div class="image">
          <img src="images\c1.png" alt="sorry" class="image_check">
        </div>
        <div class="text2">
         <p class="free">Free Course</p>
         <article>
         <h6>C# Tutorials</h6>
         </article>
         <?php
         while($row = mysqli_fetch_assoc($result)){
           if($row['Id']==5)
           {
          echo "<a href='Python.php?id=$row[Id]'>";
          break;
          }}
          echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
           </a>";
         ?>
        </div>
      </div>
     </div>
      <div class="col-sm-4">
        <div class="box1" id="php">
         <div class="image">
           <img src="images\php.png" alt="sorry" class="image_check">
         </div>
         <div class="text2">
          <p class="free">Free Course</p>
          <article>
          <h6>PHP Tutorials</h6>
          </article>
          <?php
          while($row = mysqli_fetch_assoc($result)){
            if($row['Id']==6)
            {
           echo "<a href='Python.php?id=$row[Id]'>";
           break;
           }}
           echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
            </a>";
          ?>
         </div>
       </div>
      </div>

  </div>
  <div class="col-sm-1"></div>
 </div>
 </div>
 </div>
 <div class="container-fluid">
   <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10"><br>
  <div class="row">
   <div class="col-sm-4">
     <div class="box1" id="html">
      <div class="image">
        <img src="images\html.png" alt="sorry" class="image_check">
      </div>
      <div class="text2">
       <p class="free">Free Course</p>
       <article>
       <h6>HTML Tutorials</h6>
       </article>
       <?php
       while($row = mysqli_fetch_assoc($result)){
         if($row['Id']==7)
         {
        echo "<a href='Python.php?id=$row[Id]'>";
        break;
        }}
        echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
         </a>";
       ?>
      </div>
    </div>
    </div>
     <div class="col-sm-4">
       <div class="box1" id="css">
        <div class="image">
          <img src="images\css.png" alt="sorry" class="image_check">
        </div>
        <div class="text2">
         <p class="free">Free Course</p>
         <article>
         <h6>CSS Tutorials</h6>
       </article>
       <?php
       while($row = mysqli_fetch_assoc($result)){
         if($row['Id']==8)
         {
        echo "<a href='Python.php?id=$row[Id]'>";
        break;
        }}
        echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
         </a>";
       ?>
        </div>
      </div>
     </div>
      <div class="col-sm-4">
        <div class="box1" id="cp">
           <div class="image">
             <img src="images\c.png" alt="sorry" class="image_check">
           </div>
           <div class="text2">
            <p class="free">Free Course</p>
            <article>
            <h6>C++ Tutorials</h6>
            </article>
            <?php
            while($row = mysqli_fetch_assoc($result)){
              if($row['Id']==9)
              {
             echo "<a href='Python.php?id=$row[Id]'>";
             break;
             }}
             echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
              </a>";
            ?>
           </div>
         </div>
        </div>
      </div>
  </div>
  <div class="col-sm-1"></div>
 </div>
 </div>
<div class="container-fluid">
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10"><br>
  <div class="row">
    <div class="col-sm-4"></div>
   <div class="col-sm-4">
     <div class="box1" id="django">
      <div class="image">
        <img src="images\django.png" alt="sorry" class="image_check">
      </div>
      <div class="text2">
       <p class="free">Free Course</p>
       <article>
       <h6>Django Tutorials</h6><br>
       </article>
       <?php
       while($row = mysqli_fetch_assoc($result)){
         if($row['Id']==10)
         {
        echo "<a href='Python.php?id=$row[Id]'>";
        break;
        }}
        echo "<button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
         </a>";
       ?>
      </div>
    </div>
    </div>
       <div class="col-sm-4"></div>
  </div>
  <div class="col-sm-1"></div>
 </div>

 </div>

</div>

 </div>
</div></div>
</div>
 <div class="container-fluid">
   <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
       <h2 id="Courses">Recommended Courses</h2>
    </div>
    <div class="col-sm-3"></div>
    </div>
   <div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-10">
       <div class="row">
        <div class="col-sm-4">
          <div class="box2">
           <div class="image">
             <img src="images\python_logo.png" alt="sorry" class="image_check">
           </div>
           <div class="text2">
            <p class="free">Free Course</p>
            <a href='Python.php?id=1'><button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
           </div>
         </div>
         </div>
          <div class="col-sm-4">
            <div class="box2">
             <div class="image">
               <img src="images\django.png" alt="sorry" class="image_check">
             </div>
             <div class="text2">
              <p class="free">Free Course</p>
              <a href='Python.php?id=10'><button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
             </div>
           </div>
          </div>
           <div class="col-sm-4">
             <div class="box2">
              <div class="image">
                <img src="images\java_logo.png" alt="sorry" class="image_check">
              </div>
              <div class="text2">
               <p class="free">Free Course</p>
              <a href='Python.php?id=4'><button class='btn btn-primary btn-block buttons' type='submit'>StartWatching</button>
                 </a>
              </div>
            </div>
           </div>

       </div>
       <div class="col-sm-1"></div>
    </div>
     </div>
     <div class="col-sm-1"></div>
 </div><br><br>
 <div class="container-fluid" id="footer">
   <div class="row">
     copyrigths@2022 codewithjava
   </div>
 </div>
</html>
