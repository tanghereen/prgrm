<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of product information
$products = [
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130000",
        "name" => "Apple",
        "unitPrice" => 1.99,
        "qty" => 5
    ],
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130001",
        "name" => "Banana",
        "unitPrice" => .49,
        "qty" => 5
    ],
    [
        "id" => "d05349fa-491f-11ec-81d3-0242ac130002",
        "name" => "Cherry",
        "unitPrice" => 2.19,
        "qty" => 5
    ],
    [
        "id" => "d0534aea-491f-11ec-81d3-0242ac130003",
        "name" => "Grapes",
        "unitPrice" => .59,
        "qty" => 5
    ],
    [
        "id" => "d0534d4c-491f-11ec-81d3-0242ac130004",
        "name" => "Orange",
        "unitPrice" => .39,
        "qty" => 5
    ]
];

echo json_encode($products);

?>