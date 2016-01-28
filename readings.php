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
        <h1 class="center"><?php echo $_SESSION['word']; ?></h1>
        <?php 
            $categories = array('Historic','Prophetic','Letters','Gospels');
            for ($c = 0;$c < 4;$c++){ ?>
                <div class="col-md-3">
                </div>

            <?php }

        ?>
        <form action="http://vagrant1.mmidigital.com/readings/confirmation.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="title">Historic</h2>
                    <?php
                        $historic = array(
                            '',
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
                        <ol id="historic">
                            <?php for ($h = 0; $h < 10; $h++){ ?>                            
                                <?php if($h <= 0){
                                    echo '<li class="view">';
                                }else{
                                    echo '<li class="add">';
                                }
                                ?>
                                    <input type="radio" value="<?php echo $h; ?>" name="historic" />
                                    <select id="history">
                                        <?php foreach($historic as $history){
                                            echo '<option value="'.$history.'">'.$history.'</option>';
                                        } ?>
                                    </select>
                                    <input type="number" value="" placeholder="Chapter" />
                                    <input type="number" value="" placeholder="Verse" />
                                
                                </li>
                            <?php }  ?>
                        </ol>
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" />
                            <label>Reading</label>
                            <input type="text" for="reading" />
                        </div>   
                        <div class="finalReading"></div>                         
                </div>




                <div class="col-md-3">
                    <?php
                        $prophets = array(
                            '',
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
                        <ol id="prophets">
                            <?php for ($p = 0; $p < 10; $p++){ ?>                            
                                <li>
                                    <input type="radio" value="<?php echo $p; ?>" name="prophets" />
                                    <select id="history">
                                    <?php foreach($prophets as $Prophetic){
                                        echo '<option value="'.$Prophetic.'">'.$Prophetic.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" />
                                    <input type="text" value="" placeholder="Verse" />
                                </li>
                            <?php }  ?>
                        </ol>                   
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" />
                            <label>Reading</label>
                            <input type="text" for="reading" />
                       </div>                              
                </div>

                <div class="col-md-3">
                    <h2>Letters</h2>
                    <?php
                        $letters = array(
                            '',
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
                    <ol id="letters">
                        <?php for ($l = 0; $l < 10; $l++){ ?>                            
                                <li>
                                    <input type="radio" value="<?php echo $l; ?>" name="letters" />
                                    <select id="history">
                                    <?php foreach($letters as $letter){
                                        echo '<option value="'.$letter.'">'.$letter.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" />
                                    <input type="text" value="" placeholder="Verse" />
                                </li>
                                
                            <?php }  ?>
                    </ol>
                    
                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" />
                            <label>Reading</label>
                            <input type="text" for="reading" />
                        </div>                          
                </div>


                <div class="col-md-3">
                    <?php
                        $gospels = array(
                            '',
                            'Matthew',
                            'Mark',
                            'Luke',
                            'John'
                        );
                    ?>
                    <h2>Gospels</h2>
                    <ol id="gospels">
                        <?php for ($g = 0; $g < 10; $g++){ ?>                            
                                <li>
                                    <input type="radio" value="<?php echo $g; ?>" name="letters" />
                                    <select id="history">
                                    <?php foreach($gospels as $gospel){
                                        echo '<option value="'.$gospel.'">'.$gospel.'</option>';
                                    } ?>
                                    </select>
                                    <input type="text" value="" placeholder="Chapter" />
                                    <input type="text" value="" placeholder="Verse" />
                                </li>
                            <?php }  ?>
                    </ol>

                        <div class="form-group">
                            <label>Admonition</label>
                            <input type="text" for="admonition" />
                            <label>Reading</label>
                            <input type="text" for="reading" />
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
