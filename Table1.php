<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$year=date('Y');
$tab=($year-2017)+1;
$prefix="student";
$tabname="$prefix $year";



$date= date("Y");
$points="points";
$tablename="$points $date";

 $sql1 = "CREATE TABLE IF NOT EXISTS `Student`.`$tablename` ( `name` VARCHAR(20) NOT NULL , `regno` VARCHAR(10) NOT NULL , `dept` VARCHAR(20) NOT NULL , `financial` INT NOT NULL , `scholarship` INT NOT NULL , `no_of_arrears` INT NOT NULL , `performance` INT NOT NULL , `attendance` INT NOT NULL , `conduct` INT NOT NULL , `total` INT NOT NULL , PRIMARY KEY (`regno`(10))) ENGINE = InnoDB;";

if (mysqli_query($connect, $sql1)) {
    echo "Table $tablename created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
