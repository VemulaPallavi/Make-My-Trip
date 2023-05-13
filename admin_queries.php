<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <style>
        body{
            background-color:rgb(230, 179, 255);
        }
        .navbar{
            background-color:rgb(204, 51, 255);
        }
    </style>
   
  </head>
  <body class="dashboard ">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="admin_dashboard.php">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link  " aria-current="page" href="admin_dashboard.php">Booking</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active " href="#">Queries</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active " href="admin.php">Admin</a>
                    </li>
                    
                </ul>
                <span class="navbar-text text-light">
                
                    <a class="nav-link text-light text-decoration-underline" href="index.html">Logout</a>
                
                </span>
                </div>
            </div>
        </nav>
  <?php
      session_start();
      $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, "travelweb");
        
      ?>

      
   
    <span id="top_span"><marquee behavior="" direction="">Note: Our Organization enables people to collaborate easily , even if remote</marquee> </span>
    
    <div id="right"><br><br>

   
    <div id="demo">
        
        

             <?php
                // if(isset($_POST['booking'])){
                    ?>
                    <div class="container">
                        <h3 class="">Customer Queries:</h3>
                        <table style="border-collapse:collapse; " class="table">
                            <tr>
                                        <td class="table_content"><strong>S.No</strong></td>
                                        <td class="table_content"><strong>FullName</strong></td>
                                        <td class="table_content"><strong>Email</strong></td>
                                        <td class="table_content"><strong>Contact No.</strong></td>
                                        <td class="table_content"><strong>Subject</strong></td>
                                        <td class="table_content"><strong>Message</strong></td>
                                        
                            </tr>
                        </table>
                    </div>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, "travelweb");
                    $query = "select * from contact";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <?php
                    while($row = mysqli_fetch_assoc( $query_run)){
                        ?>
                    
                        <div class="container">
                        
                            
                            <table style="" class="table">
                               
                                <tbody>
                                        <tr>
                                        <td class="table_content"><?php echo $row['s_no'] ?></td>
                                        <td class="table_content"><?php echo $row['fullname'] ?></td>
                                        <td class="table_content"><?php echo $row['email'] ?></td>
                                        <td class="table_content"><?php echo $row['number'] ?></td>
                                        <td class="table_content"><?php echo $row['subject'] ?></td>
                                        <td class="table_content"><?php echo $row['message'] ?></td>
                                        <!-- <td class="table_content"><a href="#"  style="color:white;">View Details</a></td> -->
                                    </tr>
                                </tbody>
                                
                                
                            </table>
                        </div>
                        <?php

                    }
                // }
             ?>
    </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>