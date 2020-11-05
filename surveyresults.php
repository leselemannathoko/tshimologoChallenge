<?php
$conn = mysql_connect('127.0.0.1', 'root', '', 'test')
or
    die("Connection failed: " . mysqli_error());
 $db_selected = mysql_select_db('test',$conn);
if (!$db_selected) {
    die ('Can\'t use gharghar_gharastee : ' . mysql_error());
}
if(isset($_POST['save'])){
	
	$option=$_POST['press']; 

$sqlp = "INSERT INTO checkbox(preference)VALUES($option)";


if(mysql_query($conn,$sqlp)) {

     header("Location: calculations.php"); 
  exit();
} 
 else {
    echo "Error: " . $sqlp . "<br>" . mysql_error($conn);
  }
}

$retval = mysql_query('SELECT * FROM preferences');
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	 
	  echo ' <table id="t01">
  <tr>
  <th></th>
    <th>Strongly Agree</th>
    <th>Agree(2)</th> 
    <th>Neutral(3)</th>
	<th>Disagree(4)</th>
	<th>Strongly disagree(5)</th>
  </tr>
  <tr>
    <td>';  

	    echo "".$row["preference"]."";
		$id= $row["id"];

 
        
   }
 mysql_close($conn);
?>

	</td><form action="surveyresults.php" method="POST">
    <td><input type="radio" name="press" value="<?php $row['id']; ?>"/></td>
    <td><input type="radio" name="Option" value=""/></td>
	<td><input type="radio" name="Option" value="Neutral"/></td>
    <td><input type="radio" name="Option" value="Disagree"/></td>
	 <td><input type="radio" name="Option" value="Strongly-disagree"/></td>
	 <input type="submit" name="save" value="Submit"/>
	 </form>
  </tr> ';