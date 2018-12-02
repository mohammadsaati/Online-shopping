@extends('layout')

@section('contant')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
            <a href="{{ route('shop.create') }}" class="btn btn-danger">ایجاد مغازه</a>
            <a href="#" class="btn btn-info">ایجاد پست</a>
        </div>
    </div>
        <br />
        <div class="row">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
                <div class="box">
                    <h5 align="right">فروشگاه های شما</h5>
                    <hr />
                @foreach($user->shops as $shop)

                <div class="row">

                    <div class="col-lg-2 col-xl-2 d-none d-lg-block">
                        <a href="{{ route('shop.edit' , $shop->id)}}" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="col-lg-2 col-xl-2 d-none d-lg-block">
                        <a href="{{ route('shop.delete' , $shop->id) }}" class="btn btn-danger">حذف</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xl-2 col-12">
                        <a href="{{ route('product.create' , $shop->id) }}" class="btn btn-success">افزودن محصول</a>
                    </div>
                    <div class="col-lg-2 col-xl-2 d-none d-lg-block">
                        <a href="{{route('shoper.show' , $shop->id)}}" class="btn btn-info">مشاهده</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 col-12"><p align="right">{{ $shop->name }}</p></div>
                </div>

                @endforeach
            </div>
        </div>
    </div>


    @include('include.userproducts')

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
