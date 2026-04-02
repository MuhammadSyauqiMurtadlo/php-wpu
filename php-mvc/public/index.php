<?php
if (!session_id()) session_start();


require_once '../app/init.php';

$app = new App();

// CATATAN PENTING : Fitur Edit dan fitur Searching masih belum bisa berfungsi normal (27-02-2024)