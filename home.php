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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" id="theme" href="./css/themes/blue.css">
    <link rel="stylesheet" href = "./css/themes/theme.css">
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
                    <a href="#">Policy</a>
                    <a href="#">Terms and Condition</a>
                </div>
                <div class="theme-btn">
                    <span><?php if($_GET['user'] != "") echo $_GET['user'] ?></span>
                    <form method="post">
                        <input type ="submit" class="btn-blue" name = "button1" value="">
                        <input type ="submit" class="btn-dark" name = "button2" value="">
                    </form>

                </div>
            </div>
            <div class="nav-content">
                <h1>GET THE BEST FREELANCER FOR THE JOB</h1>
                <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae incidunt libero laudantium quae sunt maiores corporis, nam vel doloremque, unde consequatur aliquid, vero beatae ad ullam! Exercitationem modi nam eveniet?</P>
                <div class="search_container">
                    <form action="" method = "post">
                        <input default = "  placeholder="Search For A Freelancer" type="text" name="keyword" id="keyword">
                        <input type = "submit"  value = "Search" class = "button" name = "search">
                        <input type = "submit"  value = "Reset" class = "button" name = "reset">
                    </form>
                </div> 
            </div>
         
        </div>
    </div>

    <?php
	require("connection.php");
    $theme = 0;
    if(array_key_exists('button1', $_POST)) {
        change(0);
        getAll($con,$theme);
    }
    if(array_key_exists('button2', $_POST)) {
        change(1);
        getAll($con,$theme);
    }
        
    
    function change($val)
    {
        $theme = $val;
        if($theme == 0){
            echo '<script type="text/javascript">',
                 'blueTheme(2);',
                '</script>';}
        elseif ($theme == 1){
            echo '<script type="text/javascript">',
            'darkTheme(2);',
           '</script>';}
    }

        if(isset($_POST['search'])) 
        {
            $keyword = $_REQUEST['keyword'];
            searchAll($con,$theme);
        }
        elseif(isset($_POST['reset']))
            searchAll($con,$theme);
        else 
            getAll($con,$theme);

        function searchAll($con,$theme)
        {
            $keyword = $_REQUEST['keyword'];
            $query = "SELECT * from  freelancer WHERE name like '%$keyword%'";
            $result = mysqli_query($con, $query);
            display($result,$theme);
        }
        function getAll($con,$theme)
        {
            $query = "SELECT * from  freelancer";
            $result = mysqli_query($con, $query);
            #echo "<script>console.log(".json_encode($res).")</script>";
            display($result,$theme);
        }
        function display($result,$theme)
        {
            $user = $_GET['user']; 
            $count = 1;
            echo "<div class = 'profiles'>";
            while($row = mysqli_fetch_assoc($result))
            { 
                if($count % 4 == 0)
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
                        <a href="./singleProfile.php?user='.$user.'&id='.$row['lancer_id'].'&theme='.$theme.'"><button >VIEW PROFILE</button></a>
                    </div>
                    </div>
                ';
                $count = $count + 1;
                if($count % 4 == 0)
                { echo "</div>";}
                
            }
            { echo "</div>";}
            {echo "<br> <br> <br> <br>";}
        }      
    ?>
</body>
</html>