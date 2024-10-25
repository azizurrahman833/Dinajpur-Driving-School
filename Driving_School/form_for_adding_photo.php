<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_for_adding_photo.css">
    <title>Add Photo</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Add photo</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="form_for_adding_photo2.php" method="post" enctype="multipart/form-data">
                
                 <div>
                    <label for="attached">Attach Photo</label>
                    <br>
                    <input type="file" name="_image" id="_image">
                 </div>
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