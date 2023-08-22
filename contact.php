<?php
include ('connection.php');
session_start();
$user= $_SESSION['id'];
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
  if(strlen($phone)==11)
  {
  $query = "INSERT INTO contact( Name, Email, Phone,Message,User_id) VALUES ('$name','$email','$phone','$message','$user')";
  $result = mysqli_query($connection , $query);
  if(!empty($result))
  {
    header("Location:contact.php");

  }
  else {
    echo "not inserted";
  }}
  else{
    header('Location:contact.php');
  }
}
else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Codewithjava</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css\contact.css">
  <script type="text/javascript" src="javascript\contact.js"></script>
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
  <body id="change_me">
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
   <div class="container-fluid" >
     <div class="row" >
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
        <div class="row" id="backgound">
        <div class="col-sm-6">
          <div class="box1">
            <h2>Lets talk about everything!</h2>
             <img src="images\java_logo.png" alt="" >
            <h5>Feel free to ask us anything!</h5>
            <p>Have doubt or suggestion to make? Feel free to ask anything. If you have any suggestions, please let me know. Your suggestions are highly appreciated. I appreciate your time and try hard to reply to every single message posted here! Keep dropping your priceless opinions.</p>
          </div>
        </div>
        <div class="col-sm-6">
         <div class="box2"><br> <br><br>
           <form class="from1" action="#" method="post" id="myform">
              <div class="form-outline mb-4">
                <p style="  font-weight: bold;">FULL NAME</p>
                  <input type="text" id="email" class="form-control" name="name"
                    placeholder="Enter your Full name" required/>
                </div>
                <div class="form-outline mb-4">
                    <p style="  font-weight: bold;">EMAIL</p>
                   <input type="email" id="email" class="form-control" name="email"  placeholder="Enter your Email" required/>
                 </div>
                 <div class="form-outline mb-4">
                     <p style="  font-weight: bold;">Phone</p>
                    <input type="phone" id="phone" class="form-control" name="phone" placeholder="Enter your phone number" required/>
                  </div>
                 <div class="form-outline mb-4">
                  <textarea style="  max-width: 100%;" name="message" rows="8" cols="40" required></textarea>
                  </div>
                 <div>
                   <button class="btn btn-primary btn-block" type="submit" name="submit">Send Message</button>
                 </div>
                 <br><br>
           </form>
         </div>

        </div>
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
<?php } ?>
