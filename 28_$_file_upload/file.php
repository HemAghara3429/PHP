<?php

if($_FILES['fileUpload']){
    $path=$_FILES['fileUpload']['name'];
    echo $path;
}

?>