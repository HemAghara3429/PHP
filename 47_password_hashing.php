<?php

//Password Hashing is the process of converting a password into a secure, unreadable string (called a hash).

/*

| Function                | Purpose                            |
| ----------------------- | ---------------------------------- |
| password_hash()         | Create a password hash             |
| password_verify()       | Verify the password                |
| password_needs_rehash() | Check if password should be rehashed 

*/


//create a  hash password.

$password="123456";

$hashpassword=password_hash($password,PASSWORD_DEFAULT);
echo "Hash Password: ".$hashpassword;


//verify the password.

if(password_verify($password,$hashpassword)){
    echo "<br>Password is valid";
}else{
    echo "<br>Password is invalid";
}
?>