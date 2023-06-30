<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreResultsController extends Controller
{
    public function fetchItems(Request $request)
{
    $limit = $request->input('limit', 3);
    $offset = $request->input('offset', 0);

    $titles = [
        "Title 4",
        "Title 5",
        "Title 6",
        "Title 7",
        "Title 8",
        "Title 9",
        "Title 10"
    ];

    $items = array_slice($titles, $offset, $limit);

    return response()->json([$items, count($titles)]);
}

}
