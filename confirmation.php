<?php 
    session_start();
    
    include 'db.php';
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
            }
            body{
                
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1 class="center">Results for readings</h1>
        <div class="container">
            <div class="row">
                <table class="table">
                    <tr>
                        <td colspan="6"><h3><?php echo $_SESSION['word']; ?></h3></td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Book</th>
                        <th>Chapter</th>
                        <th>Verse</th>
                        <th>Admonitions</th>
                        <th>Reading</th>
                    </tr>
                    <tr>
                        <td><h4>Historic</h4></td>
                        <td><p><?php echo $_POST['history']; ?></p></td>
                        <td><p><?php echo $_POST['historicChapter']; ?></p></td>
                        <td><p><?php echo $_POST['historicVerse']; ?></p></td>
                        <td><p><?php echo $_POST['historic_admonition']; ?></p></td>
                        <td><p><?php echo $_POST['historic_reading']; ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Prophets</h4></td>
                        <td><p><?php echo $_POST['prophets']; ?></p></td>
                        <td><p><?php echo $_POST['prophetic_chapter']; ?></p></td>
                        <td><p><?php echo $_POST['prophetic_verse']; ?></p></td>
                        <td><p><?php echo $_POST['prophetic_admonition']; ?></p></td>
                        <td><p><?php echo $_POST['prophetic_reading']; ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Letters</h4></td>
                        <td><p><?php echo $_POST['letters']; ?></p></td>
                        <td><p><?php echo $_POST['letters_chapter']; ?></p></td>
                        <td><p><?php echo $_POST['letters_verse']; ?></p></td>
                        <td><p><?php echo $_POST['letters_admonition']; ?></p></td>
                        <td><p><?php echo $_POST['letters_reading']; ?></p></td>
                    </tr>
                    <tr>
                        <td><h4>Gospels</h4></td>
                        <td><p><?php echo $_POST['gospels']; ?></p></td>
                        <td><p><?php echo $_POST['gospels_chapter']; ?></p></td>
                        <td><p><?php echo $_POST['gospels_verse']; ?></p></td>
                        <td><p><?php echo $_POST['gospels_admonition']; ?></p></td>
                        <td><p>Michelle</p></td>
                    </tr>
                </table>
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
