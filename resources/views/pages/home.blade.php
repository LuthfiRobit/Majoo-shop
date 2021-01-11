@extends('layouts.app')

@section('title')
Majoo
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>find Our Products Here
    </h1>
</header>
<main>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ asset('assets/admin/product_images/'.$item->image) }}">
                        <div class="travel-country mb-1">{{$item->product_name}}</div>
                        <div class="travel-location">Rp. {{$item->price}},00/P</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail',$item->slug)}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                {{-- <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('frontend/images/travel_2.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO, PROBOLINGGO</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('frontend/images/travel_3.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENIDA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('frontend/images/travel_4.jpg');">
                        <div class="travel-country">MIDDLE EAST</div>
                        <div class="travel-location">DUBAI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</main>
@endsection