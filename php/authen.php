<!DOCTYPE html>
<html>
<head>
<title>authentification</title>
<meta charget="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<style>
  body{
    background-image:url(j.jpg);
    background-repeat:no-repeat;
    text-align:center;
    background-image:100%;
  }
  
 
</style>
</head>
<body>
  
<center><h1 style=font-family:fantasy>page d'authentification</h1></center>
<p>bienvenue sur notre plateform de vente de produit cosmétiques</p> 
<div id="form1"  style=margin-left:300px>
<form action="authen.php" method="POST">
<div class="form-group row">
    <label for="inputnom3" class="col-sm-2 col-form-label" id="nom1"  ><strong>Nom:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" id="email" ><strong>Login:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  name="email" placeholder="" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label" id="pass"><strong>Mot de passe:</strong></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="mdp" placeholder="" style=width:50%>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn">connexion</button>
    </div>
  </div>
</form>
</div>
<?php
$tableaux=array(
        array("ndioufa","ndioufa1","passer123"),
        array("seynabou","seyna1","nabou123"),
        array("jolie","joli1","joli123")
);
/*$val=$_POST["nom"];
$val1=$_POST["email"];
$val2=$_POST["mdp"];
for($i=0;$i<count($tableaux[$i]);$i++){
  for($j=0;$j<$tableaux[$i];$j++){
    if($val==$tableaux[$i][0] && $val1==$tableaux[$i][1] && $val2==$tableaux[$i][2]){
 
    
        header('location:accueil.php');
    
    
      }else{
        header('location:authentification.php');

      }
    }
    }*/
    for($i=0;$i<count($tableaux[$i]);$i++){
      if ($_POST[nom]==$tableaux[$i][0]){
      for($j=0;$j<count($tableaux[$j]);$j++){
      if ($_POST[email]==$tableaux[$j][1]){
      for($k=0;$k<count($tableaux[$k]);$k++){
      if ($_POST[mdp]==$tableaux[$k][2]){
      
          header('location:acceuil1.php');
      
      }
      }
      }
      }
      }
      /*else{
          header('location:authentification.php');
      
      }*/
      }
      
      
?>
</body>
</html>