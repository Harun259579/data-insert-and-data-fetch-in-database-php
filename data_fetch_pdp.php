<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=course_management','root','');
	$statement =$pdo->query("select * from students");
	$row = $statement->fetch(PDO::FETCH_ASSOC);
	echo"<pre>";
print_r($row);
echo"</pre>";
echo "<br>";

if ($statement->rowCount() > 0) {
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
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
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

}
catch(PDOException $e)
{
	echo "Error Estblishing dtbase connection:".$e->getMessage()."<br>";
}




?>