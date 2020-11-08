<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: grey;
  color: white;
}
</style>
</head>

<body>



<form method="post" action="process.php">
<label><b>Take our Survey</b></label>
<br>
<br>
<label><b>Personal Details:</b></label>
<br>
<br>
<label>Surname :</label>
<input type="textbox" name="Surname" value="" required/>
<br>
<br>
<br>
<label>Firstnames :</label>
<input type="textbox" name="Firstnames" value="" required/>
<br>
<br>
<br>
<label>Contactname :</label>
<input type="textbox" name="Contactname" value="" required/>
<br>
<br>
<br>
<label>Date :</label>
<input type="date" name="Date" id="datep" required/>
<br>
<br>
<br>
<label>Age :</label>
<input type="textbox" name="Age" value="" required/>
<br>
<br>
<br>


<input type="checkbox" name="Food[]" value="Pizza">Pizza
<br>
<input type="checkbox" name="Food[]" value="Pasta">Pasta
<br>
<input type="checkbox" name="Food[]" value="Pap-and-Wors">Pap and Wors
<br>
<input type="checkbox" name="Food[]" value="Chicken-stir-fry">Chicken stir fry
<br>
<input type="checkbox" name="Food[]" value="Beef-stir-fry">Beef stir fry
<br>
<input type="checkbox" name="Food[]" value="Other">other
<br><br>

<?php
$conn = mysql_connect('127.0.0.1', 'root', '', 'test')
or
    die("Connection failed: " . mysqli_error());
 $db_selected = mysql_select_db('test',$conn);
if (!$db_selected) {
    die ('Can\'t use gharghar_gharastee : ' . mysql_error());
}

$retval = mysql_query('SELECT * FROM preferences');
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	
?>


	

<table id="t01">
  <tr>
  <th></th>
    <th>Strongly Agree</th>
    <th>Agree(2)</th> 
    <th>Neutral(3)</th>
	<th>Disagree(4)</th>
	<th>Strongly disagree(5)</th>
  </tr>
  <tr>
    <td><?php echo $row['preference'];?></td>
    <td><input type="radio" name="Option" value="Strongly-Agree"/></td>
    <td><input type="radio" name="Option" value="Agree"/></td>
	<td><input type="radio" name="Option" value="Neutral"/></td>
    <td><input type="radio" name="Option" value="Disagree"/></td>
	 <td><input type="radio" name="Option" value="Strongly-disagree"/></td>
  </tr>

</table>
<?php 
	}?>
<input type="submit" value="Submit">
</form> 

<br>
<br>


</body>
</html>