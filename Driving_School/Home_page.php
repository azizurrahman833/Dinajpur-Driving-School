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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Dinajpur Driving School</title>
    <link rel="stylesheet" href="Home_page.css">
    </head>

<body>
    <div class="fullcontainer banner" id="homesection">
        <header>
            <div class="container">
                <nav>
                <a href="Home_page.php"><img src="Home_page_images/logo.png" alt="logo"></a>
                <ul>
                    <li>
                        <a href="#homesection">Home</a>
                    </li>
                    <li>
                        <a href="#photos">Photos</a>
                    </li>
                    
                    <li>
                        <a href="#programsection">programs</a>
                    </li>
                    <li>
                        <a href="#apply">apply</a>
                    </li>
                    <li>
                        <a href="#aboutsection">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="log_page.php">Login</a>
                    </li>
                    
                    
                </ul>

                </nav>
            </div>

            </header>
            <!--header end here-->
            <div class="container">
            <h1>Welcome to Dinajpur  Driving School<br /> -Best Driving School in City.</h2>
            <p>Dinajpur driving school is the standard school in the city since 2022, Dinajpur. We aim to
            revolutionize the way you learn to drive the fantastic vehicles of yours and travel round the globe. Our
            sole mission is to create safe drivers and decrease the number of road accidents that cause a lot of human
            and monitory losses, thus playing a safe strategy.</p>
            </div>
                      
    </div>
            <!--home section end here-->
            <!--image swipers section starts here-->
<main id="photos">
    <!-- <div class="allcard"> -->
    <div id="_photos">
    <h2 class="sectiontitle">Photos</h2>
    </div>
    <?php
    $flag=(int)4;
    if ($result->num_rows > 0) {
        while( $flag !=0 && $row = $result->fetch_assoc()) {
            $flag--;
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
    <div class="seemore"><a href="photos.php"><button>See More</button></a></div>
    
</main>
<!--Programs section ends here-->
<!--Programs section starts here-->
<section class="programs" id="programsection">
    <div class="container" >
        <h2 class="sectiontitle">Programs</h2>
        <div class="boxcontainer">
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Highly trained facilities</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Programs for youth and women</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Safe, clean, and sophisticated</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Safe driving</div>
                
            </div>
            <!--box end-->
        </div>
        <!--boxcontainer end-->
    </div>
</section>
<!--program section end here-->
</section>
<!--program section end here-->

<!--apply section starts here-->
<section class="fullcontainer" id="apply">
    <div class="container" >
    <h2 class="sectiontitle">apply</h2>
        <div class="cards">
            <div class="applyBox">
                <div class="title">Bike</div>
                <p>
                here you can apply for bike driving
                </p>
                <a href="log_page.php"><button >
                    APPLY
                </button></a>
            </div>
            <!--apply box end-->
            <div class="volunteerBox">
                <div class="title">CAR</div>
                <p>
                    here you can apply for car driving
                </p>
                <a href="log_page.php"><button >
                    APPLY
                </button></a>
            </div>
            <div class="volunteerBox">
                <div class="title">Heavy vehicle</div>
                <p>
                    here you can apply for Heavy vehicle driving
                </p>
                <a href="log_page.php"><button >
                    APPLY
                </button></a>
            </div>
        </div>
    </div>
</section>

<!--apply section ends here-->
<!--about section starts here-->
<section class="fullcontainer" id="aboutsection" >
    <div class="container"id="about">
        <h2 class="sectiontitle">About us</h2>
        <p>
        Welcome to Dinajpur Driving School, where we are dedicated to shaping confident and responsible drivers for a lifetime of safe journeys.
         At our driving school, we understand that learning to drive is a significant milestone in one's life, and we are committed to 
         providing a supportive and educational environment to make this experience both enjoyable and enriching.
         <br>
         <br>
    Our team of experienced and certified instructors is passionate about empowering individuals with the knowledge and skills needed to navigate 
    the roads safely. We believe that driver education is not just about passing a test but about instilling a deep understanding of road safety,
     traffic rules, and responsible driving habits. As an integral part of the community, [Driving School ] takes pride in contributing to safer roads.
      We foster a sense of responsibility among our students, emphasizing the impact of individual driving habits on the larger community.
       Through community outreach programs and partnerships, we aim to create a culture of road safety that extends beyond the confines of our 
       classrooms. We understand that stepping behind the wheel for the first time can be a nerve-wracking experience. That's why our instructors focus
        not only on skill-building but also on nurturing confidence in our students. Through patient guidance and positive reinforcement, we empower learners
         to overcome anxiety and approach driving with a sense of assurance.
         </p>
    </div>
</section>

<!--about section ends here-->
<!--contacts section starts here-->
<footer >
    <div class="container" id="contact">
        
        <!--newslettercontainer-->
        <div class="linkscontainer">
            <div class="title">Useful Links</div>
            <ul>
            <li>
                <a href="#homesection">Home</a>
            </li>
            <li>
                <a href="#photos">Photos</a>
            </li>
            
            <li>
                <a href="#programsection">programs</a>
            </li>
            <li>
                <a href="#apply">apply</a>
            </li>
            <li>
                <a href="#aboutsection">About</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <li>
                <a href="log_page.php">Login</a>
            </li>
            </ul>

        </div>
        <!--links container-->
        <div class="connectcontainer">
            <div class="title">
                connect with us
            </div>
        
        <p>
            Hajee Mohammad Danesh Science & Technology University<br>
            Basherhat, N508, 5200
        </p>

        <p>
            mdihtuhar@gmail.com (+880)1738207727
        </p>

        <p>
            azizurrahmanmaruf@gmail.com (+880)1766643155
        </p>
        
        
        </div>
        <!--connectcontainer-->
    </div>
</footer> 

<!--footer section start here-->
</body>
</html>
