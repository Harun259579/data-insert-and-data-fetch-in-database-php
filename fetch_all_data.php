<?php
//oop method
mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = new mysqli("localhost","root","","course_management");//here $mysqli is connection string first a ata banaiya nite hoy.


//connection error handle
if($mysqli->connect_errno)
{
	echo "Failed to connect server:(".$mysqli->connect_errno.")".$mysqli->connect_error;
	exit;
}

$sql = "SELECT name,email,phone,address FROM students";

if($result = $mysqli->prepare($sql))
{
	$result->execute();
	$result->bind_result($name,$email,$phone,$address);

	//table create..............................................
	echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<caption>"."<h1> Students Informations</h1>"."</caption>";
    echo "<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Adress</th>
    </tr>";
	while($result->fetch())
	{
		echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$phone."</td>";
        echo "<td>".$address."</td>";
        echo "</tr>";
		//echo "$name , $email , $phone , $address <br><br>";
	} 
	 echo "</table>";
	$result->close();
}
else
{
	echo " Occured Error:".$mysqli->error;
}
$mysqli->close();

?>