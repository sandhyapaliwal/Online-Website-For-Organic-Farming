<?php  
$con = mysqli_connect('localhost','root');

if($con){ 
  echo "Connection successful"; 
}else {  
  echo "No connection";
}  

mysqli_select_db($con, 'youtubewebsite'); 

$buyer = $_POST['buyer']; 
$email = $_POST['email'];
$mobile = $_POST['mobile']; 
$buy = $_POST['buy']; 

$query = "insert into buyerinfo (buyer, email, mobile, buy)
values ('$buyer','$email','$mobile','$buy')"; 

mysqli_query($con,$query ); 

header('location:index.php');
?>