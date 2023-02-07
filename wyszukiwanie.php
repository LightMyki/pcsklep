<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylstrona.css">
    <title>Document</title>
</head>
<body>
    

<?php


$polaczenie=new mysqli("localhost","root","","stronadodatkowa");
if($polaczenie->connect_errno!=0){
    echo "Error: ".$polaczenie->connect_errno;
}else {
$tytulw=$_POST["tytulw"];
$kategoriaw=$_POST["kategoriaw"];


if($tytulw==null && $kategoriaw!='Brak'){

$rezultat1=$polaczenie->query("SELECT tytuł,kategoria,opis FROM `przepisy` WHERE kategoria='$kategoriaw';");
    if($rezultat1->num_rows>0){
        while($row1=$rezultat1->fetch_assoc())
        echo "Tytuł: ".$row1['tytuł']."<br>"."Kategoria: ".$row1['kategoria']."<br>"."Opis: ".$row1['opis']."<br><br>";
        }


}
if($tytulw!=null && $kategoriaw=='Brak'){

$rezultat2=$polaczenie->query("SELECT tytuł,kategoria,opis FROM `przepisy` WHERE tytuł='$tytulw';");
    if($rezultat2->num_rows>0){
        while($row2=$rezultat2->fetch_assoc())
        echo "Tytuł: ".$row2['tytuł']."<br>"."Kategoria: ".$row2['kategoria']."<br>"."Opis: ".$row2['opis']."<br><br>";
        }

}

if($tytulw!=null && $kategoriaw!='Brak'){

$rezultat3=$polaczenie->query("SELECT tytuł,kategoria,opis FROM `przepisy` WHERE tytuł='$tytulw' AND kategoria='$kategoriaw';");
if($rezultat3->num_rows>0){
    while($row3=$rezultat3->fetch_assoc())
    echo "Tytuł: ".$row3['tytuł']."<br>"."Kategoria: ".$row3['kategoria']."<br>"."Opis: ".$row3['opis']."<br><br>";
}

}
if($tytulw==null && $kategoriaw=='Brak'){

    echo "Podaj tytuł albo kategorie";

    }
}


echo '<br><a href="szukanie.php">Powrót</a>';

?>
</body>
</html>