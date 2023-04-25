<?php
	require("connection.php");
    if (isset($_POST['signup']))
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $location = $_REQUEST['location'];
        $pass = $_REQUEST['pass'];
        $field = $_REQUEST['field'];
        $pic = $_REQUEST['pic'];
        $certi= $_REQUEST['certi'];
        $pic = $_REQUEST['pic'];
        $bio = $_REQUEST['bio'];
        $website = $_REQUEST['website'];
        
        $query = "INSERT INTO freelancer (name,email,password,field,profile_pic,location,language,rating,bio,website) 
        VALUES ('$name','$email','$pass','$field','$pic','$location' ,'ENG, KINY','4','$bio', '$website')";

        if(mysqli_query($con, $query)){
            header("Location: ./home.php?user=$name");
        }else{
            $error ="An Error Has Occured.";
            echo "<h2 
            style = 'font-size: 16px;
            background-color: #023563;
            color: #fdfdfd;
            top: 104px;
            padding: 8px 22px;
            width: fit-content;
            position: absolute;
            border-radius: 11px;
            left: 72%;'>
            $error 
            <h2>";
        };
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="./images/phoenix.png">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" id="themeCss">
    <script type="text/javascript" src="./js/changeTheme.js"></script>
</head>
<body>
<div class="theme-btn">
                    <button onclick="orangeTheme(1)" class="btn-orange" ></button>
                    <button onclick="blueTheme(1)" class="btn-blue" ></button>
                    <button onclick="darkTheme(1)" class="btn-dark" ></button>
</div>
<div class="container">
<div class = "container2">
    <br><br>
        <img class="logo" src="./images/phoenix.png" width = "50px" height = "30"alt="logo">
        <h2>RWANDA FREELANCER HUB</h2>
        <form method="post" action="" class="form">
            <div>
            <input type="text" autocomplete="off" name = 'name' placeholder="Name" id="name" name="name" require>
            <input type="email" autocomplete="off" name = 'email' placeholder="Email" id="email" name="email">
            </div>
            
            <div>
            <input type="text" autocomplete="off" name = 'location' placeholder="Location" id="location" name="location">
            <input type="password" autocomplete="off" name = 'pass' placeholder="Password" id="password" name="message">
            </div>

            <div>
            <input type="text" autocomplete="off" name = 'bio' placeholder="Your Bio" id="bio" name="bio">
            <input type="text" autocomplete="off" name = 'website' placeholder="Your Portfolio Website" id="website" name="website">
            </div>
            <input type="text" autocomplete="off" name = 'field' placeholder="Field" id="field" name="field">
            <div class="files">
              
                <label for="pic" class = "file-inp file-inp1">Upload Profile Picture
                <input name = "pic" class="input2" type="file" id= "pic" id= "pic">
                </label>
               
                <label for="cert" class = "file-inp file-inp" >Upload Certificates
                <input name= 'certi' class="input2" type="file" id= "cert" name= "cert">
                </label>
               
                
            </div>

            <div>
                <p class="alt-action">Already have an account? <a href="./index.php">Log in</a></p>
            </div>
            <input value = 'Sign Up' name = "signup" type="submit" value="Sign Up">
            <br>

        </form>
    </div>
    <div class = "container1">
        <img src="./images/office.png" alt="img">
    </div>
   
</div>

</body>
</html>
