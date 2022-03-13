<?php
try{
    $vt = new PDO("mysql:host=localhost;dbname=yapistir;charset=utf8;", "root", "");
}catch(PDOExeption $error){
    echo $error->getMessage();
}
?>