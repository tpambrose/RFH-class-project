<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINGLE PROFILE</title>
    <link rel="icon" type="image/x-icon" href="./images/phoenix.png">
    <link rel="stylesheet" href="./css/singleprofile.css">
    <link rel="stylesheet" href="./css/project.css">
    <link rel="stylesheet" href="./css/message.css">
    <link rel="stylesheet" href="./css/themes/singleBlue.css">
    <link rel="stylesheet" href = "./css/themes/theme.css">
    <link rel="stylesheet" id="themeCss">
    <script type="text/javascript" src="./js/changeTheme.js"></script>
</head>
<body>
    <div class="container">
        <div class = "nav_container">
            <div class = "header">
                <div>
                    <img class="logo" src="./images/phoenix white.png" width = "50px" height = "30"alt="logo">
                </div>
                <div class = "nav">
                    <?php echo '<a href="./home.php?user='.$_GET['user'].'">Home</a>'?>
                    <?php echo '<a href="./home.php?user='.$_GET['user'].'">Search</a>'?>
                    <a href= "#">Policy</a>
                    <a href="#">Terms and Condition</a>
                </div>
                <div class="theme-btn">
                        <span><?php if($_GET['user'] != "") echo $_GET['user'] ?></span>
                        
                </div>
            </div>
           <hr class="divider"/>
            <?php
                $theme = $_REQUEST['theme'];
                if(array_key_exists('button1', $_POST)) {
                    change(0);
                }
                if(array_key_exists('button2', $_POST)) {
                    change(1);
                }
                function change($val)
                {
                    $theme = $val;
                    if($theme = 0){
                        echo '<script type="text/javascript">',
                             'blueTheme(2);',
                            '</script>';}
                    elseif ($theme = 1){
                        echo '<script type="text/javascript">',
                        'darkTheme(2);',
                       '</script>';}
                }
            
                    
                require('connection.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM `freelancer` WHERE lancer_id = $id";
                $result = mysqli_query($con,$query);
                $res = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
            ?>
            
            <div class="nav-content">
                <div class="img-container">
                    <img src=<?php echo './images/'.$res['profile_pic']?> alt="">
                </div>
                <div class="basic-info">
                    <h1><?php echo $res['name']?></h1>
                    <P class = "bio-1"><?php echo $res['bio']?></P>
                    <div class="more-info">
                        <div class="info">
                            <p class = "lang">Field <?php echo $res['field']?></p>
                            <p>Location  <?php echo $res['location']?></p>
                            <p>Email  <?php echo $res['email']?></p>
                            <p>Rating <?php echo $res['rating']?> </p>
                        </div>
                    </div>
                </div>

                
            </div>
            <div class = "projects">
                <div class = "project p1">
                    <div class = "head">
                        <div class= "field">
                            <p>Project2 Photos</p>
                        </div>
                    </div>
                </div>
        
                <div class = "project p2">
                    <div class = "head">
                        <div class= "field">
                            <p>Project1 Photos</p>
                        </div>
                    </div>
                </div>
        
                <div class = "project p3">
                    <div class = "head">
                        <div class= "field">
                            <p>Project3 Photos</p>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
        <div class="msg-container">
            <div class = "msg-container1">
                <img src="./images/New Message_Monochromatic.png" alt="img">
            </div>
            <div class = "msg-container2">
                <h2>SEND MESSAGE</h2>
                <form action="" class="form" method="post">
                    <?php require("sendmail.php");
                    $to = $res['email'];?>
                    <input name="from" type="text" placeholder="Name" id="name" name="name">
                    <input type="email" placeholder="Email" id="email" name="email">
                    <input type="text" name = "msg" placeholder="message" id="message" name="message" height="36px">
                    <input type="submit" name = "sendMessage" value="Send" value = "sendMessage">
                </form>

            </div>
        </div>
    </div>
</body>
</html>
