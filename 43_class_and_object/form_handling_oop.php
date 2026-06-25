<?php

if(isset($_POST['submit'])){

   class Form{

    function getName($name){
        echo "Your name is: ".$name;
    }
    
   }

   $f1=new Form();
   $f1->getName($_POST['name']);
}
?>



<form action="" method="post">

<input type="text" name="name" placeholder="Enter your name"><br><br>

<button type="submit" name="submit">Submit</button>

</form>