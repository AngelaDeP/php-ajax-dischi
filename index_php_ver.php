<?php

require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>

        <div class="header-sec">
            <img class="logo" src="https://www.pngplay.com/wp-content/uploads/12/Spotify-Logo-Free-PNG.png" alt="">
        </div>

    </header>

    <main>

        <div class="bg-color">
            <div class="container">
                <div class="song-card" >

                    <?php

                        foreach($database as $disco) {

                            echo "<div class='card-content'>";
                            echo "<img src='". $disco['poster'] ."'>";
                            echo "<h1>". $disco['title'] ."</h1>";
                            echo "<span>". $disco['author'] ."</span>";
                            echo "<span>". $disco['year'] ."</span>";
                            echo "</div>";

                        }

                    ?>

                </div>
            </div>      
        </div>

    </main>
    
    
</body>
</html>