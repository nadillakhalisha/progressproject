<?php 
session_start();
$page = ''; // Initialize the $page variable

if (isset($_GET['x']) && $_GET['x']=='home'){
    $page = "home.php";
    include "main.php";
    if (isset($_GET['x']) && $_GET['x'] == 'admin') {
        if ($_SESSION['level_healthpoli'] == 1) {
            $page = "admin.php";
            include "main.php";
        } else {
            $page = "admin.php";
            include "main.php";
        }
    }
}elseif(isset($_GET['x']) && $_GET['x']=='konselor'){
    $page = "konselor.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='admin'){
    $page = "admin.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='mahasiswa'){
    $page = "mahasiswa.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='pantaukesehatan'){
    $page = "pantaukesehatan.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='pantaumakanan'){
    $page = "pantaumakanan.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='pantaufisik'){
    $page = "pantaufisik.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='edukasi'){
    $page = "edukasi.php";
    include "main.php";
}elseif(isset($_GET['x']) && $_GET['x']=='login'){
    include "login.php";
}elseif(isset($_GET['x']) && $_GET['x']=='logout'){
    include "proses/proses_logout.php";
}else{
    $page = "home.php"; // Ensure $page is always defined
    include "main.php";
}
?>