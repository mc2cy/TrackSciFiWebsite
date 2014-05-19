<?php
function info($username) {
  
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720mc2cy', 'elchino419', 'cs4720mc2cy');
  if (mysqli_connect_errno()) {
      echo "Failed connection!";
  }
  
  //echo "Connection made!";
  
  $stmt = $db_connection->stmt_init();
  if($stmt->prepare("select Name, Gender, FavoriteSeries from information where Name = ? ")) {
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $stmt->bind_result($Name, $Gender, $FavoriteSeries);
      echo "<table border=1>";
      echo "<tr><th>Name </th><th>Gender </th><th>Favorite Series</th></tr>";
      while($stmt->fetch()) {
          echo "<tr>";
          echo("<td>" . $Name . "</td>\n");
          echo("<td>" . $Gender . "</td>\n");
          echo("<td>" . $FavoriteSeries . "</td>\n");

          echo "</tr>";
      }
      echo "</table>";  
      
  }
}
  
$user= $_GET["username"];
  
info($user);
  
?>