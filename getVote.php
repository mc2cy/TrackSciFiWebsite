<?php
function info($vote) {
  
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720mc2cy', 'elchino419', 'cs4720mc2cy');
  if (mysqli_connect_errno()) {
      echo "Failed connection!";
  }
  
  //echo "Connection made!";
  
  $stmt = $db_connection->stmt_init();
  if($stmt->prepare("select Series, Votes from votes")) {
      $stmt->bind_param("s", $vote);
      $stmt->execute();
      $stmt->bind_result($Series, $Votes);
      echo "<table border=1>";
      echo "<tr><th>Series </th><th>Votes</th></tr>";
      while($stmt->fetch()) {
          echo "<tr>";
          echo("<td>" . $Series . "</td>\n");
          echo("<td>" . $Votes . "</td>\n");

          echo "</tr>";
      }
      echo "</table>";  
      
  }
}
  
$user= $_GET["vote"];
  
info($user);
  
?>