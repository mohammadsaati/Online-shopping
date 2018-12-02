@extends('layout')

@section('contant')
@foreach($product as $products)
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4 col-12">
        @if($presult == null)

            <img class="img-fluid" src="{{ asset('/images/8.jpg') }}" />

            @else

                <img class="img-fluid" src="{{ $presult->patch }}">

        @endif


    </div>

    <div class="col-lg-8 col-md-8 col-sm-6 col-xl-8 col-12">
        <div class="box">
            <h5 align="right" class="card-title">نام محصول : {{ $products->product_name }}</h5>
            <p align="right">قیمت : {{ $products->product_price }}</p>
            <p align="right" class="card-text"><small class="text-muted">فروشگاه {{ $products->shop->name }}</small></p>
            @if(auth()->check() && \App\Product::Permission($shop , $products->id) == '1')
                <a href="{{route('presult.create' , ["product_id" => $products->id ])}}" class="btn btn-success">ایجاد عکس برای محصول</a>
           @endif
        </div>
    </div>
</div>
    <br />
    <hr />
    <br />
    <div class="row" dir="rtl">

        @if($products->product_discription)
            <div class="col-12 col-12 col-sm-12 col-md-12 col-xl-12">
                <p align="right">{{ $products->product_discription }}</p>
            </div>
        @else
            <div class="col-12 col-12 col-sm-12 col-md-12 col-xl-12">
                <p align="right">متاسفانه این فروشگاه توضیحی ندارد</p>
            </div>
        @endif


    </div>
    @endforeach
@stop


@section('one-passage')
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
@stop