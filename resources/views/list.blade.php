<!-- list.blade.php -->
<ul class="list">
    @foreach ($items as $item)
        <li class="list__item">
            <div class="image list__cover-image">IMG</div>
            <h3 class="list__title">{{ $item['title'] }}</h3>
        </li>
    @endforeach
    <button class="button button--wide button--w-icon">More results<i class="icon icon--small fa-solid fa-caret-down ml-1"></i></button>
</ul>