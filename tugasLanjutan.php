<?php

$i = $_POST['pertama'];
$j = $_POST['kedua'];


if ($i>10) {
    echo "nilai i terlalu besar";
}elseif ($i<=0) {
    echo "nilai i tidak boleh lebih kecil dari 1";
}elseif ($j>10) {
    echo "nilai x terlalu besar";
}elseif ($j<=0) {
    echo "nilai x tidak boleh lebih kecil dari 1";
}else {
    $o = $i * $j;
    echo "hasil perkalian : ";
    echo $o;
}


?>