<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$points="points";
$tablename="$points $year";
$con=5;
echo $con;
echo $tot_points;

$query2="UPDATE `$tablename` SET `dept`='$branch',`conduct`='$con',`total`='$tot_points' WHERE `regno`='$regno'";

if(mysqli_query($connect, $query2)){
	echo "updated";
}else{
	echo "Error $query2".mysqli_error($connect);
}

mysqli_close($connect);
?>



