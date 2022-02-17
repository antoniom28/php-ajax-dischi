<?php
$genre_data = [
    [
        'id' => 0,
        'genre' => 'Rock'
    ],
    [
        'id' => 1,
        'genre' => 'Pop'
    ],
    [
        'id' => 2,
        'genre' => 'Jazz'
    ],
    [
        'id' => 3,
        'genre' => 'Metal'
    ],
];

header('Content-Type: application/json');
echo json_encode($genre_data);
?>