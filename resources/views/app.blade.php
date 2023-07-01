<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szallas.hu - Bankuti - Sitebuild feladat</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main>
        <!-- Add your main content here -->
        @yield('content')
        <!-- Button trigger modal -->
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <button id="button-model-trigger" type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch modal
            </button>
        </div>

        <!-- Modal -->
        <div class="modal modal-lg fade modal--hidden" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <x-feedback iconClass="fa-regular fa-circle-check" message="Lorem ipsum dolor sit amet"></x-feedback>
                                <x-feedback iconClass="fa-regular fa-circle-check" message="Lorem ipsum dolor sit amet"></x-feedback>
                            </div>
                            <div class="col-sm-4">
                                <div class="image">IMG</div>
                            </div>
                        </div>
                        <div class="form-check form-switch d-flex justify-content-lg-start justify-content-center align-items-center my-4">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" aria-checked="false">
                            <label class="form-check-label ml-1" for="flexSwitchCheckDefault">Show specific results only</label>
                        </div>
                        <livewire:list-component />
                        <div class="d-flex justify-content-lg-center mt-4">
                            <x-feedback iconClass="fa-regular fa-circle-check" message="Lorem ipsum dolor sit amet consectetur adipisicing elit."></x-feedback>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button" data-bs-dismiss="modal">Close</button>
                    </div>
                    <div class="modal-footer modal-footer--custom justify-content-start">
                        <button class="button button--w-icon button-link">
                            <span class="button-link__text">Details</span>
                            <i class="icon icon--small fa-solid fa-caret-down ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
