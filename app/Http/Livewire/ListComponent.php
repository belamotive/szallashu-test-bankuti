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
        $this->itemsToShow += $this->itemsPerLoad; // Increase the number of items to show
    }

    public $activeItem = null; // Currently active item index
    public $activeTitle = null; // Currently active item title

    public function toggleDetails($index)
    {
        if ($this->activeItem === $index) {
            $this->activeItem = null; // Deactivate the current item
            $this->activeTitle = null;
        } else {
            $this->activeItem = $index; // Set the clicked item as active
            $this->activeTitle = $this->titles[$index]; // Pass active item title to component
        }
    }

    public function render()
    {
        $slicedTitles = array_slice($this->titles, 0, $this->itemsToShow); // Slice the titles array based on the number of items to show

        return view('livewire.list-component', [
            'slicedTitles' => $slicedTitles
        ]);
    }
}
