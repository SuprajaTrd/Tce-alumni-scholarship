<?php
require 'connect.php';
$year=date('Y');
$tab=($year-2017)+1;
$prefix="student";
$tabname="$prefix $year";

$val = mysqli_query($conn,'SELECT * FROM information_schema WHERE TABLE_NAME = "$tabname" ');
$count = count($val);
if($count==0 && $tab>=1)
{
  require 'Table.php';
  $tab=0;
}


	$tab=0;
	$stuname=$_GET["stuname"];
	$regno=$_GET["regno"];
	$semester=$_GET["semester"];
	$degree=$_GET["degree"];
	$branch=$_GET["branch"];
	$category=$_GET["category"];
	$parent=$_GET["parent"];
	$fname=$_GET["fname"];
	$foccup=$_GET["foccup"];
	$fincome=$_GET["fincome"];
	$mname=$_GET["mname"];
	$moccup=$_GET["moccup"];
	$mincome=$_GET["mincome"];
	$sslc=$_GET["sslc"];
	$hsc=$_GET["hsc"];
	$cutoff=$_GET["cutoff"];
	$cgpa=$_GET["cgpa"];
	$no_arr=$_GET["no_arr"];
	$att=$_GET["att"];
	$bank_loan=$_GET["bank_loan"];
	$scholarship=$_GET["scholarship"];
	$lamt=$_GET["lamt"];
	$bankname=$_GET["bankname"];
	$brono=$_GET["brono"];
	$brooccup=$_GET["brooccup"];
	$sisno=$_GET["sisno"];
	$sisoccup=$_GET["sisoccup"];
//	$graduate=$_GET["graduate"];
    if (isset($_GET['graduate'])) {
    $graduate = $_GET['graduate'];
}else{
	$graduate='0';
}
	$address=$_GET["address"];
	$mobile=$_GET["mobile"];

//$sql="INSERT INTO '$tabname' (`name`, `regno`, `semester`) VALUES ('$stuname','$regno','1')";
//$sql="INSERT INTO '$tabname' (`name`, `regno`, `semester`, `degree`, `branch`, `adm_category`, `parent`, `father_name`, `father_occupation`, `father_income`, `mother_name`, `mother_occupation`, `mother_income`, `percent_sslc`, `percent_hsc`, `cut_off_hsc`, `cgpa`, `no_of_arr`, `att_percent`, `bank_loan`, `scholarship`, `loan_amt`, `bank_name`, `no_bro`, `bro_occupation`, `no_sis`, `sis_occupation`, `first_graduate`, `address`, `mobile`, `reg_date`) VALUES ('$stuname', '$regno', '$semester','$degree','$branch','$category','$parent','$fname','$foccup','$fincome','$mname','$moccup','$mincome','$sslc','$hsc','$cutoff','$cgpa','$no_arr','$att','$bank_loan','$scholarship','$brono','$brooccup','$sisno','$sisoccup','$lamt','$bankname','$graduate',$address,$mobile,CURRENT_TIMESTAMP)" or die(mysqli_error($conn));
//$result = $conn->query($sql);
/*echo $result;
$result=mysqli_query($conn, $sql);	
$demo=mysqli_query($conn, "Select * FROM student 2017");
echo $demo;*/
$query = "INSERT INTO 'Student'.`student 2017` (`name`, `regno`, `semester`, `degree`, `branch`, `adm_category`, `parent`) VALUES ('$stuname', '$regno','$semester','$degree','$branch','$category','$parent')";//,'$fname')";

if(mysqli_query($conn, $query)){
	echo "record added";
}else{
	echo "Error $query".mysqli_error($conn);
}
echo "Your application is submitted";
?>

