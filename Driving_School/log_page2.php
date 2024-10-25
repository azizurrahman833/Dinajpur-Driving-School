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
        $user_email = $_POST['user_mail'];
        $user_type = $_POST['user_option'];
        $user_pass = $_POST['user_password'];
        // print($user_email.$user_type.$user_pass);
        if($user_type == "authority_user")
        {
        $user_permission = "permitted";
        $find_copy = "SELECT u_email FROM sign_up WHERE u_email=? and u_type=? and u_password=? and u_permission=?" ;
        $pre_statemnt = $conn->prepare($find_copy);
        $pre_statemnt->bind_param('ssss', $user_email, $user_type, $user_pass, $user_permission);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($user_email); 
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        $pre_statemnt->close();
        // echo "working";
        if($num_of_result != 0 ){
            header('Location: authority.php');
        }
        else{
            echo "Invalid User_Name or User_Type or User_PassWord or Not permitted";
            // echo "working";
        }
        }
        else
        {
            $user_permission = "permitted";
            $find_copy = "SELECT u_email FROM sign_up WHERE u_email=? and u_type=? and u_password=? and u_permission=?" ;
            $pre_statemnt = $conn->prepare($find_copy);
            $pre_statemnt->bind_param('ssss', $user_email, $user_type, $user_pass, $user_permission);
            $pre_statemnt->execute();
            // echo "working";
            $pre_statemnt->bind_result($user_email); 
            $pre_statemnt->store_result();
            $num_of_result = $pre_statemnt->num_rows();
            $pre_statemnt->close();
            $sql = "SELECT u_email FROM sign_up WHERE u_email='$user_email' and u_type='$user_type' and u_password='$user_pass' and u_permission='$user_permission'" ;
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $update =$row["u_email"];
            echo "$num_of_result ";
            if($num_of_result != 0 ){
                header("Location: user.php?updateid='$update'");
            }
            else{
                echo "Invalid User_Name or User_Type or User_PassWord or Not permitted";
                // echo "working";
            }

        }

    }
    
?>