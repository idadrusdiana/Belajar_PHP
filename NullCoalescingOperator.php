<?php

$data = [];
// $data = [ //contoh actionnya ada data
//     'action' => 'idad'
// ];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action . PHP_EOL;

//Jika menggunakan Null Coalescing Operator

$data = [];
$action = $data['action'] ?? 'nothing';

echo $action;