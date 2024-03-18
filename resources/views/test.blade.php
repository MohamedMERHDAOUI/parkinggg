<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Parking</title>
    </head>
  
<body>
<style type="text/css">

.Titre{
font-family: Bebas Neue;
font-size: 5em;
text-align: center; 
}

.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}

.button3:hover {
  background-color: red;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid blue;
}

.button2:hover {
  background-color: blue;
  color: white;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid green;
}

.button1:hover {
  background-color: green;
  color: white;
}
</style>
<button class="button button3">Accueil</button>
<a href ="inscription.blade.php"<button class="button button2">Inscription</button></a>
<button class="button button1">Réserver une place</button>
<br>
<?php
$NbrCol = 2;
$NbrLigne = 3;

echo '<table border="1" width="400">';

   echo '<tr>';
   echo '<td bgcolor="#CCCCCC">Parking</td>';
   for ($j=1; $j<=$NbrCol; $j++)
   {
   if ($j==1)
   	{
      echo '<td bgcolor="#FFFF66">Client</td>';
	}
   if ($j==2)
   	{
      echo '<td bgcolor="#D3151B">Super-Administrateur</td>';
	}
   else
   	{
      echo '<td bgcolor="#FFCC66">Administrateur</td>';
   	}	   
   }
   echo '</tr>';

for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
      if ($j==1) {
         echo '<td bgcolor="#FFFF66">'.$i.'</td>';
      }
       
      echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';

/*
Tableau pour faire avec la base de données: https://codes-sources.commentcamarche.net/faq/883-affichage-en-tableau-afficher-des-donnees-dans-un-tableau

<?php  include("_connexion.php") ; ?>
<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
// requête
$table = 'MATABLE';
$condition = ' WHERE DONNEE LIKE 'b%' ORDER BY DONNEE ASC';
$query = 'SELECT * FROM '.$table.$condition;
$result = mysql_query($query);
// -------------------------------------------------------
$NbreData = mysql_num_rows($result);
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$j = 1;
echo '<table border="1">';
while ($val = mysql_fetch_array($result)) {
   if ($j%$NbrCol == 1) {
      $NbrLigne++;
      echo "<tr>";
      $fintr = 0;
   }
   echo '<td>';
    // ------------------------------------------
    // AFFICHAGE des DONNEES de la fiche
   echo $val['DONNEE'];
   echo '<br>';
   echo '<i>'.$val['TYPE'].'</i>';
    // ------------------------------------------
   echo '</td>';
   if ($j%$NbrCol == 0) {
      echo "</tr>"; 
      $fintr = 1;
   }
   $j++;
}
if ($fintr!=1) { echo '</tr>'; }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html>
<?php
// déconnexion de la base
mysql_close(); 
?>
*/
?>

