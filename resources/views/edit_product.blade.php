@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <form action="{{ route('product.saved') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Code Product</label>
                <input type="text" name="code" class="form-control" value="{{$product->code}}" id="code" placeholder="Code Product">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name Product</label>
                <input type="text" name="name"  class="form-control" id="name" value="{{$product->name}}" placeholder="Name Product">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Categories Product</label>
                <select name="categories" id="categories" class="form-control">
                    <option value="1" {{ $product->categories == 1 ? 'selected' : '' }}>Pakaian</option>
                    <option value="2" {{ $product->categories == 2 ? 'selected' : '' }}>Minuman</option>
                    <option value="3" {{ $product->categories == 3 ? 'selected' : '' }}>Buku</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="text" name="price"  value="{{$product->price}}" id="code" class="form-control" id="price" placeholder="Harga Product">
            </div>
            <input type="hidden" name="id" value="{{$product->id}}" />
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection