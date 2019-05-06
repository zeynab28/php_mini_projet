<!doctype html>
<html >
<head>
<style>
           body{
    background-image:url(j.jpg);
    background-repeat:repeat;
  }
        .rouge{
            background-color:red;
        }
        #form2{
            border:0px solid;
            width:40%;
            height:150px;
            margin-left:300px;
        }
        h1{
    font-size:60px;
      color:white;  
  }
        #but{
            margin-top:-80px;
            margin-left:350px;
        }
        #inputPassword2{
            margin-top:20px;
        }
        #rouge{
            background-color:red;
        }
        #t1 th{
      font-size:30px;
      color:white;
  }
        #t2 td{
    font-size:20px;

  }
    </style>
  <meta charset="utf-8">
  <title>supprimer produit</title>
  <link rek="stylesheet" href="boostrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
<form action="accueil.php">
<p>
    <label>
    <input type="submit" name="deconnect" id="deconect" value="Retour"><br>
    </label>
    </p>
</form>
<center><h1>voulez-vous supprimer un produit:</h1></center>
<div id="form2">
<form class="form-inline" action=supprimer.php method="POST">
    <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">nom</label>
    <input type="text" class="form-control" id="inputPassword2" name="supprimer" placeholder="nom produit">
  </div>

  </div>
  <button type="submit" class="btn btn-primary mb-2" id="but" name="modif">Supprimer</button>
</form>
</div>
<center><table border=1 width=80%>
    <tr id="t1">
    <th>nom</th> 
    <th>quantité</th>
    <th>prix</th>
    <th>montant</th>
    
    </tr>
<?php
   
   
$prod= array( 
array('nom'=>'eyeliner','quantité'=> 10,'prix'=> 8000,80000),
array('nom'=>'fond de teint','quantité'=>30,'prix'=> 1000,30000),          
array('nom'=>'mascara','quantité'=> 3,'prix'=> 2500,7500), 
array('nom'=>'beauty blender','quantité'=> 8, 'prix'=>1500,12000),
array('nom'=>'kit de pinceaux', 'quantité'=>12, 'prix'=>100,1200),
array('nom'=>'palette de fard à paupiéres','quantité'=> 7,'prix'=> 2000,140000),
array('nom'=>'illuminateur','quantité'=>20,'prix'=> 3500,700000),
array('nom'=>'fixateur','quantité'=>50,'prix'=>5000,250000)
            );
                                $sup=$_POST["supprimer"];
                                for($i=0; $i<count($prod); $i++)
                                {
                                if($sup==$prod[$i]['nom'])
                                {
                                    unset($prod[$i]);

                                }

                                
                                }
foreach($prod as $cle1=>$valeur1)
{
    foreach($valeur1 as $cle2=>$valeur2)
    
        {
            if($cle=='quantité' && $valeurs2<10){
            echo "<td  id='rouge'> <strong> $valeur2 <strong></strong></td>";}
            else{
                echo "<td> <strong> $valeur2 <strong></strong></td>";} 
            }
        
    echo "</tr>";
}
for($i=0; $i<count($prod); $i++)
{
    if($prod[$i]['quantité']>10)
    {
        echo "<tr>
        </tr>";
    }
}
for($i=0; $i<count($list); $i++){
    echo "<tr id='t2'>";
        $list[$i][3]=$list[$i]["quantité"]*$list[$i]["prix"];
        for($j=0; $j<count($list[$i]); $j++){
            
            if($list[$i]["quantité"]<10){
                echo "<td class='rouge'>".$list[$i][$j]."</td>";
            }
            else{
                echo "<td>".$list[$i][$j]."</td>";
            }
            
        }echo "</tr>";
        

}

    ?>
        </table></center> 

</body>
</html>