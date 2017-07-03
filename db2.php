<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$year=date('Y');
$points="points";
$tablename="$points $year";
$tab1=($year-2017)+1;

$val1 = mysqli_query($connect,'SELECT * FROM information_schema WHERE TABLE_NAME = "$tablename" ');
$count1 = count($val1);

/*if($count1==0)
{
  require 'Table1.php';
  $tab1=0;
}*/
 
/*$query1="INSERT INTO `$tablename`(`name`, `regno`, `financial`, `scholarship`, `no_of_arrears`, `performance`, `attendance`, `conduct`) VALUES ('rani','15E047','20','5','5','10','5','0')";
*/



$query1 = "INSERT INTO `$tablename` (`name`, `regno`, `financial`, `scholarship`, `no_of_arrears`, `performance`, `attendance`) VALUES ('$stuname', '$regno','$fin','$sch','$arr','$perform','$att_score')";//,'$fname','$foccup','$fincome','$mname','$moccup')";

if(mysqli_query($connect, $query1)){

        echo "Your form submitted successfully.";

    } else{

        echo "ERROR: Could not able to execute $query1. " . mysqli_error($connect);

    }

mysqli_close($connect);

?>








