<html>
    <head>
        <title>Functions 2</title>
    </head>
    <body>
        
        <?php 
            // using global
            $bar = "outside";
            function foo() {
                global $bar;
                $bar = "inside";
            }
            foo();
            echo $bar . "<br />";
        ?>
        <br />
        <?php 
            // using local variables, arguments and return values
            $bar = "outside";
            function foo2($var) {
                $var = "inside";
                return $var;
            }
            $bar = foo2($bar);
            echo $bar . "<br />";
        ?>
        <br />
        <?php 
            // ====== Default Values ============
            function paint($color="red") {
                echo "The color of the room is {$color}.<br />";
            }
            paint();
            paint("blue");
        ?>
        
        
    </body>
</html>