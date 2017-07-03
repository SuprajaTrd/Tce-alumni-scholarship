<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$year=date('Y');
$tab=($year-2017)+1;
$prefix="student";
$tabname="$prefix $year";



 $sql = "CREATE TABLE IF NOT EXISTS `Student`.`$tabname` ( `name` VARCHAR(20) NOT NULL , `regno` VARCHAR(10) NOT NULL , `semester` INT(2) NOT NULL , `degree` VARCHAR(20) NOT NULL , `branch` VARCHAR(20) NOT NULL , `adm_category` VARCHAR(20) NOT NULL , `parent` VARCHAR(10) NOT NULL , `father_name` VARCHAR(20) NOT NULL , `father_occupation` VARCHAR(30) NOT NULL, `father_income` DOUBLE NOT NULL, `mother_name` VARCHAR(20) NOT NULL , `mother_occupation` VARCHAR(30) NOT NULL, `mother_income` DOUBLE NOT NULL, `percent_sslc` FLOAT NOT NULL , `percent_hsc` FLOAT NOT NULL , `cut_off_hsc` FLOAT NOT NULL , `cgpa` FLOAT NOT NULL , `no_of_arr` INT NOT NULL, `att_percent` FLOAT NOT NULL , `bank_loan` INT NOT NULL , `scholarship` INT NOT NULL , `loan_amt` DOUBLE NOT NULL, `bank_name` VARCHAR(20) NOT NULL, `no_bro` INT NOT NULL , `bro_occupation` VARCHAR(20) NOT NULL, `no_sis` INT NOT NULL , `sis_occupation` VARCHAR(20) NOT NULL, `first_graduate` INT NOT NULL , `address` VARCHAR(50) NOT NULL , `mobile` BIGINT NOT NULL , `reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`regno`(10))) ENGINE = InnoDB;";

