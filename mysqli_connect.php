<?php 
Define('DB_USER','root');
Define('DB_PASSWORD','');
Define('DB_HOST','localhost');
Define('DB_NAME','simpledb');
try{
    $dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    mysqli_set_charset($dbcon,'utf8');

}
catch(Exception $e){
    $e->getMessage();
    print "The sistem is busy please try again later.";
}
?>