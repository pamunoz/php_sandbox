<html>
    <head>
        <title>Logical Expressions</title>
    </head>
    <body>
        
        <?php
            $a = 3;
            $b = 4;
            if ($a > $b) {
                echo "a is larger than b";    
            } elseif($a == $b) {
                echo "a equals b";
            } else {
                echo "a is smaler than b";
            }
        ?>
        <br/>
        <?php
            $c = 1;
            $d = 20;
            if (($a > $b) && ($c > $d)) {
                echo "a is larger than b AND";
                echo "c is larger than d";
            }
            if (($a > $b) || ($c > $d)) {
                echo "a is larger than b OR";
                echo "c is larger than d";
            } else {
                echo "neither a is larger than b or c is larger than d";
            }
        ?>
        <br/>
        <?php
            if (!isset($a)) {
                $a = 100;
            }
            echo $a;
        ?>
        <br/>
        <?php
            if (is_int($a)) {
                settype($a, "string");
            }
            echo gettype($a);
        ?>
        
    </body>
</html> 