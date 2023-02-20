<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dodawanie do magazynu</h1>
<br>


<form action="" method="get">
    <label>Nazwa: </label>
    <input type="text" name="nameadd" placeholder="Add Name">

<br>
<br>
    <label>Kategoria: </label>
    <select name="selectadd" id="">
        <option value="WybierzKategorie">WybierzKategorie</option>
        <option value="motherboard">motherboard</option>
        <option value="cpu">cpu</option>
        <option value="graphicCard">graphic-card</option>
    </select>

<br>
<br>
    <label>Checkbox: </label>
    <select name="checkadd" id="">
        <option value="checkbox">checkbox</option>
        <option value="1">1</option>
        <option value="0">0</option>
    </select>

<br>
<br>
    <label>Producent: </label>
    <select name="produceradd" id="">
        <option value="producer">Producent</option>
        <option value="intel">intel</option>
        <option value="Asus">Asus</option>
        <option value="Msi">Msi</option>
        <option value="nvidia">nvidia</option>
    </select>

<br>
<br>
    <label>Ilość: </label>
    <input type="number" name="quantityadd" placeholder="Add quantity">

<br>
<br>

    <label>Link: </label>
    <input type="text" name="linkadd" placeholder="Add Link">

<br>
<br>
    <input type="submit" value="Add">
    <input type="reset" id="ResetowanieDodawanieMagazyn">
</form>


<?php
if(@$_GET['nameadd']!=null) {
    
    include 'dodawaniesql.php';

}

?>
<br>
<br>
    <a href="menu.html">Back</a>

</body>
</html>