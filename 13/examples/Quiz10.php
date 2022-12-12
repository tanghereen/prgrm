<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');


$cart = [
       [
        "id" => "b92d300d-6504-4dbd-8ec0-e07856a8b1a7",
        "name" => "Eucalyptus", 
        "unitCost" => 12.99, 
        "quantity" => 1
       ],
       [
        "id" => "77b72895-e2fa-4614-bfbb-5c216880c4a6", 
        "name" => "Lavender", 
        "unitCost" => 12.99, 
        "quantity" => 1
       ],
       [
        "id" => "c5f8887b-5000-4832-856b-5abfd8d4fe24", 
        "name" => "Peppermint", 
        "unitCost" => 15.99, 
        "quantity" => 1
       ],
       [
        "id" => "c02461bb-2eb8-4f75-8f58-f831bcfffbd8", 
        "name" => "Bergamot", 
        "unitCost" => 13.99, 
        "quantity" => 1
       ],
       [
        "id" => "c5a30dcb-4e5f-4ec3-8e30-d23806927c9b", 
        "name" => "Oregano", 
        "unitCost" => 14.99, 
        "quantity" => 1
       ]
    ];

echo json_encode($cart);

?>