<?php

//php filter:check the whether the value is valid or not.
//PHP provides the built-in function:filter_var()
// Improve application security.
// Validate the email format.
// Remove unwanted HTML tags.

/*

| Filter                  | Purpose                                                        |
| ----------------------- | -------------------------------------------------------------- |
| FILTER_VALIDATE_EMAIL   | Validate Email                                                 |
| FILTER_VALIDATE_URL     | Validate URL                                                   |
| FILTER_VALIDATE_INT     | Validate Integer                                               |
| FILTER_VALIDATE_FLOAT   | Validate Float                                                 |
| FILTER_SANITIZE_STRING* | Remove unwanted characters (*deprecated in newer PHP versions) |
| FILTER_SANITIZE_EMAIL   | Sanitize Email                                                 |
| FILTER_SANITIZE_URL     | Sanitize URL                                                   |

*/

//valid email or not
$email="hem@gmail.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Valid Email";
}else{
    echo "Invalid Email";
}

//valid url or not.

$url="https://www.google.com";

if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "<br>Valid URL";   

}else{
    echo "<br>Invalid URL";
}

//valid integer or not.

$int=100;

if(filter_var($int,FILTER_VALIDATE_INT)){
    echo "<br>Valid Integer";

}else{

    echo "<br>Invalid Integer";
}   

//valid float or not.

$float=10.5;

if(filter_var($float,FILTER_VALIDATE_FLOAT)){
    echo "<br>Valid Float";

}else{
    echo "<br>Invalid Float";

}

?>