<?php 
    if(isset($_GET['updateid']))
    {
        $id = $_GET['updateid'];
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "driving_school";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else if($conn)
    {
        $received="not_received";
        $update = "UPDATE entryform  
        SET received = '$received' where id= '$id'";
        $pre_statemnt = $conn->prepare($update);
        $pre_statemnt->execute();
        header('Location: authority.php#entry');
        
    }
       

    }
    
?>