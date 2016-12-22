<html>
    <head>
        <title>Strings Functions</title>
    </head>
    <body>
        
        <?php 
            $firstString = "The quick brown fox";
            $secondString = " jumped over the lazy dog.";
        ?>
        <?php
            $thirdString = $firstString;
            $thirdString .= $secondString;
            echo $thirdString;
        ?>
        <br />
        Lowercase: <?php echo strtolower($thirdString); ?><br />
        Uppercase: <?php echo strtoupper($thirdString); ?><br />
        Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
        Uppercase words: <?php echo ucwords($thirdString); ?><br />
    </body>
</html>