<?php

$mahasiswa = [
    [
        "nama" => "Ferdiansyah Rahmatullah",
        "nrp" => "183040022",
        "email" => "private5443@gmail.com"
    ],
    [

        "nama" => 'Erik Doang',
        "nrp" => "183040022",
        "email" => "erik@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
