@extends('layout')

@section('contant')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="box">
                <h3 align="right">به روز کن!</h3>
                <br />
                <p align="right">
                    شما می توانید هر مشخه ای از فروشگاه خود را به روز رسانی کیند
                </p>
            </div>
        </div>
    </div>
    <br />
    @foreach($shop as $shops)

        <form method="get" action="{{ route('shop.update' , $shops->id) }}">
            {{ csrf_field()}}
            <div class="form-row">
                    <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">

                        <input type="text" name="name" id="name" class="form-control" placeholder="نام فروشگاه" value="{{ $shops->name }}"/>
                    </div>
                    <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">

                        <input type="text" name="city" id="city" class="form-control" placeholder="شهر" value="{{ $shops->city }}"/>
                    </div>
                    <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">

                        <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="شماره تلفن" value="{{ $shops->phonenumber }}"/>
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <input type="text" name="str_code" class="form-control" placeholder="کد فروشگاه" value="{{ $shops->str_code }}"/>
                </div>
                <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <input type="text" name="adress" class="form-control" placeholder="آدرس" value="{{ $shops->adress }}"/>
                </div>
                <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <input type="text" name="telegram_id" class="form-control" placeholder="ایدی تلگرام" value="{{ $shops->telegram_id }}"/>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="discription" placeholder="توضیحات" width="100%">{{ $shops->discription }}</textarea>
            </div>
            <input type="submit" class="btn btn-success" value="به روز کردن" />
        </form>
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