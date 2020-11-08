<?php
$url='127.0.0.1';
$username = "root";
$password = "";
$dbname = "test";
$checkbox1 = $_POST['Food'];

$surname=$_POST['Surname'];  
$firstnames=$_POST['Firstnames'];  
$contactname=$_POST['Contactname']; 
$date = date('Y-m-d',strtotime($_POST['Date']));
$age=$_POST['Age']; 
$preference = $_POST['Option']; 



    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

                   $sqlp = "INSERT INTO checkbox(Food,Surname,Firstnames,Contactname, date,
                                                 Age,preference)
												 VALUES
												 ( '$chk',
												 '$surname',
												 '$firstnames',
												 '$contactname',
												 '$date',
												 '$age','$preference')";


                   if(mysqli_query($conn,$sqlp)) {

  
                    header("Location: calculations.php"); 
                     exit();
                   } 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>