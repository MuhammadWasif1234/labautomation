<?php 

$server = "localhost";
$UserNmae = "root";
$Password = "";
$Database = "e-project";

$connection = mysqli_connect($server,$UserNmae,$Password,$Database);
if ($connection) {
}

else {
    die("Error". mysqli_connect_error());
}
?>