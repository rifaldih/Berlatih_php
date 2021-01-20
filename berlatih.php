<?php
function tentukan_nilai($number){
   if($number >= 85  && $number <=100){
      echo "nilai = " .$number. " Sangat Baik <br>";
   }
   if($number >= 70  && $number <=85){
      echo "nilai = " .$number. " Baik <br>";
   }
   if($number >= 60  && $number <=70){
      echo "nilai = " .$number. " Cukup <br>";
   }
   if($number >= 0  && $number <=60){
      echo "nilai = " .$number. " Kurang <br>";
   }
}
      
     
       
//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>

