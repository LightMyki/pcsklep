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
    <form action="wyszukiwanie.php" method="post">
    <h1>Wyszukiwanie Przepisu</h1>

    <a>Po tytule:<input type="text" placeholder="tytuł" name="tytulw"></a>
    <a>Po kategori: </a><select name="kategoriaw" id="select">
        <option name="Brak">Brak</option>
        <option name="zupaw">zupa</option>
        <option name="plackiw">placki</option>
        <option name="miesow">mieso</option>
pp
    </select>
    
    <input type="submit" value="Szukaj" >
    <br>
    <a href="index.html">Powrót do strony głównej</a>
    </form>

</body>
</html>