<div>
    <ul class="list row row-cols-sm-3">
        @foreach ($slicedTitles as $title)
            <x-list-item :title="$title" />
        @endforeach
    </ul>

    @if ($itemsToShow < count($titles))
        <button wire:click="loadMore" class="button button--wide button--w-icon">
            More results
            <i class="icon icon--small fa-solid fa-caret-down ml-1"></i>
        </button>
    @endif
</div>
