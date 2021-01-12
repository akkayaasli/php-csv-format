<?php

$tempArray;

for($i=0; $i<50; $i++)
    $tempArray[$i] = substr(md5(rand(0,90)),0,8);

    $ConvertJson = json_encode($tempArray);

    print_r($ConvertJson);

    $file = fopen('file.csv', 'w');

    foreach ($tempArray as $satir) {
        fputcsv($file, explode(',',$satir)); 
    }

    fclose($file);

?>

