<?php 

// (01) setelah membuat data base maka menghubungkan kodingan dengan data base mysqli
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

// (02) Membuat variabel connection untuk membuat variabel penghubung ke data base
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$connection){
    die("Connection Failed");
}



?>