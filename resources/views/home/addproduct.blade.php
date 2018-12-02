@extends('layout')

@section('contant')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-12 col-md-12 col-sm-12">
        <div class="box">
            <h5 align="right">@foreach($shop as $shops) {{ $shops->name }} </h5>
            <p align="right" class="text-danger">
                شما می توانید محصولات فروشگاه خود را به راحتی اضافه کرده و به فروش بزارید،دقت کنید که باید توضیح خوبی
                برای محصول خود بدهید چرا که در غیر این صورت متن "متاسفانه توضیحی ندارد" چاپ خواهد شد
                همچنین اگر عکسی برای محصول قرار ندهید عکس پیش فرض سایت قرار خواهد گرفت.
                <br />
                فعلا در این نسخه امکان فروش آنلاین محصول شما نیست
            </p>
        </div>
    </div>
</div>

    <form method="get" action="{{ route('product.save' , $shops->id) }}">
        <br /><br />

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="product_name">نام محصول</label>
                <input name="product_name" id="product_name" class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label for="product_price">قمیت (تومان) محصول</label>
                <input name="product_price" id="product_price" class="form-control" />
            </div>
        </div>
            <div class="form-group">
                <label for="product_discription">توضیحات</label>
                <textarea class="form-control" name="product_discription" id="product_discription"></textarea>
                <br />

            </div>
            <div class="form-row">
                <input type="submit" class="btn btn-success" value="ایجاد محصول"  />
            </div>

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
