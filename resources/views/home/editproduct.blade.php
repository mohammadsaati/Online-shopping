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
    @foreach($product as $products)

        <form method="get" action="{{ route('product.update' , ["product_id" => $products->id , "user_id" =>auth()->id()]) }}">
            <br /><br />

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="product_name">نام محصول</label>
                    <input name="product_name" id="product_name" class="form-control" value="{{ $products->product_name }}" />
                </div>

                <div class="form-group col-md-6">
                    <label for="product_price">قمیت (تومان) محصول</label>
                    <input name="product_price" id="product_price" class="form-control" value="{{ $products->product_price }}" />
                </div>
            </div>
            <div class="form-group">
                <label for="product_discription">توضیحات</label>
                <textarea class="form-control" name="product_discription" id="product_discription">
                    {{ $products->product_discription }}
                </textarea>
                <br />

            </div>
            <div class="form-row">
                <input type="submit" class="btn btn-success" value="به روز رسانی"  />
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