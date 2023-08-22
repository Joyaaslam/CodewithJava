<?php
include ('connection.php');

if(isset($_POST['submit'])){
    $email =$_POST['useremail'];
    $pass =$_POST['userpass'];
    $cpass=$_POST['cpassword'];
    if($pass==$cpass)
    {
     $check="SELECT * FROM login";

     $check_email=mysqli_query($connection ,$check)or die("Unable to Insert Data");
     try{
         $query="INSERT INTO login( Email,Password) VALUES ('$email' , md5('$pass'))";
         $result = mysqli_query($connection ,$query)or die("Unable to Insert Data");
         header("Location:index.php");

       }
       catch(Exception $e) {
        // echo 'Custom Message &&: ' .$e->getMessage();
        //echo "<script type='text/JavaScript'> alert('Duplicate'); </script>";
        header("Location:login.php");
       }
     // if(!empty($check_email))
     // {
     //   $k=0;
     //    while ($row=mysqli_fetch_assoc($check_email)) {
     //      if($row['Email']==$email)
     //      {
     //        $k=$k+1;
     //        break;
     //        //
     //      }
     //    }
        // if($k!=0)
        // {
        //   //echo "hello world";
        //  // header("Location.login.php");
        //
        //
        // }
        // else{
        //   $query="INSERT INTO login( Email,Password) VALUES ('$email' , md5('$pass'))";
        //   $result = mysqli_query($connection ,$query)or die("Unable to Insert Data");
        //    header("Location:home.php");
        // }
   // }
   // else{

      // header("Location:home.php");
   // }
}
else {
  header('Location:login.php');
}
}
else{
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CodeWithJava</title>
   <link rel="stylesheet" href="css\login.css">
  <!--  <script type="text/javascript" src="javascript\login.js"></script>-->
   <script>
    window.addEventListener("load" , function () {
        let myForm = document.forms.myForm;
        let password=document.getElementById('password');
      let cpassword=document.getElementById('cpassword');
      console.log("joya");
      myForm.addEventListener('submit',function()
      {
       let x=myForm.password.value;
       let y=cpassword.value;
       if (x!=y)
       {
         alert("Password not match");
       }
    })
  });
  </script>
  </head>
  <body  id="background">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

         <h3 id="heading">Start your coding journey!</h3>

        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="mood">
            <form class="from1" action="" method="post" id="myForm">
              <div class="text-center">
                  <img src="images\logo2.png" alt="logo" id="logo" height="100%" width="100%">
             </div>
               <p id="account">Please create your new account</p>
               <div class="form-outline mb-4">
                   <input type="email" id="email" class="form-control" name="useremail"
                     placeholder="Enter your Email address" required/>
                 </div>
                 <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="userpass" placeholder="Enter your Password" required/>
                  </div>
                  <div class="form-outline mb-4">
                     <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Confirm your Password" required/>
                   </div>
                  <div>
                    <button class="btn btn-primary btn-block" name="submit" type="submit">CREATE ACCOUNT</button>
                  </div>
                  <br><br>
            </form>
          </div>
        <div class="col-sm-4"></div></div><br><br>
    </div>
  </body>
</html>
<?php } ?>
