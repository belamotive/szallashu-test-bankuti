<div>
    <ul class="list row row-cols-sm-3">
        @foreach ($slicedTitles as $index => $title)
            <x-list-item :title="$title" :index="$index" />
            @if ($activeItem === $index)
            <div class="mobile-details-container">
                Details container for mobile
                <x-details-box :title="$activeTitle"/>
            </div>
            @endif
            @if ($activeItem !== null && ($index + 1) % 3 === 0)
            <div class="desktop-details-container w-100">
                Details container for desktop
                <x-details-box :title="$activeTitle"/>
            </div>
        @endif
        @endforeach
    </ul>

    @if ($itemsToShow < count($titles))
        <button wire:click="loadMore" class="button button--wide button--w-icon">
            More results
            <i class="icon icon--small fa-solid fa-caret-down ml-1"></i>
        </button>
    @endif
</div>
