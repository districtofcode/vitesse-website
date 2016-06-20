<?php

function dbstarter (){
    
    

    $dbname = "voetbal";
    $host = "localhost";
    
    //test user verander voor productiecode!!!!!
    $user = "root";
    $pass = "";


    $dbh = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    return $dbh;   
}
    


?>