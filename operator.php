<?php

//operator penggabung string
// .

$nama_depan = "nailah";
$nama_belakang = "mahira";

echo $nama_depan ."  ". $nama_belakang;
echo "<p>";

//operator aritmatika
// + - * / %
$x = 7;
$y = 2;
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<p>";

//operator assignment
// =, +=, -=, *=, %=, /=, .=
$x =10;
$x /= 5;
echo $x;
echo "<br>";

$nama = "naira";
$nama .= "xavie";
echo $nama;
echo "<p>";

//oerator perbandingan
//<, >, <=, >=, ==, !=
//var_dumb = menampilkan informasi dri variable
var_dump(1 == "1");
echo "<p>";

//operator identitas
//===, !==
var_dump(1 !=="1");
echo "<P>";

//logika
// && || !
// && (dan) dua duanya hrus bener
$x = 20;
var_dump($x < 10 && $x % 2 ==0);

echo "<p>";
// || (atau) = salah satu bener
var_dump($x = 20 || $x % 2 ==6);







?>