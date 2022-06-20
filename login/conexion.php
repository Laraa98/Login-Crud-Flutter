<?php
$connect= new mysqli("localhost","root","","login");

if ($connect) 
{
 echo "Conectado";
}
else
{
    echo "ERROR";
    exit();
}

?>