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
        "Title 6"
    ];

    public $itemsToShow = 3; // Number of items to show initially
    public $itemsPerLoad = 3; // Number of additional items to load on each "More results" click

    public function loadMore()
    {
        $this->itemsToShow += $this->itemsPerLoad;
    }

    public $activeItem = null;

    public function toggleDetails($index)
    {
        if ($this->activeItem === $index) {
            $this->activeItem = null;
            $this->activeTitle = null;
        } else {
            $this->activeItem = $index;
            $this->activeTitle = $this->titles[$index];
        }
    }

    public function render()
    {
        $slicedTitles = array_slice($this->titles, 0, $this->itemsToShow);

        return view('livewire.list-component', [
            'slicedTitles' => $slicedTitles,
        ]);
    }
}
