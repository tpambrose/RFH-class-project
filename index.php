<?php
	require("connection.php");
    if (isset($_POST['logIn']))
    {
        
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        
        $query = "SELECT * FROM `freelancer` WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        $res = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if($count == 1)
        {
            $id = $res['id'];
            $username = $res['name'];
            header("Location: ./home.php?id=$id&user=$username");
        }else{
            $error ="Incorect email and/or password.";
            echo "<h2 
            style = 'font-size: 16px;
            background-color: #023563;
            color: #fdfdfd;
            top: 68px;
            padding: 8px 22px;
            width: fit-content;
            position: absolute;
            border-radius: 11px;
            left: 66%;'>
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
            <input type="email" name = 'email' placeholder="Email" id="email">
            <input type="password" name = 'password' placeholder="Password" id="password">
            <div>
            <p class="alt-action">Don't have an account? <a href="./signup.php">Sign Up</a></p>
            </div>
            <input type="submit" name= "logIn" value="log In">
            <br>          
        </form>
    </div>
    <div class = "container1">
        <img src="./images/office.png" alt="img">
    </div>
   
</div>

</body>
</html>
