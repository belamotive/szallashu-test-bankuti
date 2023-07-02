<div>
    <ul class="list row row-cols-sm-3">
        @foreach ($slicedTitles as $index => $title)
            <x-list-item :title="$title" :index="$index" />
            <!-- Render deatils box for mobile view -->
            @if ($activeItem === $index)
                <div class="mobile-details-container">
                    <x-details-box :title="$activeTitle" :index="$activeItem"/>
                </div>
            @endif
            <!-- Render deatils box for desktop view -->
            @if ($activeItem !== null && $activeItem < 3 && ($index + 1) === 3)
                <div class="desktop-details-container w-100">
                    <x-details-box :title="$activeTitle" :index="$activeItem"/>
                </div>
            @endif
        @endforeach
    </ul>

    <!-- Render "Load More" button if there are more items to show -->
    @if ($itemsToShow < count($titles))
        <button wire:click="loadMore" class="button button--wide button--w-icon">
            More results
            <i class="icon icon--small fa-solid fa-caret-down ml-1"></i>
        </button>
    @endif
</div>
