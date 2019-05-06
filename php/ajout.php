<!DOCTYPE html>
<html>
<head>
<title>Ajout produits</title>
<meta charget="UTF-8">
<link rel="stylesheet" href="auth.css">
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
<center><h1  style=font-family:fantasy>Ajouter un produit</h1></center>
<form action="ajout.php" method="POST" style=margin-left:300px>
<div class="form-group row">
    <label for="inputnom3" class="col-sm-2 col-form-label"><strong>Nom produit:</strong></label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="entrer le nom" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Quantité du produit:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="quanti" placeholder="entrer la quantité" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Prix produit:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="prix" placeholder="entrer le prix" style=width:50%>
    </div>
  </div>

 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
    </div>
  </div>
</form>
<?php
    if(isset($_POST['ajout'])){
      $list=array(
        array('lait de corps', 10, 8000,''),
        array('parfum',30, 10000,''),          
        array('gel de douche', 3, 2500,''), 
        array('déodorant', 8, 1500,''),
        array('vernis à ongle', 12, 100,''),
        array('savon', 7, 2000,''),
        array( 'démélant',20, 3500,),
        array( 'shampoing pour cheveux',50,5000,'')
    );
/*$list=array(
    array('voiture',10,100000,''),
    array('moto',9,50000,''),
    array('camion',20,500000,'')
);*/


    if($_POST['nom']!=" "){
array_push($list,(array(/*'$list[$i][1]'=>*/$_POST['nom'], 
    /*'$list[$i][2]'=>*/$_POST['quanti'],
     /*'$list[$i][3]'=>*/$_POST['prix'])));
    }

    ?>
<table border='1' width="80%" class="table table-striped table-pink">
<tr>
<td>nom produit</td>
<td>quantité produit</td>
<td>prix produit</td>
<td>montant produit</td>
</tr>
<?php
/*for($i=0;$i<count($list);$i++){
    if($list[$i]["quant"]<10){
        echo "<tr>
        <td>" .$list[$i]["nom"]."</td>
        <td>" .$list[$i]["quant"]."</td>
        <td>" .$list[$i]["prix"]."</td>
        <td>" .$list[$i]["quant"]*$list[$i]["prix"]."</td>

        </tr>";

    }else{
        echo "<tr classs='rouge'>
        <td class='rouge'>" .$list[$i]["nom"]."</td>
        <td class='rouge'>" .$list[$i]["quant"]."</td>
        <td class='rouge'>" .$list[$i]["prix"]."</td>
        <td class='rouge'>" .$list[$i]["quant"]*$list[$i]["prix"]."</td>
        </tr>"; 
         
    }
}
    }*/
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
}
    
?>
</table>
</body>
</html>