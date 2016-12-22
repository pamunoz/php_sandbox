<html>
    <head>
        <title>Arrays</title>
    </head>
    <body>
        
        <?php $array = array(4,8,15,16,23,42); ?>
        
        <?php echo $array[0]; ?>
        <?php $array2 = array(6,"fox","dog",array("x","y","z")); ?>
        <?php echo $array2[3][1]; ?>
        <?php $array2[3] = "cat"; ?>
         
        
        <br/>
         <?php echo $array2[3]; ?><br />
        <br/>
         <?php $array3 = array("first_name" => "Pablo", "last_name" => "Farías"); ?><br />
         <br/>
         <?php echo $array3["first_name"] . " " . $array3["last_name"]; ?><br />
         <br/>
         <!-- change the value of first name -->
         <?php $array3["first_name"] = "Larry"; ?><br />
         <br/>
         <?php echo $array3["first_name"] . " " . $array3["last_name"]; ?><br />
         <br/>
         <!-- a readeable format for arrays with the pre tag (no formating)-->
         <pre><?php print_r($array2); ?><br /></pre>
        
    </body>
</html>