<?php
include ('connection.php');
session_start();
if(isset($_POST['submit'])){
    $email =$_POST['useremail'];
    $pass =$_POST['userpass'];
    $query="SELECT * FROM login WHERE Email = '$email' AND Password = md5('$pass')";
    $result=mysqli_query($connection ,$query)or die("Unable to Insert Data");
    $row = mysqli_fetch_assoc($result);
      if(is_array($row)){
          $email2 = $row['Email'];
         $_SESSION['name'] = $email2;
         $_SESSION['id'] = $row['Id'];
          if(isset($_SESSION['name'])){
              header('Location:home.php');
          }
          else{
            header("Location:Index.php");
          }
      }
      else
      {
         header("Location:Index.php");

      }
  }
else{?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
  </head>
  <body id="background" >
 <div class="container-fluid">
   <div class="row" id="row">
   <div class="col-sm-6" id="col1">
     <div class="row">
       <div class="col-sm-1"></div>
        <div class="col-sm-10">
         <div class="box1">
           <h2 id="h2">Welcome to CodeWithJava</h2>
           <p id="text1">Confused on which course to take? I have got you covered.
            Browse courses and find out the best course for you. Its free! Code With Java is my attempt to teach basics and those coding techniques to people in short time which took me ages to learn.</p>
         </div>
        </div>
         <div class="col-sm-1"></div>
     </div>
   </div>
   <div class="col-sm-6" >
 <div class="row">
   <div class="col-sm-2"></div>
   <div class="col-sm-8"id="mood"  >
     <form class="from1" action="" method="post" >
       <div class="text-center">
           <img src="images\logo2.png" alt="logo" id="logo" height="100%" width="100%">
      </div>
        <p id="account">Please login to your account</p>
        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="useremail"
              placeholder="Enter your Email address" required/>
          </div>
          <div class="form-outline mb-4">
             <input type="password" id="password" class="form-control" name="userpass"  placeholder="Enter your Password" required/>
           </div>
           <div>
             <button class="btn btn-primary btn-block" name="submit"type="submit">GET STARTED</button> <br> <br>
             <!--<a href="#!"><p id="text3">Forgot password?</p></a>-->
           </div>

     </form>
     <form class="" action="login.php" method="post">
       <div class="row">
         <div class="col-sm-6">
         <p class="text2">Don't have an account?</p>
         </div>
         <div class="col-sm-6">
            <button type="submit" class="btn btn-outline-danger text-center" id="button">Create New</button>
         </div>
      </div>
     </form>

   </div>
   <div class="col-sm-2"></div>
 </div>
 </div>
</div><br><br><br><br><br>
<div class="row" id=footer>
 <p id="text4">copyright@2022 CodeWithJava</p>
</div>
</div>

  </body>
</html>
<?php }  ?>
