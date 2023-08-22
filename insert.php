<?php
include ('connection.php');
session_start();
$user=$_SESSION['id'];
$topic=$_GET['name'];
if($topic=='django')
{
$check="SELECT * FROM `favourite` WHERE Topic='DJANGO'";
$ME=mysqli_query($connection,$check);
$row=mysqli_fetch_assoc($ME);
if(is_array($row))
{
  header("Location:assessment.php");
}
else {
  $q="INSERT INTO favourite(Topic, User_id) VALUES ('DJANGO','$user')";
  $result=mysqli_query($connection,$q);

  header("Location:assessment.php");
}
}
else if($topic=='C')
{
  $check="SELECT * FROM `favourite` WHERE Topic='C++'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('C++','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='python')
{
  $check="SELECT * FROM `favourite` WHERE Topic='PYTHON'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('PYTHON','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='java')
{
  $check="SELECT * FROM `favourite` WHERE Topic='JAVA'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('JAVA','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='php')
{
  $check="SELECT * FROM `favourite` WHERE Topic='PHP'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('PHP','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='html')
{
  $check="SELECT * FROM `favourite` WHERE Topic='HTML'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('HTML','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='javascript')
{
  $check="SELECT * FROM `favourite` WHERE Topic='JAVASCRIPT'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('JAVASCRIPT','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='Css')
{
  $check="SELECT * FROM `favourite` WHERE Topic='CSS'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('CSS','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
else if($topic=='boot')
{
  $check="SELECT * FROM `favourite` WHERE Topic='BOOTSTRAP'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('BOOTSTRAP','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}

else if($topic=='Cs')
{
  $check="SELECT * FROM `favourite` WHERE Topic='C#'";
  $ME=mysqli_query($connection,$check);
  $row=mysqli_fetch_assoc($ME);
  if(is_array($row))
  {
    header("Location:assessment.php");
  }
  else {
    $q="INSERT INTO favourite(Topic, User_id) VALUES ('C#','$user')";
    $result=mysqli_query($connection,$q);

    header("Location:assessment.php");
  }
}
 ?>
