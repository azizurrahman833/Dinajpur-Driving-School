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
        // echo "working!";
        $sql = "SELECT * FROM photos ORDER BY photo_name" ;
        $result = $conn->query($sql);        

    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel = "stylesheet" href="photos.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
            <a href="Home_page.php"><img src="Home_page_images/logo.png" alt="logo"></a>
            <ul>
                <li>
                    <a href="Home_page.php#homesection">Home</a>
                </li>
                <li>
                    <a href="#photos">Photos</a>
                </li>
                
                <li>
                    <a href="Home_page.php#programsection">programs</a>
                </li>
                <li>
                    <a href="Home_page.php#apply">apply</a>
                </li>
                <li>
                    <a href="Home_page.php#aboutsection">About</a>
                </li>
                <li>
                    <a href="Home_page.php#contact">Contact</a>
                </li>
                <li>
                    <a href="log_page.php">Login</a>
                </li>
                
                
            </ul>

            </nav>
        </div>

        </header>
<main id="#photos">
<?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <!-- <div class="allcard"> -->
    <div class="card">
        <div class="image">
            <img src="<?php echo $row["photo_name"]; ?>">
        </div>
    </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</main>
</body>
</html>