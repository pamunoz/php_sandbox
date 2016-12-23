<html>
    <head>
        <title>Second Page</title>
    </head>
    <body>
        <?php
            print_r($_GET);
            $id = $_GET['id'];
            $name = $_GET['name'];
            echo "<strong>" . $id  . ": {$name}</strong>";
        ?>
        
    </body>
</html>