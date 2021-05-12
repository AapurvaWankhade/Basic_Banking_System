
<?php 

$con=new mysqli("localhost","root","","bank_sys");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>