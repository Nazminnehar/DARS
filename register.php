
<?php
    
    // mySql connection
        $servername = "localhost" ;
        $username = "root";
        $password = "";
        $dbname = "iocl" ;
    
         
       $connection = new mysqli ($servername , $username , $password , $dbname) ;          
        if(mysqli_connect_error()){        
            die('Connect Error ( '. mysqli_connect_errno() . ')' . mysqli_connect_error() ) ; 
        }
        else{
    
            // echo "succes" ;
                // REGISTERATION
            if(isset($_POST['registerButton'])){

            $name = $_POST['name']  ;
            $email = $_POST['email'] ;            
            $phone = $_POST['phone'] ;
            $jobRole = $_POST['jobrole'] ;
            $pass = $_POST['pass'] ;
            // $rePass = $_POST['repass']
            $uniqid = uniqid() ;

            $sql = "INSERT INTO users (name , email, phone, jobRole , password , uniqid) values ('$name' , '$email' , '$phone', '$jobRole' , '$pass' , '$uniqid') " ;
            $sqll = "select * from users where email= '$email' ";
            $sqllBoss = "select * from users where jobRole = 'Boss' ";
            
            $result = mysqli_query($connection , $sqll);
            $resultBoss = $connection -> query($sqllBoss); 
            // echo mysqli_num_rows($resultBoss)  ;

            if(mysqli_num_rows($result) == 1){
                echo "<script>alert('EMAIL ALREADY EXIST , PLEASE CHOOSE DIFFERENT EMAIL')</script>" ;
                // echo "<script>document.location = 'register.php'</script>" ;
            }
            if($jobRole == "Boss"){
              if( mysqli_num_rows($resultBoss) == 1 ){
                echo "<script>alert('BOSS is ALREADY EXist ')</script>" ;
              }
              else{
                if($connection -> query($sql)){                
                  // echo "<a href="javascript:alert('successful!!.')"></a>" ;
                  // echo "<script>alert('Register Successfull.')</script>";
                  // header('location: login.php');
                  echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Succesfully register');
                  window.location.href='login.php';
                  </script>");
                    
                }
                else{
                    echo "Error :". $sql ." " . $connection->error;
                }
                $connection -> close();
              }
            }
            else{
              if($connection -> query($sql)){                
                // echo "<a href="javascript:alert('successful!!.')"></a>" ;
                // echo "<script>alert('Register Successfull.')</script>";
                //   header('location: login.php');
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Succesfully register !!!!!!!! proced to Login');
                    window.location.href='login.php';
                    </script>");
                  
              }
              else{
                  echo "Error :". $sql ." " . $connection->error;
              }
              $connection -> close();
            }
            
        } 
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
    
    
        
        <title>IOCL REGISTRATION</title>
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
                  href="register.php"
                  >Register</a
                >
                <!-- <a class="nav-link active fw-bold" aria-current="page" href="#"
                  >Sign Up</a
                > -->
                <!-- <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a> -->
              </div>
            </div>
          </div>
        </nav>
        <div class="container">
          <div class="col-md-6 mx-auto text-center">
            <div class="header-title">
              <h1 class="wv-heading--title">REGISTER NEW USER - INDIAN OIL!</h1>
              <h2 class="wv-heading--subtitle">
               
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mx-auto">
              <div class="myform form">
                <form action="" method="POST" name="login">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control text-dark"
                      id="name"
                      placeholder="Name"
                      
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control text-dark"
                      id="email"
                      placeholder="Email"
                      
                    />
                  </div>
                  
                  <div class="form-group">
                    <input
                      type="text"
                      name="phone"
                      class="form-control text-dark"
                      id="phone"
                      placeholder="Contect No"
                      
                    />
                  </div>
                  <select name='jobrole' class="form-select form-control text-dark " aria-label="Default select example">
                    <option value="" disabled selected >Job Role</option>
                    <option value="Boss">Boss</option>
                    <option value="officer">officer</option>
                    <option value="special employee">special employee</option>
                    <option value="employee">employee</option>
                  </select>
                 

                  <div class="form-group">
                    <input
                      type="password"
                      min="0"
                      name="pass"
                      id="password"
                      class="form-control text-dark"
                      placeholder="Password"
                      
                    />
                  </div>
                  <!-- <div class="form-group">
                    <input
                      type="password"
                      name="repass"
                      id="repassword"
                      class="form-control text-dark"
                      placeholder="Re-Enter Password"
                      
                    />
                  </div> -->
                  <div class="text-center">
                    <button type="submit" class="btn btn-block send-button tx-tfm" name="registerButton">
                      Register 
                    </button>
                  </div>
                  <div>
                    <p class="small mt-3 text-end" >
                      Already have an account? 
                      <a href="login.php" class="ps-hero__content__link text-danger">Log In</a> 
                    </p>
                  </div>                
                  
                </form>
              </div>
            </div>
          </div>
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
                      <!-- <i class="fas fa-paper-plane"></i> -->Send
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
    