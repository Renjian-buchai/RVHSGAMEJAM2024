        <link rel = "stylesheet" href = "static/css/gallery.css">
        <!-- <script src = "static/js/library/gallery.js"></script> -->
    </head>
    
    <body>    
        <?php
            include "templates/navbar.tpl.php";
            // include "backend/pastGames.inc.php";
            include 'backend/gameFileUtils.inc.php';
            include_once 'backend/Defaults/connect.php';
        ?>
        <h1>Last Gamejam's Games</h1>
        <div id = "appendGames">
            <?php
            // sql query to select games from previous year only
            $pastYearGames = sqlQueryAllObjects(
                $conn,
                'SELECT gameId, name, description, genre, creators, link, year FROM pastgames WHERE year = (SELECT MAX(year) FROM pastgames)'
            );
            foreach ($pastYearGames as $game) {
                $thumbnail = convertToFileLink($game->name, $game->year, 1);
                ?>
                <div id='appendGame'>
                    <a class='game-logo-container' href='index.php?filename=game&gameId=<?php echo $game->gameId ?>'>
                        <img class='grid gameLogo' src='<?php echo $thumbnail ?>'>
                    </a>
                    <span class='grid name'><?php echo htmlspecialchars($game->name) ?></span>
                    <span class='grid creator'><?php echo htmlspecialchars($game->creators) ?></span>
                    <span class='grid genre'><?php echo htmlspecialchars($game->genre) ?></span>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
<html>