<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>Authority controls</title>
</head>


<body>
    <section class="fullcontainer" id="aboutsection" >
        <div class="container"id="about">
            <h2 class="sectiontitle">Entries</h2>
            <table class="content-table" id="entry">
                <thead>
                    <tr>
                        <th>id </th>
                        <th>name</th>
                        <th>gender</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>address</th>
                        <th>age</th>
                        <th>training_type</th>
                        <th>received</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                    error_reporting(0);
                    $dbhost = "localhost";
                    $dbuser = "root"; 
                    $dbpass = "";
                    $db = "driving_school";
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
                    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                    if(mysqli_connect_error())
                    {
                        die("connection Error".mysqli_connect_errno());
                    }
                    if($conn)
                    {
                        
                        $sql = "SELECT * FROM entryform ORDER BY received" ;
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $update =$row["id"];
                                echo "<tr>
                                <td>" .$update."</td>
                                <td>" .$row["name"]. "</td>
                                <td>" .$row["gender"]. "</td>
                                <td>" .$row["contact"]. "</td>
                                <td>" .$row["email"]. "</td>
                                <td>" .$row["address"]. "</td>
                                <td>" .$row["age"]. "</td>
                                <td>" .$row["training_type"]. "</td>
                                <td>" .$row["received"]. "</td>
                                <td><a href='update_form_for_entry_received.php?updateid=".$update."' ><button>R</button></a><br><br>
                                <a href='update_form_for_entry_notreceived.php?updateid=".$update."' ><button>NR</button></a></td>
                                </tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        
                    }

                        ?>
                </tbody>
            </table>
        </div>
    </section>

<section class="fullcontainer" id="aboutsection" >
    <div class="container"id="about">
        <h2 class="sectiontitle">Permission to users</h2>
        <table class="content-table" id="sign_up">
            <thead>
                <tr>
                    <th>u_name</th>
                    <th>u_email </th>
                    <th>u_type</th>
                    <th>u_permission</th>
                    <th >Edit</th>
                    
                </tr>
            </thead>
            <tbody>
                    <?php
                error_reporting(0);
                $dbhost = "localhost";
                $dbuser = "root"; 
                $dbpass = "";
                $db = "driving_school";
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
                // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                if(mysqli_connect_error())
                {
                    die("connection Error".mysqli_connect_errno());
                }
                if($conn)
                {
                    
                    $sql = "SELECT * FROM sign_up ORDER BY u_type, u_permission ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $update =$row["u_email"];
                            echo "<tr>
                            <td>" .$row["u_name"]. "</td>
                            <td>" .$row["u_email"]. "</td>
                            <td>" .$row["u_type"]. "</td>
                            <td>" .$row["u_permission"]. "</td>
                            <td><a href='update_sign_up_permitted.php?updateid=".$update."' ><button>P</button></a><br><br>
                            <a href='update_sign_up_not_permitted.php?updateid=".$update."' ><button>NP</button></a><br><br></td>
                            </tr>";
                            
                        }
                    } else {
                        echo "0 results";
                    }
                    

                }

                    ?>
            </tbody>
        </table>
    </div>
</section>

<section class="fullcontainer" id="add_photo" >
                
    <h2 class="sectiontitle">Add Photos</h2>
    <div class="addphotos"><a href="form_for_adding_photo.php"><button>Add photo</button></a></div>

 </section>

       
</body>
</html>