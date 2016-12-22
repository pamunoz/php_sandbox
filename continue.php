<html>
    <head>
        <title>Loops: continue</title>
    </head>
    <body>
        <?php
            for ($count = 0; $count <= 10; $count++) {
                if ($count == 5) {
                    // this means loop back to the top
                    continue;
                }            
                echo $count . ", ";
            }
        ?>
        <br/>
    </body>
</html> 