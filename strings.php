<html>
    <head>
        <title>Strings</title>
    </head>
    <body>
        
        <?php 
        // we can add html tags in strings, like br tags
            echo "Hello World<br />";
            echo 'Hello World<br />';
            $my_variable = "Hello World";
            echo $my_variable;
            echo "<br />";
            echo $my_variable . " Again";
        ?>
        <br />
        <?php
            echo "$my_variable Again";
            // correct way to insert variables inside strings
            echo "{$my_variable} Again"
        ?>
    </body>
</html>