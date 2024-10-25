<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="entryform.css">
    <title>Entry Form</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Entry Form</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="entryform2.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Full Name: </label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <br>
                
                <div class="gender">
                    <label style="float:left; width:30%; padding-top: 7px;" >Gender:</label>
                    
                    <input style="float:left; width:7%;" id="_male" type="radio" name="gender" id="_male" value="male" required>
                    <label style="float:left; width:25%; padding-top: 7px;" for="_male">Male</label>
                    <label  style="float:right; width:25%;  padding-top: 7px;" for="_female">Female</label> 
                    <input style="float:right; width:7%;"  id="_female" type="radio" name="gender" id="_female" value="female" required>
                    
                </div>
                <br>
                <br>
                <br>
                <div>
                    <label for="contact">Contact Number: </label>
                    <br>
                    <input type="text" name="contact" id="contact" placeholder="Enter your contact number" required>
                 </div>
                 <br>   
                 <div>
                    <label for="email">Email: </label>
                    <br>
                    <input type="text" name="email" id="email" value=<?php if(isset($_GET['updateid'])){
                    $updateid = $_GET['updateid']; echo $updateid;}?>>
                 </div>
                 <br>
                 <div>
                    <label for="add">Address: </label>
                    <br>
                    <textarea rows="5" name="address" id="add" placeholder="enter your address" required></textarea>
                 </div>
                    

                 <br>
                 <div>
                    <label for="age">Age: </label>
                    <br>
                    <input type="text" name="age" id="age" placeholder="enter your age" required>
                 </div>
                 <br>
                <div class="training_type" >
                    <label for="training_type">Training Type: </label>
                    <select name="training_type" id="training_type" required>
                        <option value="bike">bike</option>
                        <option value="car">car</option>
                        <option value="heavy_vehicle">heavy vehicle</option>
                    </select>
                </div>                 
                 <br>
                 <br>
                 <div class="submit_text">
                    <input type="submit" value="Submit">
                </div>
                <br>
                 


            </form>
        </div>

    </div>
</body>
</html>