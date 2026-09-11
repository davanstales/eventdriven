<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Pages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor= "#f8f9fa">

    <font color="red" size=8 face="Bodoni MT Black">
           Youtubers
    </font><br>

    <div id="navContainer">
        <ul id="navList">
            <li>
                 <a href="index.php?page=1" id="current">MrBeast</a>
            </li>
            <li>
                 <a href="index.php?page=2">PewDiePie</a>
            </li>
            <li>
                 <a href="index.php?page=3">Markiplier</a>
            </li>
            <li>
                 <a href="index.php?page=4">8-BitRyan</a>
            </li>
            <li>
                 <a href="index.php?page=5">DanTDM</a>
            </li>
        </ul>
    </div>
    <br>

    <?php
        $page = $_GET['page'];
        switch ($page){
            case '1':
                 $pageContent = "MrBeast";
                 $pageText = "Over 400 million subscribers";
                  $image = "images/mrbeast.jfif";
                break;
            
            case '2':
                 $pageContent = "PewDiePie";
                 $pageText = "Over 110 million subscribers";
                  $image = "images/pewdiepie.jpg";
                break;
            
            case '3':
                 $pageContent = "Markiplier";
                 $pageText = "Over 38 million subscribers";
                  $image = "images/markiplier.jfif";
                break;
            
                case '4':
                 $pageContent = "8-BitRyan";
                 $pageText = "Over 3 million subscribers";
                 $image = "images/8bitryan.jfif";
                break;
            
                case '5':
                 $pageContent = "DanTDM";
                 $pageText = "Over 29 million subscribers";
                 $image = "images/dantdm.jfif";
                break;
        }

        echo '<h2>'. $pageContent. '</h2>';
        echo '<img src = " '.$image. '"style=width:250px; height:200px; hspace=10 border=20 align="left"" >';
        echo '<h3>' .$pageText. '</h3>';
    ?>
    
</body>
</html>