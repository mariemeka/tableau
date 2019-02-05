<!doctype html>
<html>
<head>
<title> tableau </title>
</br>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">
</head>
<body>
<center><h1> tableau</h1></center>
<center><table border="1" width=30%  >
<td>
<center> <img src="photo.jpg" width="200" height="205" align="center"> </br></br></center><hr>

<?php
$personne=array(
"NOM    :"=>"KA",
"PRENOM  :"=>"MARIEME",
"NUMERO  :"=>"777777745",
"EMAIL   :"=>"marieme1212@gmail.com",
"ADRESSE     :"=>"hlm grand yoff",
"ID_SLACK     :"=>"marieme1212",
"ID_GITHUB  :"=>"mariemeka",
);
foreach($personne as $key =>$value){
echo $key.   '   ' .$value.  '<br/>';
}
?>
</td>
</table></center>