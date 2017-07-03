<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$points="points";
$dyear=$_GET["dyear"];

$tablename="$points $dyear";

  $query="SELECT * FROM `$tablename` WHERE 1";
  
  
  $result = $connect->query($query);






if(mysqli_query($connect, $query)){

   
  //$query="SELECT * FROM `$tablename` WHERE 1";
  
  
 // $result = $connect->query($query);

echo "<center><h1 style='color:blue'>$dyear year statistics</h1></center>";

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

}else{
  echo "Still table '$tablename' not yet created";
}



?>
<html>
<body bgcolor="Cornsilk">

</body>
</html>
