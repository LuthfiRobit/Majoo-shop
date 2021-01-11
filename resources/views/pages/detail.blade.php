@extends('layouts.app')
@section('title', 'Detail Product')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-pg-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Product
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- Details Kiri -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->product_name }}</h1>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ asset('assets/admin/product_images/'.$item->image) }}" class="xzoom" id="xzoom-default"
                                    xoriginal="{{ asset('assets/admin/product_images/'.$item->image) }}">
                            </div>
                        </div>
                        <h2>About Product</h2>
                        <p>{!!$item->about!!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>More Details</h2>
                        <hr>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Stock Product</th>
                                <td width="50%" class="text-right">{{$item->stock}} pc </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">Rp. {{$item->price}},00/P</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        @auth
                            <form action="" method="POST">
                                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                    Add to Chart
                                </button>
                            </form>
                        @endauth
                        @guest
                        <a href="{{url('login')}}" class="btn btn-block btn-join-now mt-3 py-2">Login or Register to Buy</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/dist/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/dist/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });

</script>
@endpush