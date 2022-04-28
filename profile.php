
<?php
    
    // mySql connection
        $servername = "localhost" ;
        $username = "root";
        $password = "";
        $dbname = "iocl" ;
        $counter ;
    
         
        $connection = new mysqli ($servername , $username , $password , $dbname) ;          
        if(mysqli_connect_error()){        
            die('Connect Error ( '. mysqli_connect_errno() . ')' . mysqli_connect_error() ) ; 
        }
        else{
                $email = $_COOKIE['IOCL'] ;
                $uniqueID;
                $name;
                $phone;
                $email;
                $jobrole;
                $arrivalTime;
                $date = date('y/m/d') ;
                $todayDate = strftime("%y-%m-%d");
                $newDate = date("Y-m-d", strtotime($todayDate));
                
            //  if(isset($_POST['attendanceSubmit'])){
            //   echo $arrivalTime ;
            //  }
    
            //   $name = $_POST['name']  ;
            //   $email = $_POST['email'] ;
            //   $pass = $_POST['pass'] ;

              // $sql = "INSERT INTO users (name , email, password) values ('$name' , '$email' , '$pass') " ;

              // $sql = "INSERT INTO attandence (Name , Email, Date , ArrivalTime , UniqueID) values ('$name' , '$email' ,  , '$arrivalTime' , '$uniqueID' ) " ;

              $sqll = "select * from users where email= '$email' ";
              $sqllAllEmploy = "select * from users ";
              
              $sqllAllAttandance = "select * from attandence" ;
              $sqllattandance = "select * from attandence where email= '$email' ";              
              $sqllSuccessAttandance = "select * from attandence where email= '$email' AND Date='$newDate' ";


              $resultAllAttandance = $connection-> query($sqllAllAttandance);

              $resultAttandence = $connection-> query($sqllattandance);

              $resultSuccessAttandance = $connection-> query($sqllSuccessAttandance);


              $resultAllEmploy = $connection -> query($sqllAllEmploy) ;
              $result = mysqli_query($connection , $sqll); 
              $row = $result->fetch_assoc();

              if(mysqli_num_rows($result) == 1)
              {
                $uniqueID = $row["uniqid"] ;
                $name = $row["name"];
                $phone = $row["phone"];
                $email = $row["email"];
                $jobrole = $row["jobRole"];
              }
              

              if(isset($_POST['attendanceSubmit'])){
                $arrivalTime = $_POST['time'] ;
                $sql = "INSERT INTO attandence (Name , Email, Date , ArrivalTime , UniqueID) values ('$name' , '$email' , '$date' , '$arrivalTime' , '$uniqueID' ) " ;
                

                if($connection -> query($sql)){
                  
                  echo ("<script LANGUAGE='JavaScript'> alert('Attendance is given succesfully.') ;
                  window.location.href='profile.php'; </script>");
                }
                    else{
                      echo "Error :". $sql ." " . $connection->error;
                  }
                  $connection -> close();
              }             
      }
      if(isset($_POST['logout'])){
        setcookie("IOCL", "", time() - 3600);
        echo ("<script LANGUAGE='JavaScript'> window.location.href='login.php'; </script>");
      }
    ?>
    
    
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!-- map dependencies -->    
         
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="main.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <title>Employ Profile</title>
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-lg">
          <div class="container-fluid mx-md-5">
            <a class="navbar-brand" href="index.html">
              <img src="https://iocl.com/assets/images/logo.gif" alt=""  />
             
            </a>
    
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navbarNavAltMarkup"
            >
              <div class="navbar-nav w-75 justify-content-evenly">
                <a
                  class="nav-link active fw-bold"
                  aria-current="page"
                  href="index.php"
                  >Home</a
                >
                <a
                  class="nav-link active fw-bold"
                  aria-current="page"
                  href="services.html"
                  >Services</a
                >
                <a
                  class="nav-link active fw-bold"
                  aria-current="page"
                  href="about.php"
                  >About Us</a
                >
                <a
                  class="nav-link active fw-bold"
                  aria-current="page"
                  href="login.php"
                  >Register</a
                >
                <form action='' method='POST'><button type="submit" class="btn btn-danger" name='logout'>LOGOUT</button></form>
               
              </div>
            </div>
          </div>
        </nav>

        <div class="container p-2">
            <?php 
               
                if(isset($_COOKIE["IOCL"])){
                    echo "
                    <div class='d-flex justify-content-between m-5'>
                        <div class='w-50 p-3 m-3'> 
                        
                            <div class='text-end'>
                                <h4>" . date("d/m/y") .    "
                                "  . date(" l"). " </h4>
                            </div>
                            <div class='d-flex justify-content-between mt-5 border  rounded border-bottom p-2 px-3 ' style='border-bottom:6px solid #ccffff!important ; '>
                                <h4>Job Role</h4>
                                <h4 class='text-uppercase text-danger'>" . $jobrole . "</h4>
                            </div>
                            <div class='d-flex justify-content-between mt-4 border rounded p-2 px-3 ' style='border-bottom:6px solid #ccffff!important ; ' >
                                <h4 class=''>Unique ID</h4>
                                <h4 class='text-danger'>". $uniqueID ."</h4>
                            </div>
                            <div class='d-flex justify-content-between mt-4 border rounded p-2 px-3 ' style='border-bottom:6px solid #ccffff!important ; ' >
                                <h4>Email</h4>
                                <h4 class='text-danger'>". $email ."</h4>
                            </div>
                            <div class='d-flex justify-content-between mt-4 border rounded p-2 px-3 ' style='border-bottom:6px solid #ccffff!important ; ' >
                                <h4>Phone Number</h4>
                                <h4 class='text-danger'>". $phone ."</h4>
                            </div>
                            
                        </div>
                        <div class='vr'></div>
                        <div class='w-50 p-3 m-auto'>
                            <div class='w-50 m-auto '>
                                <img class='rounded-circle border w-100 bg-primary' alt='100x100' 
                                src='https://png.pngtree.com/png-vector/20190129/ourlarge/pngtree-man-vector-icon-png-image_355798.jpg'
                                data-holder-rendered='true' />
                            </div>
                            <div class='text-center mt-3'>
                                <h3>". $name ."</h3>
                            </div>
                        </div>
                    </div>
                    
                    ";
                  if( $jobrole != 'Boss')
                  {
                    if($resultSuccessAttandance -> num_rows > 0)
                      {
                        echo "
                          <div class='container-fluid shadow p-5' >
                              <div>
                                <h4> Give Your Today's Attendance </h4>
                              </div>
                              <div class='text-center'>
                                <h4 class='text-danger mt-4' > complete today's session!!! </h4>
                              </div>
                          </div>
                          " ;
                      }
                      else{
                        echo " 
                            <div class='container-fluid shadow p-5' >
                              <div>
                                <h4> Give Your Today's Attendance </h4>
                              </div>

                              <form action='' method='POST' >
                                <div class='d-flex justify-content-between mb-2'>                              
                                  <div class='w-100 px-1  '>
                                    <label for='Name' class='mb-1'>Name</label>
                                    <input type='text' class='form-control text-dark' id='Name' disabled value='". $name ."' name='AttandenceName' />
                                  </div>
                                  <div class='w-100 px-1 '>
                                    <label for='email' class='mb-1'>Email address</label>
                                    <input type='email' class='form-control text-dark' id='email' disabled name='emailID' value='". $email ."' />
                                  </div>  
                                </div>

                                <div class='d-flex justify-content-between mb-2'>
                                  <div class='w-100 px-1 '>
                                    <label for='date' class='mb-1'>Date</label>
                                    <input type='text' class='form-control text-dark' id='date' disabled value='". date("d/m/y") ."' />
                                  </div>
                                  <div class='w-100 px-1 '>
                                    <label for='Time' class='mb-1'>Arraiving Time</label>
                                    <input type='time' name='time' class='form-control text-dark' id='Time' placeholder='hh/mm' required />
                                  </div>  
                                </div>
                                <div class='w-100 px-1 mb-2'>
                                  <label for='uniqueID' class='mb-1'>Unique ID</label>
                                  <input type='text' class='form-control text-dark' id='uniqueID' disabled value='". $uniqueID ."' />
                                </div>
                                <div class='w-100 px-1 mt-4 ' >
                                  <button type='submit' class='btn btn-primary w-25' name='attendanceSubmit' >Submit</button>
                                </div>
                              </form>

                            </div>
                        " ;
                      }    
                   
                    ?>
                      <div class='container-fluid shadow p-5 mt-5 mb-5' >
                        <div>
                          <h4> Attendance History </h4>
                        </div>
                        <div>
                          <table class="table text-center">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">UniqueID</th>
                              <th scope="col">Date</th>
                              <th scope="col">Arrival Time</th>
                            </tr>
                          </thead>
                          <tbody class='text-center'>
                            <?php 
                              $counter=0 ;
                               
                              if($resultAttandence -> num_rows > 0) {
                                while($attandenceRow = $resultAttandence->fetch_assoc()) {                                        
                                  if( $attandenceRow["Date"] == $newDate )                         
                                  { echo "
                                    <tr>
                                      <th scope='row'> ". ++$counter ." </th>
                                      <td>". $attandenceRow["UniqueID"] ."</td> 
                                      <td>". $attandenceRow["Date"]  ." <span class='text-danger'> today </span> </td>
                                      <td>". $attandenceRow["ArrivalTime"] ." <span class='text-danger'> today </span> </td>
                                    </tr>
                                  " ;}
                                  else{ echo "
                                    <tr>
                                      <th scope='row'> ". ++$counter ." </th>
                                      <td>". $attandenceRow["UniqueID"] ."</td> 
                                      <td>". $attandenceRow["Date"] ."</td>
                                      <td>". $attandenceRow["ArrivalTime"] ."</td>
                                    </tr>
                                  " ;}
                                }
                              }                             
                            ?>
                          <tbody>
                          </table>
                        </div>
                      </div>

                     <?php
                      }  

                      else { ?>
                      <div>
                        <div class='container-fluid shadow p-5 mt-5 mb-4' >
                          <div class='mb-4'>
                            <h4> Today's employee </h4>
                          </div>
                          <div>
                            <table class="table text-center">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">UniqueID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Office Date</th>
                                <th scope="col">Office Arrival Time</th>
                              </tr>
                            </thead>
                            <tbody class='text-center'>
                            <?php 
                                $counter=0;
                                $rows = $resultAllAttandance -> num_rows ;
                                if($rows > 0) {
                                  
                                  while($AllattandenceRow = $resultAllAttandance->fetch_assoc()) {  
                                    
                                    if( $AllattandenceRow["Date"] == $newDate )      {
                                       echo "
                                        <tr>
                                          <th scope='row'> ". ++$counter ." </th>
                                          <td>". $AllattandenceRow["UniqueID"] ."</td>
                                          <td>". $AllattandenceRow["Name"] ."</td> 
                                          <td>". $AllattandenceRow["Date"]  ." </td>
                                          <td>". $AllattandenceRow["ArrivalTime"] ."</td>
                                        </tr>
                                      " ;
                                    }
                                   
                                  }
                                }
                            ?>
                            <tbody>
                            </table>
                          </div>
                        </div>
                        
                        <div class='container-fluid shadow p-5 mt-5 mb-4' >
                          <div class='mb-4'>
                            <h4> Previous day's Attendance Records </h4>
                          </div>
                          <div>
                            <table class="table text-center">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">UniqueID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Office Date</th>
                                <th scope="col">Office Arrival Time</th>
                              </tr>
                            </thead>
                            <tbody class='text-center'>
                            <?php 
                                $counter=0;
                                $resultAllAttandance->data_seek(0);
                                if($rows > 0) {
                                  while( $AllattandenceRowh = $resultAllAttandance -> fetch_assoc()) {                                    
                                    if( $AllattandenceRowh["Date"] != $newDate )      
                                      { echo "
                                        <tr>
                                          <th scope='row'> ". ++$counter ." </th>
                                          <td>". $AllattandenceRowh["UniqueID"] ."</td>
                                          <td>". $AllattandenceRowh["Name"] ."</td> 
                                          <td>". $AllattandenceRowh["Date"]  ." </td>
                                          <td>". $AllattandenceRowh["ArrivalTime"] ."</td>
                                        </tr>
                                      " ;}                                  
                                   
                                  }
                                }
                            ?>
                            <tbody>
                            </table>
                          </div>
                        </div>

                        <div class='container-fluid shadow p-5 mt-5 mb-4' >
                          <div class='mb-4'>
                            <h4> All Employee List </h4>
                          </div>
                          <div>
                            <table class="table text-center">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Unique ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">job Role</th>
                              </tr>
                            </thead>
                            <tbody class='text-center'>
                            <?php 
                                $counter=0;
                                // $resultAllAttandance->data_seek(0);
                                if($rows > 0) {
                                  while( $AllEmploy = $resultAllEmploy -> fetch_assoc()) {                                    
                                    if( $AllEmploy["jobRole"] != 'Boss' )  {   
                                       echo "
                                        <tr>
                                          <th scope='row'> ". ++$counter ." </th>
                                          <td>". $AllEmploy["uniqid"] ."</td>
                                          <td>". $AllEmploy["name"] ."</td> 
                                          <td>". $AllEmploy["email"]  ." </td>
                                          <td>". $AllEmploy["phone"] ."</td>
                                          <td>". $AllEmploy["jobRole"] ."</td>
                                        </tr>
                                      " ;                                  
                                    }
                                  }
                                }
                            ?>
                            <tbody>
                            </table>
                          </div>
                        </div>
                        
                      </div>
                              
                    <?php } ?>
                     
            <?php                        
                } else{
                    echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='login.php';
                    </script>");
                }
            ?>
        </div>
        

        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
          <div class="container py-4">
            <div class="row gy-4 gx-5">
              <div class="col-lg-4 col-md-6">
                <img src="https://logosave.com/images/large/common/02/indian-oil-l.jpg" alt="" width = "60"  />
                <h5 class="h1 text-white">GUWAHATI REFINERY</h5>
                <p class="small text-muted">
             
                </p>
                <p class="small text-muted mb-0">
                  &copy; Copyrights. All rights reserved.
                  <!-- <a class="text-primary" href="#">Bootstrapious.com</a> -->
                </p>
              </div>
              <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Get started</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Get started</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-3">Newsletter</h5>
                <p class="small text-muted">
             
                </p>
                <form action="#">
                  <div class="input-group mb-3">
                    <input
                      class="form-control primary"
                      type="text"
                      placeholder="Recipient's username"
                      aria-label="Recipient's username"
                      aria-describedby="button-addon2"
                    />
                    <button
                      class="btn btn-primary"
                      id="button-addon2"
                      type="button"
                    >
                      <!-- <i class="fas fa-paper-plane"></i> -->
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </footer>
    
    
    
    
    
        <script src="js/map.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        </body>
    </html>
    
