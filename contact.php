<?php
if(isset($_POST['fullname'])){
    //set connection variables
$insert=false;
$server = "localhost:3322";
$username = "root";
$password = "";

//create a database connection
$con = mysqli_connect($server, $username, $password,"travelweb");

//check for connection success
if(!$con){
    die("coonection to this database failed due to ". mysqli_connect_error());
}
// echo "success connecting to the db";

//collect post variables
$fullname=$_POST['fullname'];                                       //(for multicursor: alt+shift+drag+endkey(f12))
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql = "INSERT INTO `travelweb`.`contact`(`fullname`, `email`, `number`, `subject`, `message`) VALUES ('$fullname','$email','$number','$subject','$message'); ";
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