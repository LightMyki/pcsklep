<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylstrona.css">
    <title>Document</title>
</head>
<body>
<form action="" method="post" target>
    <h1>Dodawanie Przepisu</h1>
    <input type="text" placeholder="tytuł" name="tytul">

    <select name="kategoria" id="select">
        <option name="zupa">zupa</option>
        <option name="placki">placki</option>
        <option name="mieso">mieso</option>
        <a>tak</a>
    </select>

    <input type="text" placeholder="opis" name="opis">

    <input type="submit">
    </form>
    <?php

$polaczenie=@new mysqli("localhost","root","","stronadodatkowa");
if($polaczenie->connect_errno!=0){
    echo "Error: ".$polaczenie->connect_errno;
}else{
    @$tytul=$_POST["tytul"];
    @$kategoria=$_POST["kategoria"];
    @$opis=$_POST["opis"];
    if($tytul==null || $opis==null)
    echo "Podaj wartości";
    else $rezultat=$polaczenie->query("INSERT INTO `przepisy`(`id_przepisu`, `tytuł`, `kategoria`, `opis`) VALUES ('','$tytul','$kategoria','$opis')");
}
    ?>
    <br>
<a href="index.html">Przejscie na strone główna</a>

</body>
</html>