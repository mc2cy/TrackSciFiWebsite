<?php
function info($recent) {
  
  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720mc2cy', 'elchino419', 'cs4720mc2cy');
  if (mysqli_connect_errno()) {
      echo "Failed connection!";
  }
  
  //echo "Connection made!";
  
  $stmt = $db_connection->stmt_init();
  if($stmt->prepare("select Series, Season from recentseries")) {
      $stmt->bind_param("s", $vote);
      $stmt->execute();
      $stmt->bind_result($Series, $Season);
      echo "<table border=1>";
      echo "<tr><th>Series </th><th>Season</th></tr>";
      while($stmt->fetch()) {
          echo "<tr>";
          echo("<td>" . $Series . "</td>\n");
          echo("<td>" . $Season . "</td>\n");

          echo "</tr>";
      }
      echo "</table>";  
      
  }
}
  
$user= $_GET["recent"];
  
info($recent);
  
?>