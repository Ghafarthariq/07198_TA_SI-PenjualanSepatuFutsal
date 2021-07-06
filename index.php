<?php

//koneksi
require_once("koneksi.php");

/**Memanggil Model */
require_once("model/authmodel.php");

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {

    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new authmodel(); // untuk inisialisasi
        if ($aksi == 'view') {
            $auth->index();
        }
        else {
            header("location: index.php?page=view&aksi=login");
        }
        }
    }
