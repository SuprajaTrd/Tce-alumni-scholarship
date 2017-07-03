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




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);
  }

if($username=="tcecse" && $password=="cse_alumni"){
  echo "CSE logged in";
   $query="SELECT * FROM `$tablename` WHERE `dept`='cse'";
  
  
  $result = $connect->query($query);

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

  echo "<br><a href='faculty_login.php'>Logout</a>";

  
}
else if($username=="tceece" && $password=="ece_alumni"){
echo "ECE logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='ece'";
  
  
  $result = $connect->query($query);

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

}
else if($username=="tceeee" && $password=="eee_alumni"){
 echo "EEE logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='eee'";
  
  
  $result = $connect->query($query);

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

}
else if($username=="tceciv" && $password=="civ_alumni"){
 echo "CIVIL logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='civil'";
  
  
  $result = $connect->query($query);

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

}
else if($username=="tcemech" && $password=="mech_alumni"){

echo "MECHANICAL logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='mech'";
  
  
  $result = $connect->query($query);

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

}
else if($username=="tcemect" && $password=="mect_alumni"){

echo "MECHATRONICS logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
 $query="SELECT * FROM `$tablename` WHERE `dept`='mect'";
  
  
  $result = $connect->query($query);

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
}
else if($username=="tceit" && $password=="it_alumni"){
echo "IT logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='it'";
  
  
  $result = $connect->query($query);

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

}
else if($username=="tcearch" && $password=="arch_alumni"){
echo "ARCHITECTURE logged in";
  echo "<br><a href='admin_login.php'>Logout</a>";
$query="SELECT * FROM `$tablename` WHERE `dept`='arch'";
  
  
  $result = $connect->query($query);

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

