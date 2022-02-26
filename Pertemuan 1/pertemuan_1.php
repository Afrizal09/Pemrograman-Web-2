<?php
    $nama = 'Afrizal';
    $umur = 19;
    $berat = 55;

    echo 'Nama saya '.$nama.' umur saya '.$umur. ' berat saya '.$berat ;
    echo "<br />";
    echo "<h1 style='color:red'> Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
    echo "<br />";

    // variable sistem
    echo 'Dokumen Root'.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variable Konstan

    define('makanan', 'sunshi');
    define('makanan', 'jambu');
    
    echo "<h1 style= 'color:blue'> makanan </h1>";
?>