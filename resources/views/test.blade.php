<?php
echo"bonjour jDM";
echo "<body bgcolor=''>";

$NbrCol = 9;
$NbrLigne = 9;

echo '<table border="1" width="400">';

   echo '<tr>';
   echo '<td bgcolor="#CCCCCC">i X j</td>';
   for ($j=1; $j<=$NbrCol; $j++) {
      echo '<td bgcolor="#FFFF66">'.$j.'</td>';
   }
   echo '</tr>';

for ($i=1; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$NbrCol; $j++) {
       
      if ($j==1) {
         echo '<td bgcolor="#FFFF66">'.$i.'</td>';
      }
       
         if ($i==$j) {
            echo '<td bgcolor="#FFCC66">';
         } else {
            echo '<td>';
         }
         
      echo $i*$j;
       
      echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
