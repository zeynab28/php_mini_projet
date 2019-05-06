<!DOCTYPE html>
<html>
    <head>
        <title>Recherche produit</title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
         body{background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;}
        .rouge{
            background-color:red;
        }
        
    </style>
    </head>
    <body>
      <center><h1 style=font-family:fantasy>Rechercher un produit</h1></center>  
    <form class="form-inline" action=recherche.php method="POST">
    <div class="form-group mx-sm-3 mb-2" id="name">
    <label for="inputPassword2" class="sr-only"><strong>Nom:</strong></label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="entrer le nom du produit">
  </div> 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix maximal</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_min" placeholder="prix minimal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix maximal:</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_max" placeholder="prix maximal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Quantité</label>
    <input type="number" class="form-control" id="inputPassword2" name="quantite" placeholder="quantité">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="recherche" >Recherche</button>
</form>
<?php
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

<table border='1' width="80%" style=margin-left:20px>
<tr>
<td><strong>Nom du produit</strong></td>
<td><strong>Quantité du produit</strong></td>
<td><strong>Prix du produit</strong></td>
<td><strong>Montant du produit</strong></td>
</tr>
<?php

/*for($i=0; $i<count($list); $i++){
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
      

}*/


if(!empty($_POST["quantite"])){
    $val=$_POST["quantite"];
    for($i=0;$i<count($list);$i++){
        echo "<tr>";

        for($j=0;$j<count($list[$i]);$j++){
          $list[$i][3]=$list[$i][1]*$list[$i][2];
            if($val<=$list[$i][1]){
                echo "<td>".$list[$i][$j]."</td>";
            }
        }
        echo "</tr>";
 
    }
}

if(!empty($_POST["nom"])){
  $val1=$_POST["nom"];
  for($i=0;$i<count($list);$i++){
    echo "<tr>";
    for($j=0;$j<count($list[$i]);$j++){
      $list[$i][3]=$list[$i][1]*$list[$i][2];
      if($val1==$list[$i][0]){
        echo "<td>".$list[$i][$j]."</td>";
       
      }
    }
    echo "</tr>";
  }
}

if(!empty($_POST["prix_min"])){
  $val2=$_POST["prix_min"];
  for($i=0;$i<count($list);$i++){
      echo "<tr>";

      for($j=0;$j<count($list[$i]);$j++){
        $list[$i][3]=$list[$i][1]*$list[$i][2];
          if($val2<=$list[$i][2]){
              echo "<td>".$list[$i][$j]."</td>";
          }
      }
      echo "</tr>";

  }
}
?>
</table>
    </body>
</html>