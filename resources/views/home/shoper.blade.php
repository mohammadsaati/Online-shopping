@extends('layout')


@section('contant')


<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xl-4 col-12">

        @if($photop == null)
            <img class="img-fluid" src="{{ asset('/images/8.jpg') }}" />
        @else
            <img class="img-fluid" src="{{ $photop->patch }}" />
        @endif

    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xl-8 col-12">
        <div class="box">
            <h5 align="right" class="card-title">نام فروشگاه : {{ $shops->name }}</h5>
            <p align="right">آدرس : {{ $shops->adress }}</p>
            <p align="right">تلفن : {{ $shops->phonenumber }}</p>
            <p align="right">{{ $shops->user->email }} : ایمیل </p>
            <p align="right" class="card-text"><small class="text-muted">نام فروشنده : {{ $shops->user->name }}</small></p>

                 @if(auth()->check() && auth()->id() == $shops->user_id)
                    <a href="{{ route('photo.create' , ['shop_id' => $shops->id , 'shop_name' => $shops->name]) }}" class="btn btn-outline-success">ایجاد عکس فروشگاه</a>
                @endif

        </div>
    </div>

</div>
<hr />
<br />
<div class="row" dir="rtl">

    @if($shops->discription)
        <div class="col-12 col-12 col-sm-12 col-md-12 col-xl-12">
            <p align="right">{{ $shops->discription }}</p>
        </div>
    @else
        <div class="col-12 col-12 col-sm-12 col-md-12 col-xl-12">
            <p align="right">متاسفانه این فروشگاه توضیحی ندارد</p>
        </div>
    @endif


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