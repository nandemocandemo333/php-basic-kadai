<?php
$name = '名前';
$price = '値段';
$area = '産地';

$vegetable_data = [$name=>'玉ねぎ',$price=>'200',$area=>'北海道'];

foreach ($vegetable_data as $key => $value){
    echo "{$key}：{$value} <br>";
}

