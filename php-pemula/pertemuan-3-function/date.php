<?php
// FUNCTION YANG ADA HUBUNGAN NYA DENGAN DATE DAN TIME !
// ?date = untuk menampilkan tanggal dengan format tertentu
echo date("l, D-M-Y H:i:s"); // date itu kurung nya harus di isi dengan parameter
// !l (hari), D/d (tanggal), m/M (bulan) Y (tahun)
// !jika ingin melihat versi lengapnya date, langsung kunjungi document PHP

// ?time
echo time(); //time itu parameter nya tidak harus di isi
//!UNIX TIMESTAMP / EPOCH time
// !detik yang sudah berlalu sejak 1 januari 1970

echo date("d M Y", time() - 60 * 60 * 24 * 100); //!maksudnya 100 hari kebelakang itu hari apa?

// ?mktime
// ?membuat sendiri detik
// ?mktime (0,0,0,0,0,0) => mktime itu parameter nya ada 6 dengan urutan : jam, menit, detik, bulan, tanggal, tahun

echo date("l", mktime(0, 0, 0, 2, 20, 2004)); //!maksudnya ini ulang tahun saya itu hari apa?

// ?strtotime
echo date("l", strtotime("20 feb 2004"));
