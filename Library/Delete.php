<?php      
    $host = "127.0.0.1";  
    $user = "root";  
    $password = '';  
    $db_name = "books"; 
    $charset = 'utf8mb4_general_ci'; 
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

        
       $id= 2;
      
        $sql = "DELETE FROM textbooks WHERE id=2";  
        
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
 