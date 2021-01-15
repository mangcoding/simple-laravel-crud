@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Code Product</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Code Product">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name Product</label>
                <input type="text" name="name"  class="form-control" id="name" placeholder="Name Product">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Categories Product</label>
                <select name="categories" id="categories" class="form-control">
                    <option value="1">Pakaian</option>
                    <option value="2">Minuman</option>
                    <option value="3">Buku</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="text" name="price"  class="form-control" id="price" placeholder="Harga Product">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection