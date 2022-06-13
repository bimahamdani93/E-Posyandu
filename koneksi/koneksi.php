<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "si_posyandu";
$koneksi = mysqli_connect($host, $username, $password, $database);

// if ($koneksi) {
//     debug_to_console("OK");
// } else {
//     debug_to_console("Server not connected");
// }


// function debug_to_console($data)
// {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);
//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }
