<?php      
    $host = "127.0.0.1";  
    $user = "root";  
    $password = '';  
    $db_name = "library"; 
    $charset = 'utf8mb4_general_ci'; 
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    if( isset($_GET['submit']) )
    {
    //be sure to validate and clean your variables
    $username = htmlentities($_GET['User']);
    $pass = htmlentities($_GET['pass']);

    //then you can use them in a PHP function. 
    }

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $pass = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select * from `admin` where username = '$username' and password = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful! </center></h1>"; 
            sleep(3);
            header("Location: index.html"); 
        }  
        else{  
            echo "<h1><center> Login failed!</center></h1>"; 
        }     
?>  