
<?php

include_once 'connect.php';

$con=new mysqli($host,$db_user,$db_password,$db_name);

@$name=$_GET["name"];
@$category=$_GET["select"];


function pisanie($rezultat){

    if($rezultat->num_rows>0){
        @printf( 
        "<table border='1px solid black'>
        <tr>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
        </tr>",
        checkbox,id,category,producer,name,quantity,details
        );

        while($row=$rezultat->fetch_assoc()){
            printf(
                "<tr>
                    <td>%s</td>
                    <td name='identyfikator'>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td><a href='Detale.php'>Details</a></td>
                </tr>",
                $row["checkbox"],$row['id'],$row['category'],$row['producer'],$row['name'],$row['quantity']);

            }
        }else
        echo "Nie ma takiego elementu";
}






if($name==null && $category!='WybierzKategorie'){
     $rezultat=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE category='$category';");
     pisanie($rezultat);
}
    
if($name!=null && $category=='WybierzKategorie'){
    
    $rezultat=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE name LIKE '%$name%';");
    pisanie($rezultat);
    }
    
if($name!=null && $category!='WybierzKategorie'){
    
    $rezultat=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE name LIKE '%$name%' AND category='$category';");
    pisanie($rezultat);
    }
if($name==null && $category=='WybierzKategorie'){
    
        echo "Podaj tytuł albo kategorie";
    }

?>

</table>
