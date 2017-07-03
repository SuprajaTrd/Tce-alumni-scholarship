<?php

$connect = mysqli_connect("localhost","root","","Student") ;
if($connect === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

$date= date("Y");
$prefix="student";
$tabname="$prefix $date";

 $sql = "CREATE TABLE IF NOT EXISTS `Student`.`$tabname` ( `name` VARCHAR(20) NOT NULL , `regno` VARCHAR(10) NOT NULL , `semester` INT(2) NOT NULL , `degree` VARCHAR(20) NOT NULL , `branch` VARCHAR(20) NOT NULL , `adm_category` VARCHAR(20) NOT NULL , `parent` VARCHAR(10) NOT NULL , `father_name` VARCHAR(20) NOT NULL , `father_occupation` VARCHAR(30) NOT NULL, `father_income` DOUBLE NOT NULL, `mother_name` VARCHAR(20) NOT NULL , `mother_occupation` VARCHAR(30) NOT NULL, `mother_income` DOUBLE NOT NULL, `percent_sslc` FLOAT NOT NULL , `percent_hsc` FLOAT NOT NULL , `cut_off_hsc` FLOAT NOT NULL , `cgpa` FLOAT NOT NULL , `no_of_arr` INT NOT NULL, `att_percent` FLOAT NOT NULL , `bank_loan` INT NOT NULL , `scholarship` INT NOT NULL , `loan_amt` DOUBLE NOT NULL, `bank_name` VARCHAR(20) NOT NULL, `no_bro` INT NOT NULL , `bro_occupation` VARCHAR(20) NOT NULL, `no_sis` INT NOT NULL , `sis_occupation` VARCHAR(20) NOT NULL, `first_graduate` INT NOT NULL , `address` VARCHAR(50) NOT NULL , `mobile` BIGINT NOT NULL , `reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`regno`(10))) ENGINE = InnoDB;";

if (mysqli_query($connect, $sql)) {
    echo "Table $tabname created successfully";
} else {
    echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
