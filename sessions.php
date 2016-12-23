<?php
    // we need to start the sessions before we send any information
    // to the user's browser.
    session_start();
?>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <?php
            $_SESSION['name'] = "someone";
            $_SESSION['description'] = "very stupid";
        ?>
        <?php
            $name = $_SESSION['name'];
            $description = $_SESSION['description'];
            echo $name . " is " . $description;
        ?>
    </body>
</html>