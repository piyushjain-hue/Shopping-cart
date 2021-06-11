<?php

$con = mysqli_connect('localhost','root');


//if($con){
//	echo "Connection succesful";
//}
//else{
//	echo "No connection";
//}

mysqli_select_db($con,'fsdata');

$user = $_POST['user'];
$emailid = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$amount = $_POST['amount'];
$t_id= $_POST['t_id'];

$uname=$_SESSION['username'];
$id = $_SESSION['id'];

$query = "insert into userinfodata (user,email,mobile,t_id,amount,comment) values('$user','$emailid','$mobile','$t_id','$amount','$comment')";

mysqli_query($con,$query);
echo "<script>
		{
			alert('Good job!. details sent successful..');window.location='welcome.php';
		}
		</script>";
header('location:index.php');
?>