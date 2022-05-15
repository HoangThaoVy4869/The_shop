@extends('layout')
@section('header')
    <nav class="navbar navbar-expand-sm navbar-orange" style="background-color: #ccc; height: 50px; font-size:20px; justify-content: center;">
        <ul class="navbar-nav mr-sm-4"></ul>
        <ul class="navbar-nav mr-sm-4">
            @foreach($categories as $categoryItem)
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff; padding-right: 50px;" href="{{ route('product.category',$categoryItem->id) }}">{{$categoryItem->name}}</a>
                </li>
            @endforeach
        </ul>
        <ul class="navbar-nav mr-sm-4"></ul>
    </nav>

@endsection
@section('content')

    @include('slider')

    <h4 class="sp-title"> >>> Sản phẩm</h4>
    <div class="row">
        @foreach($product as $productItem)
            <div class="product col-md-2" style="box-shadow: 1px 1px #ccc; border-radius: 5px;">
                <a href="{{route('detail',['id'=>$productItem->id])}}"><img src="{{$productItem->feature_image_path}}" alt="Hinh san pham" height="150px" width="100%"></a>
                <a href="{{route('detail',['id'=>$productItem->id])}}"><p class="card-text content-font" style="color: #0c0c0d;">{{$productItem->name}}</p></a>
                <br>
                <a href="{{route('detail', ['id'=>$productItem->id])}}"><p class="card-text content-font" style="color: #ff5847;">{{number_format($productItem->price)}}<span> đ</span></p></a>
            </div>
        @endforeach
    </div>
@stop
