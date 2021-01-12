@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{$item->title}}</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route('product.update', $item->id)}}" enctype="multipart/form-data"  method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="product_name">Title</label>
                    <input type="text" class="form-control" name="product_name" placeholder="product_name " value="{{$item->product_name}}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control"
                        placeholder="About">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                </div>
                
                <div class="form-group">
                    <label for="stock">Stok</label>
                    <input type="number" class="form-control" name="stock" placeholder="Stock"" value="{{$item->stock}}">
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Product Picture *</label>
                        {{-- <img src="{{ asset('assets/admin/product_images/'.$item->image) }}" style="width: 100px"> --}}
                        <small>Current Picture</small>
                    </div>
                    <div class="col-12 col-md-9">
                        <input  type="file" name="image" id="image" placeholder="Image" class="form-control">
                        <small class="form-text text-muted" style="color: red">{{ $errors ? $errors->first('image') : '' }}</small>
                    </div>
                </div>
                <button class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection