<?php
// Ngecek tombol diklik
if(isset($_POST["hitung"]))
{
    // Ngambil data hasil input 
    $bilangan1 = $_POST["bilangan1"];
    $bilangan2 = $_POST["bilangan2"];
    $operator = $_POST["operator"];


    // Hasil input di kalkulasi disini
    if($operator === "+")
    {
        $hasil = $bilangan1 + $bilangan2;
    }
    else if($operator === "-")
    {
        $hasil = $bilangan1 - $bilangan2;
    }
    else if($operator === "*")
    {
        $hasil = $bilangan1 * $bilangan2;
    }
    else if($operator === "/")
    {
        $hasil = $bilangan1 / $bilangan2;
    }
    else if($operator === "%")
    {
        $hasil = $bilangan1 % $bilangan2;
        
    }

}
