<!DOCTYPE html>
<html>
    <head>
        <title>Liste produit</title>
        <meta charset="UTF-8">
        <link rek="stylesheet" href="boostrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style>
        .rouge{
            background-color:red;
        }
        
   body{background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;}
    </style>
    <body>
<center><h1 style=font-family:fantasy>La liste des produits</h1>
</center>
     <?php
/*$list=array(
    array("nom"=>'voiture',"quant"=>10,"prix"=>100000,"montant"=>''),
    array("nom"=>'moto',"quant"=>9,"prix"=>50000,"montant"=>''),
    array("nom"=>'camion',"quant"=>20,"prix"=>500000,"montant"=>'')
);*/

$list=array(
    array('eyeliner', 10, 8000,''),
    array('fond de teint',30, 10000,''),          
    array('mascara', 3, 2500,''), 
    array('beauty blender', 8, 1500,''),
    array('kit de pinceaux', 12, 100,''),
    array('palette de fard à paupiéres', 7, 2000,''),
    array( 'illuminateur',20, 3500,),
    array( 'fixateur',50,5000,'')
);
?>

<center><table border='1' width="80%" class="table table-striped table-dark">
<tr>
<td><strong>Nom du produit</strong></td>
<td><strong>Quantité du produit</strong></td>
<td><strong>Prix du produit</strong></td>
<td><strong>Montant du produit</strong></td>
</tr>
<?php
for($i=0; $i<count($list); $i++){
    echo "<tr>";
        $list[$i][3]=$list[$i][1]*$list[$i][2];
        for($j=0; $j<count($list[$i]); $j++){
            
            if($list[$i][1]<10){
                echo "<td class='rouge'>".$list[$i][$j]."</td>";
            }
            else{
                echo "<td>".$list[$i][$j]."</td>";
            }
            
        }echo "</tr>";
        

}

/*for($i=0;$i<count($list);$i++){
    if($list[$i]["quant"]<10){
        echo "<tr>
        <td>" .$list[$i]["nom"]."</td>
        <td>" .$list[$i]["quant"]."</td>
        <td>" .$list[$i]["prix"]."</td>
        <td>" .$list[$i]["quant"]*$list[$i]["prix"]."</td>

        </tr>";

    }else{
        echo "<tr class='rouge'>
        <td class='rouge'>" .$list[$i]["nom"]."</td>
        <td class='rouge'>" .$list[$i]["quant"]."</td>
        <td class='rouge'>" .$list[$i]["prix"]."</td>
        <td class='rouge'>" .$list[$i]["quant"]*$list[$i]["prix"]."</td>
        </tr>"; 
         
    }
}*/
     ?>
     </table></center>
   
    </body>
</html>