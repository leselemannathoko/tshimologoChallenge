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


	    echo "".$row["preference"]."<br>";
		$id= $row["id"];
        
   }
   
                if ($retval) 
                { 
                      // it return number of rows in the table. 
                     $row = mysql_num_rows($retval); 
          
                        if ($row) 
                           { 
                            printf("Total number of surveys completed : " . $row); 
							echo"<br>";
                           } 
                     // close the result. 
                  mysql_free_result($retval); 
                } 
				
				
				$Avg = mysql_query('SELECT AVG(Age) AS avarage FROM checkbox');
				        if ($Avg) 
                            { 
					            $row = mysql_fetch_assoc($Avg); 
                                echo "Average age:".$row["avarage"]."<br>";
							}
							
				$Max = mysql_query('SELECT Max(Age) AS Oldest FROM checkbox');
				        if ($Avg) 
                            { 
					            $row = mysql_fetch_assoc($Max); 
                                echo "Oldest person who participated in survey:".$row["Oldest"]."<br>";
							}	
                   
                 $small = mysql_query('SELECT Min(Age) AS Youngest FROM checkbox');
				        if ( $small) 
                            { 
					            $row = mysql_fetch_assoc( $small); 
                                echo "Youngest person who participated in survey:".$row["Youngest"]."<br>";
							}				   
                         echo "<br>";
						  echo "<br>";
						   echo "<br>";
						   
				 
 mysql_close($conn);
?>