if (mysqli_query($connect, $sql)) {
    echo "Table $tabname created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

$val = mysqli_query($connect,'SELECT * FROM information_schema WHERE TABLE_NAME = "$tabname" ');
$count = count($val);
if($count==0 && $tab>=1)
{
  require 'Table.php';
  $tab=0;
}

//include 'Table.php';
$points="points";
$tablename="$points $year";
$tab1=($year-2017)+1;

$val1 = mysqli_query($connect,'SELECT * FROM information_schema WHERE TABLE_NAME = "$tablename" ');
$count1 = count($val1);




$stuname=mysqli_real_escape_string($connect,$_REQUEST['stuname']);
	$regno=mysqli_real_escape_string($connect,$_REQUEST['regno']);
	$semester=mysqli_real_escape_string($connect,$_REQUEST['semester']);
	$degree=mysqli_real_escape_string($connect,$_REQUEST['degree']);
	$branch=mysqli_real_escape_string($connect,$_REQUEST['branch']);
	$category=mysqli_real_escape_string($connect,$_REQUEST['category']);
	$parent=mysqli_real_escape_string($connect,$_REQUEST['parent']);
	$fname=mysqli_real_escape_string($connect,$_REQUEST['fname']);
        $foccup=mysqli_real_escape_string($connect,$_REQUEST['foccup']);
        $fincome=mysqli_real_escape_string($connect,$_REQUEST['fincome']);
        $mname=mysqli_real_escape_string($connect,$_REQUEST['mname']);
        $moccup=mysqli_real_escape_string($connect,$_REQUEST['moccup']);
$mincome=mysqli_real_escape_string($connect,$_REQUEST['mincome']);
	$sslc=mysqli_real_escape_string($connect,$_REQUEST['sslc']);
	$hsc=mysqli_real_escape_string($connect,$_REQUEST['hsc']);
	$cutoff=mysqli_real_escape_string($connect,$_REQUEST['cutoff']);
	$cgpa=mysqli_real_escape_string($connect,$_REQUEST['cgpa']);
	$no_arr=mysqli_real_escape_string($connect,$_REQUEST['no_arr']);
	$att=mysqli_real_escape_string($connect,$_REQUEST['att']);
	$bank_loan=mysqli_real_escape_string($connect,$_REQUEST['bank_loan']);
	$scholarship=mysqli_real_escape_string($connect,$_REQUEST['scholarship']);
	$lamt=mysqli_real_escape_string($connect,$_REQUEST['lamt']);
	$bankname=mysqli_real_escape_string($connect,$_REQUEST['bankname']);
	$brono=mysqli_real_escape_string($connect,$_REQUEST['brono']);
	$brooccup=mysqli_real_escape_string($connect,$_REQUEST['brooccup']);
	$sisno=mysqli_real_escape_string($connect,$_REQUEST['sisno']);
	$sisoccup=mysqli_real_escape_string($connect,$_REQUEST['sisoccup']);
    if (isset($_GET['graduate'])) {
    $graduate = mysqli_real_escape_string($connect,$_REQUEST['graduate']);
}else{
	$graduate='0';
}
	$address=mysqli_real_escape_string($connect,$_REQUEST['address']);
	$mobile=mysqli_real_escape_string($connect,$_REQUEST['mobile']);
        $total_income=$fincome+$mincome;
        if($total_income=='')
          $total_income=0;
        
        if($total_income>150000)
          $fin=4;
        else if($total_income>=100001)
          $fin=8;
        else if($total_income>=75001)
          $fin=12;
        else if($total_income>=50001)
          $fin=16;
        else
          $fin=20;
   
        $total_scholarship=$scholarship;
        if($total_scholarship=='')
          $total_scholarship=0;
        if($total_scholarship>10000)
          $sch=2;
        else if($total_scholarship>5000)
          $sch=3;
        else if($total_scholarship>0)
          $sch=4;
        else if($total_scholarship==0)
          $sch=5;
        
    $arrear=$no_arr;
    if($arrear=='')
      $arrear=0;
    if($arrear>=5)
       $arr=1;
    else if($arrear==4)
       $arr=2;
    else if($arrear==3)   
       $arr=3;
    else if($arrear==2)
       $arr=4;
    else if($arrear<=1)
       $arr=5;  

   if($semester==1){
      $cgpa=0;
      $divide=2; 
   } 
   else if($cgpa==''){
      $cgpa=0; 
      $divide=2;
   }
   else{
      $divide=3;
   }

   $total_cgpa=$sslc+$hsc+($cgpa*10);
   $avg_cgpa=$total_cgpa/$divide;
   $avg_cgpa=$avg_cgpa/10;
   if($avg_cgpa>=8.0)
       $perform=10;
    else if($avg_cgpa>=7.5)
       $perform=8;
    else if($avg_cgpa>=7.0)   
       $perform=6;
    else if($avg_cgpa>=6.0)
       $perform=4;
    else if($avg_cgpa<6.0)
       $perform=2;  

   $attend=$att;
   if($attend>=95)
       $att_score=5;
    else if($attend>=90)
       $att_score=4;
    else if($attend>=85)   
       $att_score=3;
    else if($attend>=80)
       $att_score=2;
    else if($attend>=75)
       $att_score=1;  
 
  //  $conduct='';
   /* if($conduct=="Excellent")
       $con=5;
    else if($conduct=="Very Good")
       $con=4;
    else if($conduct=="Good")
       $con=3;
    else if($conduct=="Satisfactory") 
        $con=2;
    else
        $con=0; 
    */
   $con=5;
 
  $tot_points=$fin+$sch+$arr+$perform+$att_score+$con;
  echo $con;
  echo $tot_points; 
$query = "INSERT INTO `$tabname` (`name`, `regno`, `semester`, `degree`, `branch`, `adm_category`, `parent`) VALUES ('$stuname', '$regno','$semester','$degree','$branch','$category','$parent')";//,'$fname','$foccup','$fincome','$mname','$moccup')";


if(mysqli_query($connect, $query)){

        echo "Your form submitted successfully.";

    } else{

        echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);

    }
/*if($count1==0)
{
  require 'Table1.php';
  $tab1=0;
}
include 'Table1.php'; 


$query1 = "INSERT INTO `$tablename` (`name`, `regno`, `financial`, `scholarship`, `no_of_arrears`, `performance`, `attendance`,'conduct') VALUES ('$stuname', '$regno','$fin','$sch','$arr','$perform','$att_score','$con')";//,'$fname','$foccup','$fincome','$mname','$moccup')";

if(mysqli_query($connect, $query1)){

        echo "Your form submitted successfully.";

    } else{

        echo "ERROR: Could not able to execute $query1. " . mysqli_error($connect);

    }
*/


echo "Form submitted";
mysqli_close($connect);
include 'Table1.php';

include 'db2.php';


include'update.php'


?>

