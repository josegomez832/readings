<?php 
    session_start();
    $_SESSION['word'] = $_POST['word'];
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
            h2{text-transform: uppercase;}
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <?php 
            $categories = array('Historic','Prophetic','Letters','Gospels');
            for ($c = 0;$c < 4;$c++){ ?>
                <div class="col-md-3">
                </div>

            <?php }

        ?>
        <form action="http://localhost:8888/readings/confirmation.php" method="post">
        <div class="container-fluid">
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
              <h1 class="center"><?php echo $_SESSION['word']; ?></h1>
            <div class="row">
                <div class="col-md-3">
                    <h2 class="title">Historic</h2>
                    <?php
                        $historic = array(
                            'Genesis',
                            'Exodus',
                            'Leviticus',
                            'Numbers',
                            'Deuteronomy',
                            'Acts', 
                            'Joshua', 
                            'Judges', 
                            'Ruth',
                            '1st Samuel', 
                            '2nd Samuel', 
                            '1st Kings', 
                            '2nd Kings', 
                            '1st Chronicles', 
                            '2nd Chronicles', 
                            'Ezra', 
                            'Esther'
                        );   
                        $historicLength = count($historic);                     
                    ?>                                    
                        <ul id="historic">
                            <li>
                                    
                                    <select id="history" name="history">
                                        <?php foreach($historic as $history){
                                            echo '<option value="'.$history.'">'.$history.'</option>';
                                        } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" name="historicChapter"/>
                                    <input type="text" value="" placeholder="Verse" name="historicVerse" />
                                
                                </li>
                           
                        </ul>
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" name="historic_admonition"/>
                            <label>Reading</label>
                            <input type="text" for="reading" name="historic_reading"/>
                        </div>   
                        <div class="finalReading"></div>                         
                </div>




                <div class="col-md-3">
                    <?php
                        $prophets = array(
                            'Isaiah',
                            'Jeremiah',
                            'Lamentations',
                            'Ezekiel',
                            'Daniel',
                            'Hosea',
                            'Joel',
                            'Amos',
                            'Obadiah',
                            'Jonah',
                            'Micah',
                            'Nahum',
                            'Habakkuk',
                            'Zephaniah',
                            'Haggai',
                            'Zechariah',
                            'Malachi'
                        );
                    ?>
                    <h2>Prophets</h2>                    
                        <ul id="prophets">
                                                        
                                <li>
                                    
                                    <select id="prophets" name="prophets">
                                    <?php foreach($prophets as $Prophetic){
                                        echo '<option value="'.$Prophetic.'">'.$Prophetic.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" name="prophetic_chapter" placeholder="Chapter" />
                                    <input type="text" value="" name="prophetic_verse" placeholder="Verse" />
                                </li>
                            
                        </ul>                   
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" name="prophetic_admonition"/>
                            <label>Reading</label>
                            <input type="text" for="reading" name="prophetic_reading"/>
                       </div>                              
                </div>

                <div class="col-md-3">
                    <h2>Letters</h2>
                    <?php
                        $letters = array(
                            'Romans',
                            '1st Corinthians',
                            '2nd Corinthians',
                            'Galatians',
                            'Ephesians',
                            'Philppians',
                            'Colossians',
                            '1st Thessalonians',
                            '2nd Thessalonians',
                            '1st Timothy',
                            '2nd Timothy',
                            'Titus',
                            'Philemon',
                            'Hebrews',
                            'James',
                            '1st Peter',
                            '2nd Peter',
                            '1st John',
                            '2nd John',
                            '3rd John',
                            'Jude',
                            'Revelation'
                        );
                    ?>
                    <ul id="letters">
                                                 
                                <li>
                                    
                                    <select id="letters" name="letters">
                                    <?php foreach($letters as $letter){
                                        echo '<option value="'.$letter.'">'.$letter.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" name="letters_chapter" />
                                    <input type="text" value="" placeholder="Verse" name="letters_verse" />
                                </li>
                                
                            
                    </ul>
                    
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" name="letters_admonition"/>
                            <label>Reading</label>
                            <input type="text" for="reading" name="letters_reading" />
                        </div>                          
                </div>


                <div class="col-md-3">
                    <?php
                        $gospels = array(
                            
                            'Matthew',
                            'Mark',
                            'Luke',
                            'John'
                        );
                    ?>
                    <h2>Gospels</h2>
                    <ul id="gospels">
                                                  
                                <li>
                                    
                                    <select id="gospels" name="gospels">
                                    <?php foreach($gospels as $gospel){
                                        echo '<option value="'.$gospel.'">'.$gospel.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" name="gospels_chapter" />
                                    <input type="text" value="" placeholder="Verse" name="gospels_verse" />
                                </li>
                            
                    </ul>

                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" name="gospels_admonition"/>
                            <label>Reading</label>
                            <input type="text" for="reading" name="gospels_reading"/>
                        </div>
                        
       
                </div>

                
            </div>
        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var historic = ['Genesis','Exodus','Leviticus','Numbers','Deuteronomy','Acts', 'Joshua', 'Judges', 'Ruth','1st Samuel', '2nd Samuel', '1st Kings', '2nd Kings', '1st Chronicles', '2nd Chronicles', 'Ezra', 'Esther'];
            var prophets = ['Isaiah','Jeremiah','Lamentations','Ezekiel','Daniel','Hosea','Joel','Amos','Obadiah','Jonah','Micah','Nahum','Habakkuk','Zephaniah','Haggai','Zechariah','Malachi'];
            var gospels = ['Matthew','Mark','Luke','John'];
            var letters = ['Romans','1st Corinthians','2nd Corinthians','Galatians','Ephesians','Philppians','Colossians','1st Thessalonians','2nd Thessalonians','1st Timothy','2nd Timothy','Titus','Philemon', 'Hebrews','James','1st Peter','2nd Peter','1st John','2nd John','3rd John','Jude','Revelation'];
            $(document).ready(function(){
                var HistoricReadingSelected = $('#history option:selected').val();
                $('.finalReading').text(HistoricReadingSelected);
                console.log(HistoricReadingSelected);
                //$('li.add').hide();
                $('.addmore').click(function(event){
                    event.preventDefault;
                    $('li.add').show();
                });
            });
        </script>

    </body>
</html>
