<?php 
    session_start();
    if(isset($_SESSION['is_logged_in'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
      <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
        
                    <div class="card hovercard">
                        <div class="cardheader">
        
                        </div>
                        <div class="avatar">
                            <img alt="" src="http://www.boyded.com/wp-content/uploads/2013/06/team1.png">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="https://scripteden.com/" style="color:white"><?php echo $_SESSION["name"]; ?></a>
                            </div>
                            <div class="desc"><?php echo $_SESSION["email"]; ?></div>
                            <div class="desc">Curious developer</div>
                            <div class="desc">Tech geek</div>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="https://plus.google.com/+ahmshahnuralam">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="https://plus.google.com/shahnuralam">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    </div>
        
                </div>
        
            </div>
        </div>
</body>
</html>
<?php 
    }else{
        header("Location:login.php");
    }
?>