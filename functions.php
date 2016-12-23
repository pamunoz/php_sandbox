<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        
        <?php 
            function say_hello(){
                echo "Hello World!<br />";
            }
            say_hello();
            function say_hello2($word){
                echo "Hello {$word}!<br />";
            }
            say_hello2("Mother fucker");
            
            // using a already defined variable
            $name = "John Doe";
            say_hello2($name);
            
            function say_hello3($greeting, $target, $punctuation) {
                echo $greeting . ", " . $target . $punctuation . "<br />";
            }
            say_hello3("Hello", $name, "!!!!!!!!");
        ?>
        <br/>
        <?php
            function addition($val1, $val2) {
                $sum = $val1 + $val2;
                return $sum;
            }
            $new_val = addition(3, 4);
            echo $new_val;
            
            function add_subt($val1, $val2) {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                $result = array($add, $subt);
                return $result;
            }
            $result_array = add_subt(10, 5);
            echo "Add: " . $result_array[0];
            echo "Subst: " . $result_array[1];
        ?>
    </body>
</html>