<?php
$host = "127.0.0.1";  
$user = "root";  
$password = '';  
$db_name = "books"; 
$charset = 'utf8mb4_general_ci'; 


$con=mysqli_connect($host, $user, $password, $db_name);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM textbooks");

echo "<table border='1'>
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Author</th>
<th>Edition</th>
<th>Publisher</th>
<th>Date Added</th>
<th>Genre</th>
<th>Summary</th>
<th>Link</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Book ID'] . "</td>";
echo "<td>" . $row['Title'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
echo "<td>" . $row['Edition'] . "</td>";
echo "<td>" . $row['Publisher'] . "</td>";
echo "<td>" . $row['Date Added'] . "</td>";
echo "<td>" . $row['Genre'] . "</td>";
echo "<td>" . $row['Summary'] . "</td>";
echo "<td>" . $row['Link'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>