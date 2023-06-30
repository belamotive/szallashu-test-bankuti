@php
    $titles = [
        "Title 1",
        "Title 2",
        "Title 3"
    ];

    $itemsToShow = 6; // Number of items to show initially
    $itemsPerLoad = 3; // Number of additional items to load on each "More results" click

    $totalItemCount = count($titles);
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Szallas.hu - Bankuti - Sitebuild feladat</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>
    <body>
        <main>
            <!-- Add your main content here -->
            @yield('content')
            <!-- Button trigger modal -->
            <div
                class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
            >
                <button
                    id="button-model-trigger"
                    type="button"
                    class="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                >
                    Launch modal
                </button>
            </div>

            <!-- Modal -->
            <div
                class="modal modal-lg fade modal--hidden"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                Modal title
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-8 mb-3">
                                    <div class="feedback">
                                        <i
                                            class="icon fa-regular fa-circle-check"
                                        ></i>
                                        <p class="feedback__paragraph">
                                            Lorem ipsum dolor sit amet
                                        </p>
                                    </div>
                                    <div class="feedback">
                                        <i
                                            class="icon fa-regular fa-circle-check"
                                        ></i>
                                        <p class="feedback__paragraph">
                                            Lorem ipsum dolor sit amet
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="image">IMG</div>
                                </div>
                            </div>
                            <div
                                class="form-check form-switch d-flex justify-content-center align-items-center my-4"
                            >
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    id="flexSwitchCheckDefault"
                                    aria-checked="false"
                                />
                                <label
                                    class="form-check-label ml-1"
                                    for="flexSwitchCheckDefault"
                                    >Show specific results only</label
                                >
                            </div>
                            <ul class="list">
                                @include('list', ['titles' => $titles])
                                <button
                                    id="more-results"
                                    class="button button--wide button--w-icon"
                                >
                                    More results<i
                                        class="icon icon--small fa-solid fa-caret-down ml-1"
                                    ></i>
                                </button>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="button"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

<script>
    document.getElementById("more-results").addEventListener("click", function() {
        // Fetch additional items using AJAX
        fetch('/api/more-results?limit=' + <?= $itemsPerLoad; ?> + '&offset=' + <?= $itemsToShow; ?>)
            .then(response => response.json())
            .then(data => {
                // Append the new items to the list
                const list = document.querySelector('.list');
                data.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list__item';
                    listItem.innerHTML = `
                        <div class="image list__cover-image">IMG</div>
                        <h3 class="list__title">${item}</h3>
                    `;
                    list.appendChild(listItem);
                });

                // Update the number of items to show for the next "Load More" click
                <?= $itemsToShow += $itemsPerLoad; ?>

                // Hide the "Load More" button if all items are shown
                if (<?= $itemsToShow; ?> >= <?= $totalItemCount; ?>) {
                    document.getElementById("more-results").style.display = "none";
                }
            });
    });
</script>
