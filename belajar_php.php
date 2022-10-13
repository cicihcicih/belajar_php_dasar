<?php
$belajar ="jaga kebersihan";
echo $belajar;
echo "<br />";
//strlen untuk menghitung kalimat
echo strlen($belajar);
echo "<br />";
//str_word_count untuk menghitung kata
echo str_word_count($belajar);
echo "<br />";
//strrev untuk membalikan kata/kalimat
echo strrev($belajar);
echo "<br />";
//strpos untuk mencari karakter yang sama
echo strpos($belajar, "jaga");
echo "<br />";
//str_replace untuk mengganti kata
echo str_replace("jaga","jagalah", $belajar);
echo "<br />";
?>