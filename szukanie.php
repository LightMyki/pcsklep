<table border="1px solid black">
    <tr>
        <td>checkbox</td><td>id</td><td>category</td><td>producer</td><td>name</td><td>quantity</td><td>details</td>
    </tr>
<?php
$host="localhost";
$db_user="root";
$db_password="";
$db_name="pcsklep";
$con=new mysqli($host,$db_user,$db_password,$db_name);

@$name=$_POST["name"];
@$category=$_POST["select"];

if($name==null && $category!='WybierzKategorie'){

    $rezultat1=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE category='$category';");
        if($rezultat1->num_rows>0){
            while($row1=$rezultat1->fetch_assoc()){
            echo "<tr><td>".$row1['checkbox']."<td>".$row1['id']."<td>".$row1['category']."<td>".$row1['producer']."<td>".$row1['name']."<td>".$row1['quantity']."<td><a href=".$row1['link'].">Details</a></td>"."</tr>";
            $wypisz=`"<tr><td>".$row1['checkbox']."<td>".$row1['id']."<td>".$row1['category']."<td>".$row1['producer']."<td>".$row1['name']."<td>".$row1['quantity']."<td><a href=".$row1['link'].">Details</a></td>"."</tr>"`;
                header('location:Warehouse.php');
        }
        }
    
    
    }
    if($name!=null && $category=='WybierzKategorie'){
    
    $rezultat2=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE name LIKE '%$name%';");
        if($rezultat2->num_rows>0){
            while($row2=$rezultat2->fetch_assoc())
            echo "<tr><td>".$row2['checkbox']."<td>".$row2['id']."<td>".$row2['category']."<td>".$row2['producer']."<td>".$row2['name']."<td>".$row2['quantity']."<td><a href=".$row2['link'].">Details</a></td>"."</tr>";
            }
    
    }
    
    if($name!=null && $category!='WybierzKategorie'){
    
    $rezultat3=$con->query("SELECT checkbox,id,category,producer,name,quantity,link FROM `warehouse` WHERE name LIKE '%$name%' AND category='$category';");
    if($rezultat3->num_rows>0){
        while($row3=$rezultat3->fetch_assoc())
        echo "<tr><td>".$row3['checkbox']."<td>".$row3['id']."<td>".$row3['category']."<td>".$row3['producer']."<td>".$row3['name']."<td>".$row3['quantity']."<td><a href=".$row3['link'].">Details</a></td>"."</tr>";
    }
    
    }
    if($name==null && $category=='WybierzKategorie'){
    
        echo "Podaj tytuł albo kategorie";
    
        }
    


?>
</table>
<a href="warehouse.php">Back</a>