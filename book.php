<?php
if(isset($_POST['place'])){
    //set connection variables
$insert=false;
$server = "localhost:3322";
$username = "root";
$password = "";
$db="travelweb";

//create a database connection
$con = mysqli_connect($server, $username, $password,$db);


//check for connection success
if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
// echo "success connecting to the db";

//collect post variables
$place=$_POST['place'];                                       //(for multicursor: alt+shift+drag+endkey(f12))
$count=$_POST['count'];
$arrival_date=$_POST['arrival_date'];
$leaving_date=$_POST['leaving_date'];
$sql = "INSERT INTO `travelweb`.`booking`(`place`, `count`, `arrival_date`, `leaving_date`) 
VALUES ('$place','$count','$arrival_date','$leaving_date'); ";
// echo $sql;


// execute the query
if($con->query($sql)==true){
   echo"Your message send successfully"; 

  //flag for successful insertion
  $insert=true;                                                                   //(-> object operator)
}
else{
    echo"ERROR:$sql <br> $con->error";

}
header("Location:index.html");
//close the database connection
$con->close();

}


?> 