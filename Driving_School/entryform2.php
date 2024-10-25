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
        // echo "Connected: ";
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $training_type = $_POST['training_type'];
        $received = "not_received";
        // echo $name;
        // echo $gender;
        // echo $contact;
        // echo $email;
        // echo $address;
        // echo $age;
        // echo $training_type;
        // echo $received;
        $find_copy = "SELECT email FROM entryform WHERE email = ? and training_type = ?";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $pre_statemnt->bind_param("ss", $email, $training_type);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($email);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";

        if($num_of_result == 0 ){
            $pre_statemnt->close();
            $insert = "INSERT INTO entryform(name, gender, contact, email, address, age, training_type, received) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            // echo "working";
            $pre_statemnt->bind_param("ssssssss", $name, $gender, $contact, $email, $address, $age, $training_type, $received);
            $pre_statemnt->execute();
            // echo " recorded";
            header('Location: user.php');
        }
        else{
            echo "ERROR!! Your information has been stored...";
            // echo "working";
        }

    }
    
?>