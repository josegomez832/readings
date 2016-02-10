<?php 
    session_start();

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bs/bootstrap.css" />
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
            h1{
                text-transform: uppercase;
                color:#fff !important;
            }
            body{
                /*background:url(https://static.pexels.com/photos/24962/pexels-photo-large.jpg);
                background-size: cover;*/
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">
             <div class="header clearfix">
                <nav>
                  <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>
                    <li role="presentation"><a href="#">Contact</a></li>
                  </ul>
                </nav>
                <h3 class="text-muted">The Way</h3>
              </div>
            <div class="jumbotron">
                <h1>Welcome Communities</h1>
                <p class="lead">This application is not built to change what we are accustomed to but to help out when someone forgets to send out the readings. Sure you can say we can just pick up the phone and send a group text but we are human and we forget. While preparing someone, preferably one of the responsibles, has their laptop/mobile phone on hand and they fill this out as they go so when the group is finished all the responsible has to do is press submit. The idea is to possibly stop wasting paper.</p>
                <form action="http://localhost:8888/readings/readings.php" method="post">
                    <input type="text" placeholder="Word of the day" name="word"/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
             <footer class="footer">
                <p>&copy; 2015 Beta V 1.0</p>
            </footer>
        </div>
        <div class="container">
            <div class="row">
                
            </div>
        </div>

        
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
         
        </script>

    </body>
</html>
