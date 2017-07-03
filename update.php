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

$query1="UPDATE `$tabname` SET `father_name`='$fname',`father_occupation`='$foccup',`father_income`='$fincome',`mother_name`='$mname',`mother_occupation`='$moccup',`mother_income`='$mincome',`percent_sslc`='$sslc',`percent_hsc`='$hsc',`cut_off_hsc`='$cutoff',`cgpa`='$cgpa',`no_of_arr`='$no_arr',`att_percent`='$att',`bank_loan`='$bank_loan',`scholarship`='$scholarship',`loan_amt`='$lamt',`bank_name`='$bankname',`no_bro`='$brono',`bro_occupation`='$brooccup',`no_sis`='$sisno',`sis_occupation`='$sisoccup',`first_graduate`='$graduate',`address`='$address',`mobile`='$mobile',`reg_date`=CURRENT_TIMESTAMP WHERE regno='$regno'" ;


if(mysqli_query($connect, $query1)){
	echo "Thank You";
}else{
	echo "Error $query1".mysqli_error($connect);
}

mysqli_close($connect);
include 'update1.php';

?>




 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Tce alumni scholarship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
alert("form submitted successfully");
</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=apply.php">

</head>
<body bgcolor="Cornsilk">
<div class="container-fluid">
  <center><h1 style="color:brown">THIAGARAJAR COLLEGE OF ENGINEERING</h1>
  <p><I>-where quality and ethics matters</I></p></center
</div>
</body>
</html>
