<html>
    <head>
        <title>Booleans and NULL</title>
    </head>
    <body>
        
        <?php
            $bool1 = TRUE; 
            $bool2 = FALSE;
        ?><br/>
        
        $bool1: <?php echo $bool1 ?><br/>
        $bool2: <?php echo $bool2; ?><br/>
        <br/>
        <?php
            $var1 = 3;
            $var2 = "cat";
            $var4 = 0;
            $var5 = "0";
            $var6 = NULL;
        ?>
        $var1 is set: <?php echo isset($var1); ?><br/>
        $var2 is set: <?php echo isset($var2); ?><br/>
        $var3 is set: <?php echo isset($var3); ?><br/>
        <?php unset($var1); ?><br/>
        $var1 is set: <?php echo isset($var1); ?><br/>
        $var2 is set: <?php echo isset($var2); ?><br/>
        $var3 is set: <?php echo isset($var3); ?><br/>
        <br/>
        $var1 empty: <?php echo empty($var1); ?><br/>
        $var4 empty: <?php echo empty($var4); ?><br/>
        $var5 empty: <?php echo empty($var5); ?><br/>
        $var6 empty: <?php echo empty($var6); ?><br/>

       
    </body>
</html> 