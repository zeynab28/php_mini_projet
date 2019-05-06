<!doctype html>
<html >
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <style>
  #rouge{
    background-color:red;
  }
  body{
    background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;
  
    }
  </style>
  
</head>
<body>
  ...
  <center><h1>vous voulez modifier un produit:</h1></center>
  <form class="form-inline" action=modif.php method="POST">
    <div class="form-group mx-sm-3 mb-2" id="name">
    <label for="inputPassword2" class="sr-only"><strong>Nom:</strong></label>
    <input type="text" class="form-control" id="nom" name="produ" placeholder="entrer le nom du produit">
  </div> <br> <br>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"><strong>Prix:</strong> </label>
    <input type="text" class="form-control" id="inputPassword2" name="prix" placeholder="prix du produit">
  </div> <br> <br>
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"><strong>Quantité:</strong></label>
    <input type="number" class="form-control" id="inputPassword2" name="qte" placeholder="quantité">
  </div> <br> 
  <button type="submit" class="btn btn-primary mb-2" name="modif" >Modifier</button>
</form>

  <?php

    echo "<table border=1 width=100%>";
    echo "<thead>
    <tr>
    <th>nom</th> 
    <th>quantité</th>
    <th>prix</th>
    <th>montant</th>
    </tr>
    </thead>";
    
   
$prod= array(    1 => array('nom' => 'eyeliner', 'quantité' => 10, 'prix' => '8000','montant'=>'80000'),
                                   2 => array('nom' => 'fond de teint', 'quantité' => 30, 'prix' => '10000','montant'=>'300000'),          
                                   3 => array('nom' => 'mascara', 'quantité' => 3, 'prix' => 2500,'montant'=>7500), 
                                   4=> array('nom' => 'beauty blender', 'quantité' => 8, 'prix' => '1500','montant'=>'12000'),
                                   5 => array('nom' => 'kit pinceaux', 'quantité' => 7, 'prix' => '100','montant'=>'700'),
                                   6 => array('nom' => 'palette fard à paupiéres', 'quantité' => 12, 'prix' => 2000,'montant'=>'24000'),
                                   7 => array('nom' => 'illuminateur', 'quantité' => 20, 'prix' => 3500,'montant'=>'70000'),
                                   8 => array('nom' => 'fixateur', 'quantité' => 50, 'prix' => '5000','montant'=>'500000')
                                );
                               // if(isset ($_POST['modif'])){
                                    $modifi=$_POST['produ'];
                                    $qte=$_POST['qte'];
                                    $pu=$_POST['prix'];
                                    $montant=$qte*$pu;

                                    for($i=0; $i<count($prod); $i++)
                                    {
                                        if($modifi==$prod[$i]['nom'])
                                        {
                                           $prod[$i]['nom']=$_POST['produ'];
                                           $prod[$i]['quantité']=$_POST['qte'];
                                           $prod[$i]['prix']=$_POST['prix'];
                                           $prod[$i]['montant']=$montant;
                                        }
                                    }
                               // }



foreach($prod as $cle1=>$valeur1)
{
    foreach($valeur1 as $cle2=>$valeur2)
    
        {
          if($cle2=='quantité' && $valeur2<10){
            echo "<td id='rouge'> <strong> $valeur2 <strong></strong></td>";}
            else{
              echo "<td> <strong> $valeur2 <strong></strong></td>";}
            }
            echo "</tr>";
        }
   


/*for($i=0; $i<count($prod); $i++)
{
    if($prod[$i]['quantité']>10)
    {
        echo "<tr class='rouge'>
        <td>$prod[$i]['nom']</td>
        <td>$prod[$i]['quantité']</td>
        <td>$prod[$i]['prix']</td>
        </tr>";
    }
}*/

echo "</table>" ;
    ?>
  ...
</body>
</html>