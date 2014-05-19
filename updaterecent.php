<html>
	<body>
		Series: <?php echo $_POST['series'] ?>  
		<br>
		Has been updated to <?php echo $_POST['recentseries'] ?> !

	</body>
<html>

<?php

$db_host = 'stardock.cs.virginia.edu';
    $db_username = 'cs4720mc2cy';
    $db_pass = 'beet';
    $db_name = 'cs4720mc2cy';
    
 
     $db_connection = new mysqli($db_host, $db_username, $db_pass, $db_name);

     //allow user to UPDATE database
mysqli_query($db_connection, "UPDATE recentseries SET Season='$_POST[recentseries]' WHERE Series='$_POST[series]' ");
mysqli_close($db_connection);


?>

