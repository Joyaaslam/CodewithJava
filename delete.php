<?php
include ('connection.php');
session_start();
$user=$_SESSION['id'];

$id = $_GET['id'];
$query="DELETE FROM favourite WHERE Id = '$id'";
$res = mysqli_query($connection,$query);
if(!empty($res))
{
  header("Location:favourite.php");
}
else {

}
 ?>
