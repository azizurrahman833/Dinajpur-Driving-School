<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>User controls</title>
</head>


<body>
    <!--donation section starts here-->
    <section class="fullcontainer" id="apply">
    <div class="container" >
    <h2 class="sectiontitle">apply</h2>
        <div class="cards">
            <div class="applyBox">
                <div class="title">Bike</div>
                <p>
                here you can apply for bike driving
                </p>
                <a href="entryform.php"><button >
                    APPLY
                </button></a>
            </div>
            <!--apply box end-->
            <div class="volunteerBox">
                <div class="title">CAR</div>
                <p>
                    here you can apply for car driving
                </p>
                <a href="entryform.php"><button >
                    APPLY
                </button></a>
            </div>
            <div class="volunteerBox">
                <div class="title">Heavy vehicle</div>
                <p>
                    here you can apply for Heavy vehicle driving
                </p>
                <a href="entryform.php"><button >
                    APPLY
                </button></a>
            </div>
        </div>
    </div>
</section>

    <!--donation section ends here-->
    
    <section class="fullcontainer" id="aboutsection" >
        <div class="container"id="about">
        <h2 class="sectiontitle">Entries</h2>
            <table class="content-table" id="entry">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Training_type</th>
                        <th>Received</th>
                    </tr>
                </thead>
                <tbody>
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
                    if(mysqli_connect_error())
                    {
                        die("connection Error".mysqli_connect_errno());
                    }
                    if($conn)
                    {
                        
                        $sql = "SELECT * FROM entryform WHERE email=$id ORDER BY received" ;
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
                                </tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        

                    }
                    }

                        ?>
                </tbody>
            </table>
        </div>
    </section>         
</body>
</html>