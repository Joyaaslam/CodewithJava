<?php
include ('connection.php');
session_start();
$user=$_SESSION['id'];
$query = "SELECT * FROM Assessment";
$result = mysqli_query($connection , $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Codewithjava</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css\assessment.css">
  <script type="text/javascript" src="javascript\assessment.js"></script>
  <script type="text/javascript" src="javascript\e_change.js"></script>
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
  <body id="abody">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="navbar-brand" id="mylogo">
          <h4 class="text1">codewithjava</h4>
       </div>
       <div class="collapse navbar-collapse navbar-default" id="mynavbar">
         <ul class="navbar-nav">
         <li class="text1 nav-items"><a class="nav-link" href="home.php">Home</a></li>
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
           <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="favourite.php">Favourite</a></li>
           <li class="text1  nav-items"><a style="color:white;"  class="nav-link" href="#"><?php echo $_SESSION['name'] ?> </a></li>
         </ul>
         </div>
       </div>
       <div class="col-sm-4"></div>

     </div>
   </div>
   <div class="container-fluid">
     <h3>Get Your Skills Certified</h3>
     <div class="row" id="row1">
      <div class="col-sm-4">
       <div class="box1">
         <h4>Stand out from the crowd</h4>
         <p>Get certified in technical skills by taking the Codewithjava Skills Certification Test</p>
       </div>
      </div>
      <div class="col-sm-4">
        <div class="box1">
          <h4>Standardised Assessment</h4>
          <p>Assessments are organised around specific skills and are carefully curated based on years of recruiting data from 2000+ companies</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box1">
          <h4>Enrich your profile</h4>
          <p>Upon successfully clearing an assessment, you can promote yourself using the Codewithjava certificate to peers and employers</p>
        </div>
      </div>
     </div>
   </div>
   <br><br>
   <div class="container-fluid">
    <a href="favourite.php">  <h3>Your Favourite Topics</h3></a>
     <div class="row" style="background-color:black; opacity:.8;">
       <div class="col-sm-1"> </div>
       <div class="col-sm-10">
        <div class="row">
        <div id="empty_box">
        </div>
        </div>
        </div>
       <div class="col-sm-1"> </div>
     </div>
   </div> <br><br><br>

   <div class="container-fluid" id="second_backgroud"><br><br><br>
      <h3>Get Your Skills Certified</h3>
     <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>C++</h1>
               <p class="details" style="color:black;">C++ is a programming language</p>
               <a href="learn_CSS.php?id=7"><button type="button" name="button" class="buttons">LearnC++</button> </a>
                <a href="insert.php?name=C"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>PYTHON</h1>
               <p class="details" style="color:black;">Python is a programming language</p>
               <a href="learn_CSS.php?id=4"><button type="button" name="button" class="buttons">LearnPython</button> </a>
              <a href="insert.php?name=python"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
              </div>
         </div>
       </div>
       </div>
       <div class="col-sm-1"></div>
     </div>
     <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>JAVA</h1>
               <p class="details" style="color:black;">Object-oriented programming language</p>
                <a href="learn_CSS.php?id=5"><button type="button" name="button" class="buttons">LearnPJAVA</button> </a>
                    <a href="insert.php?name=java"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>DJANGO </h1>
               <p class="details" style="color:black;">Django is a Python-based web framework</p>
                <a href="learn_CSS.php?id=6"><button type="button" name="button" class="buttons">LearnDjango</button> </a>
                <a href="insert.php?name=django"><button type="submit" name="Django" class="buttons">AddToFavourite</button> </a>
              </div>
         </div>
       </div>
       </div>
       <div class="col-sm-1"></div>
     </div>
     <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>PHP</h1>
               <p class="details" style="color:black;">PHP is a scripting language</p>
              <a href="learn_CSS.php?id=8"><button type="button" name="button" class="buttons">LearnPHP</button> </a>
                  <a href="insert.php?name=php"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
              </div>
           </div>
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>HTML</h1>
               <p class="details" style="color:black;">HTML is HyperText Markup Language</p>
                <a href="learn_CSS.php?id=9"><button type="button" name="button" class="buttons">LearnHTML</button> </a>
                  <a href="insert.php?name=html"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
              </div>
         </div>
       </div>
       </div>
       <div class="col-sm-1"></div>
     </div>
     <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>JAVASCRIPT</h1>
               <p class="details" style="color:black;">WEB programming Language</p>
                <a href="learn_CSS.php?id=10"><button type="button" name="button" class="buttons">LearnJavaScript</button> </a>
                  <a href="insert.php?name=javascript"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>CSS</h1>
               <p class="details" style="color:black;">The language for styling web pages</p>
                   <a href="learn_CSS.php?id=3"><button type="button" name="button" class="buttons">LearnCSS</button> </a>
                    <a href="insert.php?name=Css"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
             </div>
         </div>
       </div>
       </div>
       <div class="col-sm-1"></div>
     </div>
     <div class="row">
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
         <div class="row">
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>BOOTSTRAP</h1>
               <p class="details" style="color:black;">Bootstrap  open-source CSS framework</p>
                <a href='learn_CSS.php?id=2'><button type='button' name='button' class='buttons'>learn BOOTSTRAP</button> </a>
                   <a href="insert.php?name=boot"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
              </div>
           </div>
           <div class="col-sm-6">
             <div class="box1" style="background-color:#D9EEE1;">
               <h1>C#</h1>
               <p class="details" style="color:black;">C# is a programming language</p>
               <?php
               while($row = mysqli_fetch_assoc($result)){
                 if($row['Id']==1)
                 {
                   echo "<a href='learn_CSS.php?id=$row[Id]'>";

                   break;
                 }
               } echo "<button type='button' name='button' class='buttons'>learnC#</button> </a>";
                ?>
                  <a href="insert.php?name=Cs"><button type="submit" name="C" class="buttons">AddToFavourite</button> </a>
             </div>
         </div>
       </div>
       </div>
       <div class="col-sm-1"></div>
     </div><br><br>
   </div>

<div class="row" id="footer">
    <p id="text2">copyrights@2022 codewithjava</p>
</div>
  </body>
</html>
