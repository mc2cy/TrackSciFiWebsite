
<html>
<body>
	Hello <?php echo $_POST["upname"]; ?> !! <br>
	Thank you for updating your information! 

<?php
$db_host = 'stardock.cs.virginia.edu';
    $db_username = 'cs4720mc2cy';
    $db_pass = 'beet';
    $db_name = 'cs4720mc2cy';
    
 
     $db_connection = new mysqli($db_host, $db_username, $db_pass, $db_name);

     //allow user to UPDATE database
mysqli_query($db_connection, "UPDATE information SET FavoriteSeries='$_POST[upfavseries]' WHERE Name='$_POST[upname]' AND Gender='$_POST[upgender]'");

$result = mysqli_query($db_connection,"SELECT * FROM information");

        echo "<table border='1'>
        <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Favorite Series </th>
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['Name'] . "</td>";
          echo "<td>" . $row['Gender'] . "</td>";
          echo "<td>" . $row['FavoriteSeries'] . "</td>";
          echo "</tr>";
          }
        echo "</table>";

mysqli_close($db_connection);




?>


</body>
</html>
