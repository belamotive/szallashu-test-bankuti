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
                    onclick="showModal()"
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
                                <div class="col-md-12 col-lg-8 mb-4">
                                    <div class="feedback">
                                        <i
                                            class="feedback__icon fa-regular fa-circle-check"
                                        ></i>
                                        <p class="feedback__paragraph">
                                            Lorem ipsum, dolor sit amet
                                        </p>
                                    </div>
                                    <div class="feedback">
                                        <i
                                            class="feedback__icon fa-regular fa-circle-check"
                                        ></i>
                                        <p class="feedback__paragraph">
                                            Lorem ipsum, dolor sit amet
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="modal__cover-image">IMG</div>
                                </div>
                            </div>
                            <div
                                class="form-check form-switch d-flex align-items-center my-4"
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
