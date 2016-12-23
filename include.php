<html>
    <head>
        <title>Include</title>
    </head>
    <body>
        <?php
            // require throws an errow when it can't load the file
            // so it is more secure, when is essential to load that file
            //require ("included_functions.php");
            //include ("included_functions.php");
            // require the file onec
            require_once("included_functions.php");
        ?>
        <?php
            hello("Everyone");
        ?>
        
    </body>
</html>