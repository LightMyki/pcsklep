<?php

include_once 'connect.php';
$con=new mysqli($host,$db_user,$db_password,$db_name);
@$nameadd=$_GET['nameadd'];
@$categoryadd=$_GET['selectadd'];
@$checkbox=$_GET['checkadd'];
@$produceradd=$_GET['produceradd'];
@$quantityadd=$_GET['quantityadd'];
@$detailsadd=$_GET['detailsadd'];


if($nameadd!=null && $categoryadd!="WybierzKategorie" && $checkbox!="checkbox" && $produceradd!="producer" && $quantityadd!=null && $detailsadd!=null){
    echo "Pomyślnie dodano element";
    $rezultatadd=$con->query("INSERT INTO `warehouse`(`checkbox`, `id`, `category`, `producer`, `name`, `quantity`, `link`) VALUES ('$checkbox','','$categoryadd','$produceradd','$nameadd','$quantityadd','$detailsadd')");
}else
    echo "Podaj wszystkie wartości" 

?> 