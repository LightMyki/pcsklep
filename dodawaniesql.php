<?php

include_once 'connect.php';
$con=new mysqli($host,$db_user,$db_password,$db_name);
@$nameadd=$_GET['nameadd'];
@$categoryadd=$_GET['selectadd'];
@$checkbox=$_GET['checkadd'];
@$produceradd=$_GET['produceradd'];
@$quantityadd=$_GET['quantityadd'];
@$detailsadd=$_GET['detailsadd'];
@$linkadd=$_GET['linkadd'];
$idadd=null;

if($nameadd!=null && $categoryadd!="WybierzKategorie" && $checkbox!="checkbox" && $produceradd!="producer" && $quantityadd!=null && $linkadd!=null){
    echo "Pomyślnie dodano element";
    $rezultatadd=$con->prepare("INSERT INTO `warehouse`(`checkbox`, `id`, `category`, `producer`, `name`, `quantity`, `link`) VALUES (?,?,?,?,?,?,?)");
    $rezultatadd->bind_param("issssis", $checkbox, $idadd, $categoryadd, $produceradd, $nameadd, $quantityadd, $linkadd );
    @$checkbox=$_GET['checkadd'];
    $idadd=null;
    @$categoryadd=$_GET['selectadd'];
    @$nameadd=$_GET['nameadd'];
    @$produceradd=$_GET['produceradd'];
    @$quantityadd=$_GET['quantityadd'];
    @$detailsadd=$_GET['detailsadd'];
    @$linkadd=$_GET['linkadd'];
    $rezultatadd->execute();
}else
    echo "Podaj wszystkie wartości" 

?> 
