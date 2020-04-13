<?php
//Tipe data dan operator: semua variabel di php diawal dengan $
//Global constant
//$_REQUEST = POST/GET

//ASYNC, data yang diterima format x-www-form-urlencoded
parse_str($_REQUEST['dataku'], $hasil);

/* SYNC */
//$hasil = $_REQUEST;

/* SQL */
echo $sql = "insert into user values ('$hasil[namalengkap]', '$hasil[namapanggilan]')";
//select, update, delete

//Global constant advanced
//$_SESSION //$_COOKIE
//$_SERVER
//$_FILES

?>