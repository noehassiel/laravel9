@extends('front.layouts.main')

@section('content')
    <div class="col-md-12 hero">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-2 position-relative">
                <img src="{{ asset('img/one.png') }}" class="position-absolute" width="70%"
                    style="z-index: -1; rotate:180deg; opacity:.6; top:-200px; left:15%" alt="">
                <h1>Instantly get your order status</h1>

                <h3 class="mt-5 text-center" style="font-weight: 300">Simple, secure and fast</h3>

                <div class="d-flex align-items-center justify-content-center mt-5">
                    <form action="" method="get">
                        <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <button class="input-group-text">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 offset-md-3 rounded card ">
                <div class="card-body">
                    hh
                </div>
            </div>
        </div>
    </div>
@endsection
