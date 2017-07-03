<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$year=date('Y');
$tab=($year-2017)+1;
$prefix="student";
$tabname="$prefix $year";
$points="points";
$tablename="$points $year";

$con=0;
/*
$dyear=$_GET["dyear"];

if($year != $dyear);
$tablename="$points $dyear";
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);
  }

if($username=="admin" && $password=="admin"){
  echo "You are logged in";
  $query="SELECT * FROM `$tablename` WHERE 1";
  
  
  $result = $connect->query($query);
/*
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}*/
  
  
   
//$res = mysqli_query($connect, $query);

/*
if(mysqli_num_rows($res)>0){
     while($row=  mysqli_fetch_assoc($result)){
        print_r($row);
        
      }
   }
*/

/*if(mysql_num_rows($result2)) {
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
		while($row2 = mysql_fetch_row($result2)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table><br />';


*/



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<table border="2" cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Reg no&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Department&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Financial&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Scholarship&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>No_of_arrears&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Performance&nbsp&nbsp&nbsp&nbsp&nbsp</th>&nbsp&nbsp&nbsp<th>Attendance&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Conduct&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>Total&nbsp&nbsp&nbsp&nbsp&nbsp</th></tr>';
		
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name " . $row["name"]. " - regno: " . $row["regno"]. " " . $row["total"]. "<br>";
       // echo "<tr><td>    ". $row["name"]. "</td><td>    " . $row["regno"]. "</td><td>    " . $row["total"]. "</td></tr><br>";
        
        // echo "$row['name']     $row['regno']     $row['total']<br>";
        echo '<tr>';
			foreach($row as $key=>$value) {
				echo '<td>',$value,'&nbsp&nbsp&nbsp&nbsp&nbsp</td>';
			}
			echo '</tr>';
        
    }
} else {
    echo "0 results";
} 

  echo "<br><a href='admin_login.php'>Logout</a>";
  
}
else{
  
  echo "Your Username or password is wrong";
  
   echo "<br><a href='admin_login.php'> Login</a>";

}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
<body bgcolor="Cornsilk">
<br><br>
<form method="get">
  <b> Select the Year :  </b>
 <select name="dyear" required="required">
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
</select>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<input type="submit" formaction="/tce_alumni/admin_year.php" value="Submit">

<center>
<center><h1 style='color:blue'>Current year statistics</h1></center>
<br><br>
</form>
</body>
</html>
