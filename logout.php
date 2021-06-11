<?php
session_start();

if(isset($_SESSION['username']))
{
	
	echo "<script>
		{
			alert('Logout Successfully');location.href='index.php';
		}
	</script>";
	session_destroy();

}
else
{
	echo "<script>location.href='login.php'</script>";
}
?>