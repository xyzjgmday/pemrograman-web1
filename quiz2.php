<?php
for ($i = 1; $i <= 10; $i++) {   
  for ($j = 1; $j <= 9; $j++) {  
    if (($j % 10) >= $i) {      
      echo $j % 10;
    }
  }
  echo "<br>";            
}
?>