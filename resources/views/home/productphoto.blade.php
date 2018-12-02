@extends('layout')

@section('contant')

    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">

        <div class="alert alert-info" role="alert">
            <h4 class="alert-haeding" align="right" dir="rtl">عکس محصول</h4>
            <p align="right" dir="rtl">
                شما می توانید برای محصول خود عکس مناسبی را انتخاب کنید . فقط دقت کنید که عکس محصول شما مناسب نباشد ممکن است محصول حذف شود
                <br /><br/>
                <strong>&bigotimes;</strong>اولین عکس به عنوان عکس اصلی انتخاب خواهد شد
                <br /><br/>
                <strong>&bigotimes;</strong>دقت کنید که بیش از سه عکس نمی توانید قرار دهید</p>
        </div>

        <hr />

        <form action="{{route('presult.save' , $products->id)}}" class="dropzone"  id="my-awesome-dropzone">
            {{ csrf_field() }}
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>

        </form>


    <div class="row">
        @foreach($products->presults as $photo)
        <div class="col-lg-4 col-xl-4">
                <img class="img-fluid card-img-top" src="{{ $photo->patch }}">
        </div>
        @endforeach
    </div>


    </div>


@stop


@section('one-passage')
    <br />
    <br />
    <br />
    <br />
    <br />

@stop
