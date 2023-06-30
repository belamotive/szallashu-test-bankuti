<?php
function fetchItemsFromDatabase($limit)
{
    $titles = [
        "Title 1",
        "Title 2",
        "Title 3"
    ];

    return array_slice($titles, 0, $limit);
}

$limit = $_GET['limit']; // Get the limit from the AJAX request

// Fetch the additional items from the database
$additionalItems = fetchItemsFromDatabase($limit);

// Return the additional items as JSON response
header('Content-Type: application/json');
echo json_encode($additionalItems);
?>
