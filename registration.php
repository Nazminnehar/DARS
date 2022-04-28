<?php
    // REGISTERATION
    $name = filter_input(INPUT_POST, 'name') ;
   // $phone = filter_input(INPUT_POST, 'phoneNo');
    $email = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'pass');
    // $repass = filter_input(INPUT_POST, 'RePassword');   
    
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
        $sql = "INSERT INTO users (name , email, password) values ('$name' , '$email' , '$pass') " ;
        $sqll = "select * from users where email= '$email' ";
        
        $result = mysqli_query($connection , $sqll); 
        
        if(mysqli_num_rows($result) == 1){
            echo "<script>alert('EMAIL ALREADY EXIST , PLEASE CHOOSE DIFFERENT EMAIL')</script>" ;
            echo "<script>document.location = 'register.php'</script>" ;
        }
        else{
            if($connection -> query($sql)){                
                echo "<script>alert('SUCCESSFULLY Registered')</script>" ;
                header('location: index.html');
                
            }
            else{
                echo "Error :". $sql ." " . $connection->error;
            }
            $connection -> close();
        }
    } 
?>

