<?php
echo"bonjour jDM";
echo "<body bgcolor=''>";

$NbrCol = 3;
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
      echo '<td bgcolor="#FFFF66">Administrateur</td>';
	}
   else
   	{
      echo '<td bgcolor="#FFFF66">Administrateur</td>'
   	}	   
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
