<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListComponent extends Component
{
    public $titles = [
        "Title 1",
        "Title 2",
        "Title 3",
        "Title 4",
        "Title 5",
        "Title 6",
        "Title 7",
        "Title 8"
    ];

    public $itemsToShow = 3; // Number of items to show initially
    public $itemsPerLoad = 3; // Number of additional items to load on each "More results" click

    public function loadMore()
    {
        $this->itemsToShow += $this->itemsPerLoad;
    }

    public function render()
    {
        $slicedTitles = array_slice($this->titles, 0, $this->itemsToShow);

        return view('livewire.list-component', [
            'slicedTitles' => $slicedTitles,
        ]);
    }
}
