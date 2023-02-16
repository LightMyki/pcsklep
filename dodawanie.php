<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="menu.html">Back</a>

<form action="" method="get">
    <input type="text" name="nameadd" placeholder="Add Name">

    <select name="selectadd" id="">
        <option value="WybierzKategorie">WybierzKategorie</option>
        <option value="motherboard">motherboard</option>
        <option value="cpu">cpu</option>
        <option value="graphicCard">graphic-card</option>
    </select>

    <select name="checkadd" id="">
        <option value="checkbox">checkbox</option>
        <option value="1">1</option>
        <option value="0">0</option>
    </select>

    <select name="produceradd" id="">
        <option value="producer">producer</option>
        <option value="intel">intel</option>
        <option value="Asus">Asus</option>
        <option value="Msi">Msi</option>
        <option value="nvidia">nvidia</option>
    </select>

    <input type="number" name="quantityadd" placeholder="Add quantity">

    <input type="text" name="detailsadd" placeholder="Add link">

    <input type="submit" value="Add">
</form>


<?php
if(@$_GET['nameadd']!=null) {
    
    include 'dodawaniesql.php';

}

?>


</body>
</html>