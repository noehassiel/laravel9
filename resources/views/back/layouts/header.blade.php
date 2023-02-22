<div class="col-md-12 d-flex justify-content-between align-items-center mb-4">
    @yield('header')
    <div class="d-flex justify-content-between align-items-center">
        <a class="me-5 text-black">
            <ion-icon style="font-size: 30px" name="search-outline"></ion-icon>
        </a>
        <div class="dropdown">
            <a class="profile-pic" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/pro.jpg') }}" alt="">
            </a>

            <div class="dropdown-menu mt-3 p-3">

                <div class="d-flex flex-column justify-content-center align-items-center">

                    <strong>name</strong>
                </div>
            </div>
        </div>
    </div>
</div>
