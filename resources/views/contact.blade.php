@extends('master')
@section('content')

    <div class="col">
        <div class="row">
            <p class="fs-2 bg-secondary text-white">
                {{$title}}
            </p>
        </div>

        <div class="row d-flex flex-column justify-content-center">
            <div>
                <p class="m-0 fs-2">Store address:</p>
                <p class="mb-3">Jalan Pembangunan Baru Raya,</p>
                <p class="mb-3">Kompleks Pertokoan Emerald Blok III/12</p>
                <p class="mb-3">Bintaro, Tangerang Selatan</p>
                <p class="mb-3">Indonesia</p>
            </div>
            <div class="col">
                <p class="m-0 fs-2">Open Daily:</p>
                <p class="mb-3">08.00 - 20.00</p>
            </div>
            <div class="col">
                <p class="m-0 fs-2">Contact:</p>
                <p class="mb-3">Phone : 021-08123456789</p>
                <p class="mb-3">Email : happybookstore@happy.com</p>
            </div>    
        </div>

    </div>

@endsection
