require 'functions.php';
$siswa = query("SELECT * FROM tb_siswa");

<?php 
//koneksi ke database 
//(host, user, password, nama database)
$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>