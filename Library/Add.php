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

    
    //be sure to validate and clean your variables
    $Id = 2;
    $title = "Think Python: How to Think Like a Computer Scientist";
    $Auth = "Allen B. Downey" ;
    $Ed = "2nd Edition, 2015";
    $Pub = "Green Tea Press";
    $date = "2021-02-09 9:30:45";
    $Gen = "Python";
    $Sum = "Think Python is an introduction to Python programming for beginners. It starts with basic concepts of programming, and is carefully designed to define all terms when they are first used and to develop each new concept in a logical progression.";
    $Lnk = "http://greenteapress.com/thinkpython2/thinkpython2.pdf";

    

      
    //to prevent from mysqli injection 

        $sql = "insert into `textbooks`(ID, Title, Author, Edition, Publisher, Date, Genre, Summary, Link) VALUES ( '$Id' ,'$title','$Auth','$Ed','$Pub','$date','$Gen','$Sum','$lnk')";  
        
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