<!DOCTYPE html>
<html>
<head>
<style>
.center {
  height: 300px;
  border: 3px solid green; 
}

a {
  background-color: red;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: #555;
}

a:active {
  background-color: black;
}
</style>

<?php
$conn = mysql_connect('127.0.0.1', 'root', '', 'test')
or
    die("Connection failed: " . mysqli_error());
 $db_selected = mysql_select_db('test',$conn);
if (!$db_selected) {
    die ('Can\'t use gharghar_gharastee : ' . mysql_error());
}

$retval = mysql_query('SELECT * FROM checkbox');
   
           
				
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {


        
   }
   
                if ($retval) 
                { 
                      // it return number of rows in the table. 
                     $row = mysql_num_rows($retval); 
          
                        if ($row) 
                           { 
                            printf("<div class='center'><center>Total number of surveys completed : " . $row); 
							echo"<br></center>";
                           } 
                     // close the result. 
                  mysql_free_result($retval); 
                } 
				
				
				$Avg = mysql_query('SELECT AVG(Age) AS avarage FROM checkbox');
				        if ($Avg) 
                            { 
					            $row = mysql_fetch_assoc($Avg); 
                                echo "<center>Average age:".$row["avarage"]."<br></center>";
							}
							
				$Max = mysql_query('SELECT Max(Age) AS Oldest FROM checkbox');
				        if ($Avg) 
                            { 
					            $row = mysql_fetch_assoc($Max); 
                                echo "<center>Oldest person who participated in survey:".$row["Oldest"]."<br></center>";
							}	
                   
                 $small = mysql_query('SELECT Min(Age) AS Youngest FROM checkbox');
				        if ( $small) 
                            { 
					            $row = mysql_fetch_assoc( $small); 
                                echo "<center>Youngest person who participated in survey:".$row["Youngest"]."<br></center></div>";
							}				   
                         echo "<br>";
						  echo "<br>";
						   echo "<br>";
						   
				 
 mysql_close($conn);
?>

<a href="form.php">Home</a><br><br>


</html>