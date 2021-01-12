@extends('layouts.checkout')
@section('title', 'Your Cart')

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
                                Hello {{Auth::user()->name}}
                            </li>
                            <li class="breadcrumb-item active">
                                Your Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- Details Kiri -->
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Here Is Your Cart</h1>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Image</td>
                                        <td>Name</td>
                                        <td>QTY</td>
                                        <td>Price in Rp.</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody id="output_table">
                                    @forelse($carts as $crt)
                                    <tr>
                                        <td><img src="{{ asset('assets/admin/product_images/'.$crt->product->image) }}" height="60"></td>
                                        <td class="align-middle">{{ $crt->product->product_name }}</td>
                                        <td class="align-middle">{{$crt->qty}}</td>
                                        <td class="align-middle">{{$crt->qty *   $crt->product->price }}</td>
                                        <td class="align-middle">
                                            <a href="{{ URL::to('cart/delete/'.$crt->id) }}">
                                                <img src="{{url('frontend/images/ic_remove.png')}}" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th scope="row" colspan="6">No Data</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Detail</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Total Payment</th>
                                <td width="50%" class="text-right" >Rp. <a id="sum1" ></a> ,00</td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    <div class="join-container">
                        <a href="{{url('/checkout/success')}}" class="btn btn-block btn-join-now mt-3 py-2">Checkout</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{url('product')}}" class="text-muted">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{url('frontend/images/ic_doe.png')}}" />'
            }
        });
        var sum1 = 0;

        $("#output_table tr > td:nth-child(4)").each(
        (_,el) => sum1 += Number($(el).text()) || 0
        );

        $("#sum1").text(sum1);
        });

</script>
@endpush