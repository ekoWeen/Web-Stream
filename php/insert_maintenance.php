<?php
    $con = mysqli_connect('127.0.0.1', 'root', '');
    
    if (!$con)
    {
        echo 'Tidak Tersambung ke Server';
    }

    if (!mysqli_select_db($con, 'database_stream'))
    {
        echo 'Database Not Selected';
    }

    $Nama_Surveyor = $_POST['Nama_Surveyor'];
    $Kode_Angka_QR = $_POST['Kode_Angka_QR'];
    $Nama_ODP = $_POST['Nama_ODP'];
    $Port_ODP = $_POST['Port_ODP'];
    $No_Telpon_Pelanggan = $_POST['No_Telpon_Pelanggan'];
    $SN_ONT = $_POST['SN_ONT'];

    $sql = "INSERT INTO maintenance (Nama_Surveyor, Kode_Angka_QR, Nama_ODP, Port_ODP, No_Telpon_Pelanggan, SN_ONT) VALUES ('$Nama_Surveyor', '$Kode_Angka_QR', '$Nama_ODP', '$Port_ODP', '$No_Telpon_Pelanggan', '$SN_ONT')";

    if (!mysqli_query($con, $sql))
    {
        echo 'Data Gagal Dimasukkan';
    }

    else
    {
        echo 'Data berhasil dimasukkan. Halaman akan direfresh dalam 5 detik.';
    }

header("refresh:5; url=maintenance.html");





?>