<?php
echo"bonjour jDM"."<br>";
echo "<body bgcolor='white'>";
$NbrLigne = 3;
$NbrCol = 4;
echo '<table>';
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
         echo '<td>';
          // ------------------------------------------
          // AFFICHAGE ligne $i, colonne $j
         echo "Salut toi";
          // ------------------------------------------
         echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
