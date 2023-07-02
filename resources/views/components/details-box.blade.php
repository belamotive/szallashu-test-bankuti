@php
    $containerClass = '';

    // Set the container class based on the index
    if ($index === 0) {
        $containerClass = 'details-box--arrow-left';
    } elseif ($index === 2) {
        $containerClass = 'details-box--arrow-right';
    }
@endphp

<div class="details-box row {{ $containerClass }} my-3 py-3">
  <div class="col-lg-4 details-box__image-col">
    <div class="image details-box__image">IMG</div>
  </div>
  <div class="col-lg-8 details-box__text-col">
    <h3 class="list__title deails-box__title">{{ $title }}</h3>
    <div class="rating-box">
      <span class="badge text-bg-success rating-box__rating-score">9.6</span>
      <div class="rating-box__rating-counter">115 ratings</div>
    </div>
    <div class="location-info">3535 Miskolc, Tokaji Ferenc utca 51. (Magyarorszag)</div>
    <div class="review-box my-2">
      <div class="review-box__review-text">"Item review: Pellentesque habitant morbi tristique senectus et netus et malesuada fames."</div>
      <div class="review-box__reviewer">Reviewer name</div>
    </div>
    <div class="more-info">
      <div class="more-info__text">Prices, opening hours and reviews</div>
      <div class="more-info__button">more details &#187;</div>
    </div>
  </div>
  <div wire:click="toggleDetails({{$index}})" class="icon details-box__close-button"><i class="fa-solid fa-xmark"></i></div>
</div>