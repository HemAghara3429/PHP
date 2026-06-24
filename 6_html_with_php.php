<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $name="hem Aghara";
    $age=21;
    
    ?>

    <h1>my real name is <?php echo $name; ?></h1>
   <h1>my age is <?php echo $age; ?></h1> 



   <?php
   
   $h2_color="red"; //when the need here change the color name here this variable use with multiple h2 tag here just this variables change.
   
   ?>

   <h2 style='color:<?php echo $h2_color; ?>'>my name is <?php echo $name; ?></h2>
   <h2 style='color:<?php echo $h2_color; ?>'>my name is <?php echo $name; ?></h2>


</body>
</html>

