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
        ?>
        <br/>
    </body>
</html>