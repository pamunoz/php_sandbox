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
            say_hello3("Hello", $name, "!!!!!!!!")
        ?>
        <br/>
    </body>
</html>