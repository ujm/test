<?php
ini_set('display_errors', 1);

setlocale(LC_ALL, 'ja_JP.UTF-8');
$handle = fopen("address.csv", "r");
while($data = fgetcsv($handle, 1024, ",")){
    $name = $data[0];
    $sex = $data[1];
    $postcode = $data[2];
    $address = $data[3];
}


// 検索条件
// 住所
if(!empty($address)){
    $address = addslashes($address);
    $where = "address REGEXP '$address' && ";
}

?>
