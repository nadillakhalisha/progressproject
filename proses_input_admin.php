<?php
include "connect.php";

$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : "";
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['input_admin_validate'])) {
    // Query to insert data into the user table (without specifying ID, it will auto-increment)
    $query = "INSERT INTO user (nama, username, level, password) VALUES ('$name', '$username', '$level', '$password')";

    // Execute query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // If query execution is successful
        echo '<script>alert("Data berhasil dimasukkan"); window.location="../admin.php";</script>';
    } else {
        // If query execution fails
        echo '<script>alert("Data gagal dimasukkan"); window.location="../admin.php";</script>';
    }
}
?>