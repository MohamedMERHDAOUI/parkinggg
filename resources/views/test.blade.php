<?php
echo"bonjour jDM";
echo "<body bgcolor='white'>";
$NbrLigne = 
echo '<table>';
for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
         echo '<td>';
          // ------------------------------------------
          // AFFICHAGE ligne $i, colonne $j
         echo $affichage;
          // ------------------------------------------
         echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
