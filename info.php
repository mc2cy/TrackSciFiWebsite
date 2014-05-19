<html>
	<body>

    
	Hello <?php echo $_POST["name"]; ?>, <br>
	<?php
	if($_POST["sex"] == "male"){
    echo "You are one interesting guy!";
    }
    else {
    	echo "You are one interesting lady! "; 
    }
    ?>
    <br>
	<?php

	if(empty($_POST["tvseries"])){
    echo "You should watch one of these Sci-Fi series they are fun!";
    
    }
    else {
    	echo "You have watched one of these Sci-Fi series you are cool! <br>"; 
        echo "Your favorite Sci-Fi series is ";
        echo $_POST["favseries"] ;
        echo" interesting...";
    }

    $db_host = 'stardock.cs.virginia.edu';
    $db_username = 'cs4720mc2cy';
    $db_pass = 'elchino419';
    $db_name = 'cs4720mc2cy';
    

     $db_connection = new mysqli($db_host, $db_username, $db_pass, $db_name);
  
    if (mysqli_connect_errno()) {
            echo "Connection failed!";
        }
        //using INSERT command to add information to database
        $sql_insert="INSERT INTO information (Name, Gender, FavoriteSeries) VALUES
        ('$_POST[name]','$_POST[gender]','$_POST[favseries]')";

        if (!mysqli_query($db_connection,$sql_insert))
          {
          die('Error: ' . mysqli_error($db_connection));
          }
        echo "<br>Thank you! Your information has been recorded!";
        
        //using SELECT command for printing information
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

        mysqli_query($db_connection, "UPDATE votes SET Votes= Votes + 1 WHERE Series='$_POST[favseries]'" );


        mysqli_close($db_connection);

    ?>
    
    
	</body>
</html>