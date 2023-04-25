<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFH</title>
    <link rel="icon" type="image/x-icon" href="/images/phoenix.png">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/profilesList.css">
    <link rel="stylesheet" id="themeCss">
    <script type="text/javascript" src="./js/changeTheme.js"></script>
</head>
<body style="margin: auto">
    <div class="container">
        <div class = "nav_container">
            <div class = "nav">
                <img class="logo" src="images/phoenix white.png" width = "50px" height = "30"alt="logo">
                <div>
                    <a href="#">Home</a>
                    <a href="#">Search</a>
                    <a href="./signup.php">Signup</a>
                    <a href="./index.php">Log in</a>
                </div>
                <div class="theme-btn">
                    <span><?php if($_GET['user'] != "") echo $_GET['user'] ?></span>
                    <button onclick="orangeTheme()" class="btn-orange" ></button>
                    <button onclick="blueTheme()" class="btn-blue" ></button>
                    <button onclick="darkTheme()" class="btn-dark" ></button>
                </div>
            </div>
            <div class="nav-content">
                <h1>GET THE BEST FREELANCER FOR THE JOB</h1>
                <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae incidunt libero laudantium quae sunt maiores corporis, nam vel doloremque, unde consequatur aliquid, vero beatae ad ullam! Exercitationem modi nam eveniet?</P>
                <div class="search_container">
                    <input placeholder="Search For A Freelancer" type="text" name="search" id="search_1">
                    <button>Search</button>
                    <button>Advanced Filter</button>
                </div> 
            </div>
         
        </div>
    </div>

    <?php
	require("connection.php");  
        $query = "SELECT * from  freelancer";
        $result = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = 0;
        while($row = mysqli_fetch_assoc($result))
        {
            if($count % 3 == 0)
            { echo "<div class = 'profiles'>";}
            echo 
            '
                <div class = "profile p1">
                <div class = "head" style = "background-image: url(\''.'images\/'.$row['profile_pic'].'\');">
                    <div class= "field">
                        <p>'.$row['field'].'</p>
                    </div>
                    <div class="rating">
                        <p>
                            '.$row['rating'].'
                            <img src="./images/star.png" width= "20px" height="18px" alt="stars">
                        </p>             
                    </div>
                </div>
                <div class="info">
                    <h6>'.$row['name'].'</h6>
                    <p>'.$row['bio'].'</p>
                    <a href="./singleProfile.php?id='.$row['lancer_id'].'"><button >VIEW PROFILE</button></a>
                </div>
                </div>
            ';
            $count = $count + 1;
            if($count % 4 == 0)
            { echo "</div>";}
            
        }
    ?>
</body>
</html>