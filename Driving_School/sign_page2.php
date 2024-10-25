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
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_mail'];
        $user_type = $_POST['user_option'];
        $user_pass = $_POST['user_password'];
        $cuser_pass = $_POST['cuser_password'];
        
        // echo "working";
        $find_copy = "SELECT u_email FROM sign_up WHERE u_email = ? LIMIT 1";
        $pre_statemnt = $conn->prepare($find_copy);
        $pre_statemnt->bind_param("s", $user_email);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($user_email);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";
        if($num_of_result == 0 && $user_pass == $cuser_pass){
            if($user_type =='authority_user')
            {
            $user_permission = "not_permitted";
            $pre_statemnt->close();
            $insert = "INSERT INTO sign_up (u_name, u_email, u_type, u_password, u_permission) VALUES(?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            $pre_statemnt->bind_param("sssss", $user_name, $user_email, $user_type, $user_pass, $user_permission);
            
            // echo "working";
            $pre_statemnt->execute();
            echo "Wait for authority permission...";
            
            }
            else
            {
            $user_permission = "permitted";
            $pre_statemnt->close();
            $insert = "INSERT INTO sign_up (u_name, u_email, u_type, u_password,u_permission) VALUES(?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            $pre_statemnt->bind_param("sssss", $user_name, $user_email, $user_type, $user_pass, $user_permission);
            
            // echo "working";
            $pre_statemnt->execute();
            }
            header("Location: log_page.php");

        }
        else{
            echo "Someone using this email, So rearrange mail string or give correct password";
            // echo "working";
        }

    }
    
?>