@extends('layout')
@section('contant')

    <div class="row">
        @foreach($product as $products)
            <div class="col-lg-3">
                <div class="box">
                    <div class="card">
                        @if($photo = \App\Presult::Searchphoto($products->id))

                            @if($photo != null)
                                <img class="card-img-top img-fluid" src="{{ $photo->patch }}" />
                            @else
                                <img class="card-img-top img-fluid" src="{{ asset('/images/8.jpg') }}" />
                            @endif
                        @endif
                        <div class="card-body">
                            <div class="card-title"><h5 align="right">{{ $products->product_name }}</h5></div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><p align="right" dir="rtl">قیمت : {{ $products->product_price }}</p></li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('product.onlyshow' , $products->id) }}" class="btn btn-outline-primary" dir="rtl">بیشتر...</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
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
