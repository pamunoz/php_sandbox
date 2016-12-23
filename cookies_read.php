<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <?php
            // the user control the cookie, so we need data validation
            $var1 = 0;
            if (isset($_COOKIE['test'])) {
                $var1 = $_COOKIE['test'];
            }
            $var1 = $_COOKIE['test'];
            echo $var1;
        ?>
        <?php 
            // this will delete the cookie
            // we can set the value to something mininless 
            // or set the duration to the past
            setcookie('test', 0, time()-(60*60*24*7) ); 
        ?>
    </body>
</html>

