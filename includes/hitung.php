<?php
// Ngecek tombol diklik
if(isset($_POST["hitung"]))
{
    // Ngambil data hasil input 
    $bilangan1 = $_POST["bilangan1"];
    $bilangan2 = $_POST["bilangan2"];
    $operator = $_POST["operator"];


    // Hasil input di kalkulasi disini
    if($operator === "tambah")
    {
        $hasil = $bilangan1 + $bilangan2;
    }
    else if($operator === "kurang")
    {
        $hasil = $bilangan1 - $bilangan2;
    }
    else if($operator === "kali")
    {
        $hasil = $bilangan1 * $bilangan2;
    }
    else if($operator === "bagi")
    {
        $hasil = $bilangan1 / $bilangan2;
    }
    else if($operator === "bagi2")
    {
        $hasil = $bilangan1 % $bilangan2;
        
    }

}
