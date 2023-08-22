<?php
include ('connection.php');
session_start();
$new_id=$_GET['id'];
$query1 = "SELECT * FROM Tutorials where Id='$new_id'";
$result1 = mysqli_query($connection , $query1);
$query_video="SELECT * FROM videos WHERE C_id='$new_id'";
$result_video=mysqli_query($connection,$query_video);
$links = [];
  while($row1=mysqli_fetch_assoc($result_video)){
       array_push($links , $row1["Link"]);
      //  echo $row1["Link"]."<br>";
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css\vedio.css">
  <!--<script src="javascript\video.js"></script>-->
  <script>
        window.addEventListener("load" , function () {
          let video=document.getElementById('video');
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
        let links = <?php echo json_encode($links); ?>;
        console.log(links[0]);
        function Lecture(index)
        {
          console.log(index);
          if(index==0)
          {
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==1){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==2){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==3){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==4){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==5){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==6){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==7){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==8){
            video.src=links[index];
            console.log(links[index]);
          }
          else if(index==9){
            video.src=links[index];
            console.log(links[index]);
          }
        }

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

<br><br>
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-6">
       <div class="row">
         <?php while($row=mysqli_fetch_assoc($result1)){
           echo "<h1 id='text1'>".$row['Heading']." Tutorials</h1>";
          ?>
       </div>
     </div>
     <div class="col-sm-3"></div>
   </div>
 </div><br><br><br>
 <div class="container-fluid">
   <div class="row">
     <div class="col-sm-1"></div>
     <div class="col-sm-5">
       <div class="row">
         <div class="col-sm-12">
           <div class="box1">
             <iframe allowfullscreen="0" width="100%" height="130%" id="video"
              src="https://www.youtube.com/embed/xi0FP37j9eU">
             </iframe>
           </div>
         </div>
       </div>
       <div class="row">
         <article class="article">
           <?php  echo "<h4>Why Learn ".$row['Heading']."?</h4>";
                  echo " <p>".$row['Topic']."</h4>";
           ?>
           <h4>Take-Away Skills</h4>
           <?php
           echo "<p>".$row['Topic_description']."</p>";   ?>
         </article>

       </div>
     </div>

     <div class="col-sm-5" style="background-color:	#8FBC8F; opacity:.8;">
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(0)"><?php echo $row['Heading'] ?>:Lecture #01</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(1)" ><?php echo $row['Heading'] ?>:Lecture #02</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(2)"><?php echo $row['Heading'] ?>:Lecture #03</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(3)"><?php echo $row['Heading'] ?>:Lecture #04</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(4)"><?php echo $row['Heading'] ?>:Lecture #05</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(5)"><?php echo $row['Heading'] ?>:Lecture #06</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(6)"><?php echo $row['Heading'] ?>:Lecture #07</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(7)"><?php echo $row['Heading'] ?>:Lecture #08</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(8)"><?php echo $row['Heading'] ?>:Lecture #09</h4>
    </div>
    <div class="box2" >
    <h4 class="lecture" onclick="Lecture(9)"><?php echo $row['Heading'] ?>:Lecture #10</h4>
    </div
     </div>
     <div class="col-sm-1"></div>
   </div>
 </div>
 <div class="row" id="footer">
     <p id="text2">copyrights@2022 codewithjava</p>
 </div>
</body>
</html>
<?php } ?>
