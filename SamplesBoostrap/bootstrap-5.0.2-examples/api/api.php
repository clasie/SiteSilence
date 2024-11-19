<?php 
include 'header.php';

// Exemple de données à retourner en JSON
$data = [
    "status" => "success",
    "message" => $result,
    "users" => [
        [
            "id" => 1,
            "name" => "Alice",
            "email" => "alice@example.com"
        ],
        [
            "id" => 2,
            "name" => "Bob",
            "email" => "bob@example.com"
        ],
        [
            "id" => 3,
            "name" => "Charlie",
            "email" => "charlie@example.com"
        ]
    ]
];

// Conversion du tableau PHP en JSON
echo json_encode($data);
