@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('custom-styles/styles.css') }}">

    <section class="content p-3 px-lg-5 py-lg-3">
        <div class="row justify-content-center align-items-center">
            <div class="row g-1" id="main-container">
                <div class="col-12">
                    <div class="d-flex justify-content-around">
                        <div class="col-3 bg-1 heart" style="background-image: url('{{ asset('images/top-2-l.jpg') }}')"></div>
                        <div class="col-3 bg-1 heart" style="background-image: url('{{ asset('images/top-2-m.jpg') }}')"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex gap-1 justify-content-center">
                        <div class="col-4 bg-2 heart" style="background-image: url('{{ asset('images/top-3-l.jpg') }}')"></div>
                        <div class="col-4 bg-2 heart" style="background-image: url('{{ asset('images/top-3-m.jpg') }}')"></div>
                        <div class="col-4 bg-2 heart" style="background-image: url('{{ asset('images/top-3-r.jpg') }}')"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex gap-1 justify-content-center">
                        <div class="col-3 bg-3 heart" style="background-image: url('{{ asset('images/bot-3-l.png') }}')"></div>
                        <div class="col-3 bg-3 heart" style="background-image: url('{{ asset('images/bot-1.png') }}')"></div>
                        <div class="col-3 bg-3 heart" style="background-image: url('{{ asset('images/bot-3-r.png') }}')"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex gap-1 justify-content-center">
                        <div class="col-3 bg-3 heart" style="background-image: url('{{ asset('images/bot-2-l.jpg') }}')"></div>
                        <div class="col-3 bg-3 heart" style="background-image: url('{{ asset('images/bot-2-r.jpg') }}')"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex gap-3 justify-content-center">
                        <div class="col-3 bg-3 solo" style="background-image: url('{{ asset('images/bot-3-m.png') }}')"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
