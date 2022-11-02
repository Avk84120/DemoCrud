<?php
$conn=new mysqli('127.0.0.1' , 'root' , 'root' , 'crudoperation');
if($conn){
    echo ' ';
}else
{
    die(mysqli_error($conn));
}
