@extends('layouts.app')
@section('content')
<div class='container py-5'>
    @if(isset($_GET["message"]))
        <div class="alert alert-success">
            {{ $_GET["message"] }}
        </div>
    @endif
    <div class="row">
        @foreach ($product as $item)
        <div class="col-lg-4 my-3">
            <div class="card p-3">
                <p>Code: {{$item->code}}</p>
                <p>Nama: {{$item->name}}</p>
                <p>Harga: {{$item->price}}</p>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-danger" href="{{ route('product.delete', ["id"=>$item->id]) }}">Delete</a>
                    <a class="ml-3 btn btn-primary" href="{{ route('product.edit', ["id"=>$item->id]) }}">Edit</a>
                </div>
                <div class="my-3">
                    {{ Form::open(['route' => ['product.destroy', $item->id], 'method' => 'delete']) }}
                    {{ Form::submit('Safe Delete',["class"=>"btn btn-danger btn-block"]) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
@endsection