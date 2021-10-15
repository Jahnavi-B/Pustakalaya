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
      
        $sql = "insert into `admin`(Username, Password) VALUES ('$username','$pass')";   
        if(mysqli_query($con, $sql))
        {            
            echo "<h1>Query Successful!</h1>";
            sleep(3);
            header("Location: index.html"); 
        } 
        
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
                  
        

        mysqli_close($con);
?>  