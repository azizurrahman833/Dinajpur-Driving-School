<?php 
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
        echo "Connected: ";
        $_image = $_FILES['_image']['name'];
        $directory = "photo/";
        $image = $directory.$_FILES["_image"]["name"];
        $directory.($_FILES["_image"]["name"]);
        $directoryN = $directory.basename($_FILES["_image"]["name"]);
        move_uploaded_file($_FILES['_image']['tmp_name'], "$directoryN");
            
            $insert = "INSERT INTO photos(photo_name) 
             VALUES(?)";
            $pre_statemnt = $conn->prepare($insert);
            echo "working";
            $pre_statemnt->bind_param("s",$image);
            echo $directoryN;
           $pre_statemnt->execute();
        header('Location: authority.php#add_photo');
    }
    
?>