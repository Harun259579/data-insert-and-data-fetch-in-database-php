<?php
//oop method

$mysqli = new mysqli("localhost","root","","course_management");//here $mysqli is connection string first a ata banaiya nite hoy.


//connection error handle
if($mysqli->connect_errno)
{
	echo "Failed to connect server:(".$mysqli->connect_errno.")".$mysqli->connect_error;
}
else 
{
    echo "Database connection successful!";
}
echo "<br>";


//dATA fetch
$result = $mysqli->query("select * from students");
$row = $result->fetch_assoc();

/*echo ($row['name'])."<br>";
echo ($row['email']);*/
echo"<pre>";
print_r($row);
echo"</pre>";
echo "<br>";


//all data showing
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<caption>"."<h1> Students Informations</h1>"."</caption>";
    echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Adress</th>
    </tr>";

    // Loop through all rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
         echo "<td>".$row['phone']."</td>";
          echo "<td>".$row['address']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}
?> 