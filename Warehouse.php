<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="WarehouseStyle.css">

    <title>Document</title>

</head>
<body>
    <a href="menu.html">Powrót</a>
    <br>
    <a>Sposób wyszukiwania danych</a>
    <br>

    <br>
    <br>
    <?php
      
      $myVar="step1";
    ?>
<!--<form action="szukanie.php" method="post">-->
    <form action="" method="get">
        <label>Podaj Nazwe: </label>
    <input type="text" value="" placeholder="Podaj nazwe" id="text" name="name">
    <br>
    <br>
    <label>Podaj Kategorię: </label>
    <select name="select" id="sel">
        <option value="WybierzKategorie">WybierzKategorie</option>
        <option value="motherboard">motherboard</option>
        <option value="cpu">cpu</option>
        <option value="graphicCard">graphic-card</option>
    </select>
    <br>
    <br>
    <input type="submit" id="sub">
    <br>
    <br>
</form>
<?php
if(@$_GET['select']!=null) {
    
    include 'szukanie.php';

}
?>
<p id="wynik">
<script>
    let id=document.getElementById("Identyfikator").value;
    document.getElementById("Wynik").innerHTML=id;
</script>
</body>
</html>
