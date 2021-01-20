<?php
function ubah_huruf($string){
$newstring = "";
for ($i=0; $i < strlen($string); $i++){
    $letter = $string[$i];
    $newstring .= ++$letter;
}
    return $newstring. "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>